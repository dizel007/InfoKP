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

die('********************* Вывели изображение на экран **********************');





