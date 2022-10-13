<?php
// https://habr.com/en/post/137664/
// инструкция по вставки через PDO

require_once ("../connect_db.php");
require_once ("../new_kp_info/test_file_name.php"); // если имя файла занято, то добавится индекс
require_once ("../new_kp_info/analiz_siroy_kp.php");
require_once ("../new_kp_info/format_new_kp.php");

// считваем все данные из ПОСТ формы
$KpNumber =  $_POST['KpNumber'];
// считваем стоимость доставки 
$DostCost =  $_POST['DostCost'];

// тип КП - откуда пришел запрос
$type_kp = $_POST['type_kp'];

// если нет номера КП то берем последний мы БД
if ($KpNumber == ''){ 
$stmt = $pdo->prepare("SELECT last_kp_number FROM `sys_setup`");
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
$KpNumber = $arr[0]['last_kp_number'] + 1;
$priz_update_kp_numer = 1;
}
// Дату используем в разных форматах для КП и для БД  
$KpDate = $_POST['KpDate'];
$KpDate = date('Y-m-d', strtotime($KpDate));



$now = new DateTime($_POST['KpDate']);
$KpDate_temp = $now->format('d.m.Y');


$KpDate == ''?$KpDate= date('Y-m-d'): $KpDate=$KpDate; // если дата пустая, то стапвим сегодня
$KpDate == '1970-01-01'?$KpDate= date('Y-m-d'): $KpDate=$KpDate;
$KpDate == '0000-00-00'?$KpDate= date('Y-m-d'): $KpDate=$KpDate;

// Если задан ИНН то проверим его по БД, если добавляем по инн, то нужно будет его ввести в Базу
$InnCustomer = $_POST['InnCustomer'];
// ******************* делаем запрос, чтобы узнать есть ли у нас в БД этот ИНН ********
$NameCustomer = $_POST['NameCustomer'];
// Если нет контактного лица, то пишем отдел продаж
$_POST['ContactCustomer'] ==''?$ContactCustomer = 'Отдел продаж': $ContactCustomer = $_POST['ContactCustomer'];

$TelCustomer = $_POST['TelCustomer'];
$EmailCustomer = $_POST['EmailCustomer'];

$idKp = date('Y').date('m').date('d').(127 + date('H')+ date('i')+date('s')*32 )*2; // неповтор
$KpImportance = $_POST['KpImportance']; 
$Responsible = $_POST['responsible'];
$adress = $_POST['Adress'];
$date_write = date('Y-m-d');


$comparr = array ('InnCustomer' => $InnCustomer,
                   'KpNumber' => $KpNumber ,
                   'KpDate' => $KpDate_temp,
                   'NameCustomer' => $NameCustomer,
                   'KpImportance' => $KpImportance ,
                   'Adress' => $adress );
$comparr += array ('ContactCustomer' => $ContactCustomer);
$comparr += array ('Email' => $EmailCustomer);
$comparr += array ('Telephone' => $TelCustomer);
$comparr += array ('responsible' => $Responsible);
$comparr += array ('DostCost' => $DostCost);


//  ***************************************************************************************
# ЗАГРУЖАЕМ НЕОБХОДИМЫЕ ФАЙЛЫ НА САЙТ
$uploaddir = '../NEW_KP/';
$uploadfile = $uploaddir.$_FILES['upload_file']['name'];
// Если в директории есть файл с таким  именем (запустили одновременно создание 2-х КП),файл будет сохранен с названием name_1.***
$temp = safe_file($uploadfile);
// Сохораняем файл на сервер
if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $temp)) {
           // echo "Файл корректен и был успешно загружен.\n";
          // header("Location: ../index.php?fullload=777"); exit();
          // echo "file v papke";
       } else {
            echo '<pre>';
            echo "Некоторая отладочная информация:\n";
            print_r($_FILES);
            echo "</pre>";
        }

// ***************Выбираем список товаров из файла *************************************
$products = analiz_kp($temp);
// **************************************************************************************
$temp_array = format_new_kp($products, $comparr); // Формируем КП и получаем сумму КП 
unlink($temp);  // удаляем загружаемый файл, Нах их копить

$KpSum = $temp_array['total'];
$KpFileName= $temp_array['KpFileName'];
$LinkKp = 'EXCEL/'.$KpFileName;





// echo ':KpNumber=', $KpNumber."<br>";
// echo ':KpData=', $KpDate."<br>";
// echo ':InnCustomer=', $InnCustomer."<br>";
// echo ':NameCustomer=', $NameCustomer."<br>";
// echo ':idKp=', $idKp."<br>";
// echo ':KpImportance=', $KpImportance."<br>";
// echo ':Responsible=', $Responsible."<br>";
// echo ':KpSum=', $KpSum."<br>";
// echo ':adress=', $adress."<br>";
// echo ':date_write=', $date_write."<br>";
// echo ':LinkKp=', $LinkKp."<br>";


// **************** вставляем каждый параметр  данных  *********************
$stmt  = $pdo->prepare("INSERT INTO `reestrkp` 
                       (KpNumber, KpData, InnCustomer, NameCustomer, idKp, KpImportance, Responsible, KpSum, adress, date_write, LinkKp, type_kp)
                       VALUES (:KpNumber, :KpData, :InnCustomer, :NameCustomer, :idKp, :KpImportance, :Responsible, :KpSum, :adress, :date_write, :LinkKp, :type_kp)");

$stmt ->bindParam(':KpNumber', $KpNumber);
$stmt ->bindParam(':KpData', $KpDate);
$stmt ->bindParam(':InnCustomer', $InnCustomer);
$stmt ->bindParam(':NameCustomer', $NameCustomer);
$stmt ->bindParam(':idKp', $idKp);
$stmt ->bindParam(':KpImportance', $KpImportance);
$stmt ->bindParam(':Responsible', $Responsible);
$stmt ->bindParam(':KpSum', $KpSum);
$stmt ->bindParam(':adress', $adress);
$stmt ->bindParam(':date_write', $date_write);
$stmt ->bindParam(':LinkKp', $LinkKp);
$stmt ->bindParam(':type_kp', $type_kp);


if ($stmt ->execute()) {
  $last_id = $pdo->lastInsertId(); // получаем id - введенной строки 
  // echo "Запись УДАЧНО добавлена successfully";
} else {
  die (" ** DIE ** Не получилось добавить данные, INSERT нового КП с сайта");
}
//  *** сомтрим признак нужно ли обновить номер КП, или номер был ввен вручную
if (@$priz_update_kp_numer == 1 ) {

  $stmt = $pdo->prepare("UPDATE `sys_setup` SET `last_kp_number` = :KpNumber");
$stmt->execute(array('KpNumber' => $KpNumber));
}


// ******************* делаем запрос, чтобы получить ID этого КП ********


// header("Location: ../".$LinkKp);
header("Location: ../index.php?id=".$last_id);

echo "ID= ", $last_id,"<br>";
die('POOOH');