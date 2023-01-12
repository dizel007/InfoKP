<?php

function parce_kp_for_update($file_name_, $smarty){

// выбираем файл для парсинга
// $file_name_="../EXCEL/№1000Е от 11.08.2022 ООО ЮгСпецСтрой (КП к закупке№0818500000822004583) ООО ТД АНМАКС.xlsx";

$xls = PHPExcel_IOFactory::load($file_name_);
$xls->setActiveSheetIndex(0);
$kp_array_shapka = parce_shapku_in_kp($xls,$file_name_);

$sheet = $xls->getActiveSheet();

$i=19;
$stop =0;

$kp_name = $kp_array_shapka['kp_name'];
$Zakazchik = $kp_array_shapka['Zakazchik'];
$Phone = $kp_array_shapka['Phone'];
$Email = $kp_array_shapka['Email'];
$ZakupName = $kp_array_shapka['ZakupName'];


// $kp_name = $sheet->getCellByColumnAndRow(6, 6)->getValue();
// $Zakazchik = $sheet->getCellByColumnAndRow(9, 8)->getValue();
// $Phone = $sheet->getCellByColumnAndRow(9, 10)->getValue();
// $Email = $sheet->getCellByColumnAndRow(9, 11)->getValue();
// $ZakupName = $sheet->getCellByColumnAndRow(2, 16)->getValue();


echo "<b>Заказчик :".$Zakazchik;"</b><br>";
echo "<br><br>";
echo "<b>Телефон :".$Phone;"</b><br>";
echo "<br>";
echo "<b>Эл. почта :".$Email;"</b><br>";
echo "<br>";
echo "<br>";

// $ZakupName = substr($ZakupName, 132, -64);
echo "<b>".$ZakupName;"</b><br>";
echo "<br>";
echo "<br><b>".$kp_name;"</b><br>";

echo "<br><br>";


while ($stop <> 1 ) {
$name = $sheet->getCellByColumnAndRow(3, $i)->getValue();

if ($name == '') {
	$stop =1;
	break;
}

$ed_izm = $sheet->getCellByColumnAndRow(8, $i)->getValue();
$kolvo = $sheet->getCellByColumnAndRow(10, $i)->getValue();
$kolvo = str_replace(' ','',$kolvo);
$kolvo = str_replace(',','.',$kolvo);
$price = $sheet->getCellByColumnAndRow(11, $i)->getValue();
$sum_price = $sheet->getCellByColumnAndRow(11, $i)->getValue();
$price = str_replace(' ','',$price);
$price = str_replace(',','.',$price);

$prods[] = 
	array(
		'name'  => $name,
		'kol' => $kolvo,
		'ed_izm' => $ed_izm,
		'price' => $price,
    'sum_price' => $sum_price
	);

$i++;
}
// добавляем строку к новому массиву
if (isset($_GET['add_str_plus'])) {
  $add_str= $_GET['add_str_plus'];
} else {
  $add_str= 0;
}

if (isset($_GET['add_string']) AND ($_GET['add_string'] == 7)) {
  for ($k=0;$k<$add_str;$k++) {
  $prods[] = 
	array(
		'name'  => '',
		'kol' => '',
		'ed_izm' => '',
		'price' => '',
    'sum_price' => '',
	);
}
}

// echo "<pre>";
// print_r($prods);
// echo "<pre>";
// die();
// цепляем доставку  
$idost= $i+8;
$price_dost = $sheet->getCellByColumnAndRow(12, $idost)->getValue();
$price_dost = str_replace(' ','',$price_dost);
$price_dost = str_replace(',','.',$price_dost);


$i_1 = $i+6;
$uslovia_oplati = $sheet->getCellByColumnAndRow(5, $i_1)->getValue();
$i_1 = $i+7;
$srok_izgotovl =$sheet->getCellByColumnAndRow(5, $i_1)->getValue();
$i_1 = $i+8;
$adress_dostavki =$sheet->getCellByColumnAndRow(5, $i_1)->getValue();





// Делаем форму для корректировки данных таблицы
$smarty->assign('prods', $prods);
// $smarty->assign('prods', $prods); // ответвтвенный
$smarty->assign('$file_name_', $file_name_); // имя файла
$smarty->assign('add_str', $add_str);

$smarty->assign('uslovia_oplati', $uslovia_oplati);
$smarty->assign('srok_izgotovl', $srok_izgotovl);
$smarty->assign('adress_dostavki', $adress_dostavki);
$smarty->assign('price_dost', $price_dost);




$smarty->display('../templates/update_data_in_kp.tpl');

}

function parce_shapku_in_kp($xls,$file_name_) {
  $xls = PHPExcel_IOFactory::load($file_name_);
  $xls->setActiveSheetIndex(0);
  $sheet = $xls->getActiveSheet();
  $i=19;
  $stop =0;
  
  $kp_name = $sheet->getCellByColumnAndRow(6, 6)->getValue();
  $Zakazchik = $sheet->getCellByColumnAndRow(9, 8)->getValue();
  $Phone = $sheet->getCellByColumnAndRow(9, 10)->getValue();
  $Email = $sheet->getCellByColumnAndRow(9, 11)->getValue();
  $ZakupName = $sheet->getCellByColumnAndRow(2, 16)->getValue();

  $kp_comparr = array ( 'kp_name' => $kp_name ,
                        'Zakazchik' => $Zakazchik,
                        'Phone' => $Phone,
                        'Email' => $Email );
$kp_comparr += array (  'ZakupName' => $ZakupName);
return $kp_comparr;
}