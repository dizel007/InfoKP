<?php

function analiz_kp($filename) {

require_once '../PHPExcel-1.8/Classes/PHPExcel.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

// $xls = PHPExcel_IOFactory::load("../".$_GET['LinkKp']);
$xls = PHPExcel_IOFactory::load($filename);

$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();

$i=2;
$stop =0;
while ($stop <> 1 ) {
$name = $sheet->getCellByColumnAndRow(1, $i)->getValue();

if ($name == '') {
	$stop =1;
	break;
}
$ed_izm = $sheet->getCellByColumnAndRow(2, $i)->getValue();

$kolvo = $sheet->getCellByColumnAndRow(3, $i)->getValue();
$price = $sheet->getCellByColumnAndRow(4, $i)->getValue();
$prods[] = 
	array(
		'name'  => $name,
		'kol' => $kolvo,
		'ed_izm' => $ed_izm,
		'price' => $price
	);

$i++;
}

return $prods;
}