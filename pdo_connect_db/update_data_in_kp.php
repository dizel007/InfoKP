<?php
// https://habr.com/en/post/137664/
// инструкция по вставки через PDO

require_once ("../connect_db.php");
require_once ("../new_kp_info/test_file_name.php"); // если имя файла занято, то добавится индекс
require_once ("../new_kp_info/analiz_siroy_kp.php");
require_once ("../new_kp_info/format_new_kp.php");
require_once "../update_data_in_kp/parce_excel_for_update_kp.php";
require_once "../update_data_in_kp/format_data_for_make_kp.php";

/*
GET данные
*/
$id = 4024; // 
//  Вычиитаваем все данные о КП из реестра 
$stmt = $pdo->prepare("SELECT * FROM `reestrKP` WHERE `id` = ?");
$stmt->execute([$id]);
$arr_kp_by_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($arr_kp_by_id);
// echo "<pre>";

$KpNumber = $arr_kp_by_id[0]['KpNumber'];
$KpDate = $arr_kp_by_id[0]['KpData'];
$NameCustomer = $arr_kp_by_id[0]['NameCustomer'];
$adress = $arr_kp_by_id[0]['adress'];
$ContactCustomer = $arr_kp_by_id[0]['ContactCustomer'];

$Responsible = $arr_kp_by_id[0]['Responsible'];
if ($Responsible =='') {
  $Responsible=$userdata['user_name'];
}

$LinkKp = $arr_kp_by_id[0]['LinkKp'];

$file_name_="../".$LinkKp;

$date_write = date('Y-m-d');
$DostCost = 99999; // чтобы формитирование КП не переделывать

$xls = PHPExcel_IOFactory::load($file_name_);
$xls->setActiveSheetIndex(0);
$kp_array_shapka = parce_shapku_in_kp($xls,$file_name_);

// echo "<pre>";
// print_r($kp_array_shapka);
// echo "<pre>";

parce_kp_for_update($file_name_, $smarty);


$comparr = array ( 'KpNumber' => $KpNumber ,
                   'KpDate' => $KpDate,
                   'NameCustomer' => $NameCustomer,
                   'Adress' => $adress );
$comparr += array ('ContactCustomer' => $ContactCustomer);
$comparr += array ('Email' => $kp_array_shapka['Email']);
$comparr += array ('Telephone' => $kp_array_shapka['Phone']);
$comparr += array ('DostCost' => $DostCost);

// ***************Выбираем список товаров из файла *************************************


$products = make_prod_array($_POST);

echo "<pre>";
print_r($products);
echo "<pre>";

// die('000000000000000000000000000000000');

// **************************************************************************************


//  вычитаваем данные про ответственного
$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `user_name` = ?");
$stmt->execute([$Responsible]);
$user_responsible_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);



// ****************************************
$temp_array = format_new_kp($products, $comparr, $user_responsible_arr); // Формируем КП и получаем сумму КП 



echo "<pre>";
print_r($temp_array);
echo "<pre>";

die('000000000000000000000000000000000');


unlink($file_name_);  // удаляем загружаемый файл, Нах их копить

$KpSum = $temp_array['total'];
$KpFileName= $temp_array['KpFileName'];
$LinkKp = 'EXCEL/'.$KpFileName.".xlsx";

/* 
*************** Формируем ПДФ *************************************
*/
require_once '../new_kp_info/make_pdf.php';


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

// Данные не заполняются при создании КП
$KpImportance ='';  
$Responsible ='';
$KpSum='';

// **************** вставляем каждый параметр  данных  *********************
$stmt  = $pdo->prepare("INSERT INTO `reestrkp` 
                       (KpNumber, KpData, InnCustomer, NameCustomer, idKp, KpImportance, Responsible, KpSum, adress, konturLink, date_write, LinkKp, type_kp)
                       VALUES (:KpNumber, :KpData, :InnCustomer, :NameCustomer, :idKp, :KpImportance, :Responsible, :KpSum, :adress, :konturLink, :date_write, :LinkKp, :type_kp)");

$stmt ->bindParam(':KpNumber', $KpNumber);
$stmt ->bindParam(':KpData', $KpDate);
$stmt ->bindParam(':InnCustomer', $InnCustomer);
$stmt ->bindParam(':NameCustomer', $NameCustomer);
$stmt ->bindParam(':idKp', $idKp);
$stmt ->bindParam(':KpImportance', $KpImportance);
$stmt ->bindParam(':Responsible', $Responsible);
$stmt ->bindParam(':KpSum', $KpSum);
$stmt ->bindParam(':adress', $adress);
$stmt ->bindParam(':konturLink', $KonturLink);
$stmt ->bindParam(':date_write', $date_write);
$stmt ->bindParam(':LinkKp', $LinkKp);
$stmt ->bindParam(':type_kp', $type_kp);


if ($stmt ->execute()) {
  $last_id = $pdo->lastInsertId(); // получаем id - введенной строки 
  // echo "Запись УДАЧНО добавлена successfully";
} else {
  die (" ** DIE ** Не получилось добавить данные, INSERT нового КП с сайта");
}


// header("Location: ../".$LinkKp);
header("Location: ../index.php?transition=10&id=".$last_id);

// echo "ID= ", $last_id,"<br>";
die('Умерли на вводе данных в реестр при добавлении нового КП');