<?php
// https://habr.com/en/post/137664/
// инструкция по вставки через PDO

require_once ("../connect_db.php");
// require_once ("../new_kp_info/test_file_name.php"); // если имя файла занято, то добавится индекс
require_once ("../new_kp_info/analiz_siroy_kp.php");
require_once "../update_data_in_kp/parce_excel_for_update_kp.php";

/*
GET данные
*/
$id = $_GET['id']; // 

if (isset($_GET['add_str_plus'])) {
  $add_str = $_GET['add_str_plus']; // количество добавленных строк в новом КП
} else {
  $add_str = 0; // количество добавленных строк в новом КП
}

//  Вычиитаваем все данные о КП из реестра 
$stmt = $pdo->prepare("SELECT * FROM `reestrKP` WHERE `id` = ?");
$stmt->execute([$id]);
$arr_kp_by_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

$LinkKp = $arr_kp_by_id[0]['LinkKp'];
$file_name_="../".$LinkKp; // получаем путь и имя файла

$sum_kp_array= parce_kp($file_name_); // получили все данные из КП (шапку, продуцию, доп инфу)

// echo "<pre>";
// print_r($sum_kp_array);
// echo "<pre>";

/*
 * Увеличиваем количество строк в массиве в товарами, если нужно
 */
for($i=0;$i<$add_str;$i++) {
  $sum_kp_array['prods'][] = 
  array(
    'name'  => '',
    'kol' => '',
    'ed_izm' => '',
    'price' => '',
    
  );

}

// echo "<pre>";
// print_r($sum_kp_array);
// echo "<pre>";

dispay_update_kp($smarty, $sum_kp_array,$add_str, $id);  // выводим наше КП

die('********************* Вывели изображение на экран и сдохли **********************');


// **************************************************************************************






// ****************************************


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
die('PERED INsertom');
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