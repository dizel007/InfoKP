<?php
function format_new_kp($products,$comparr) {
require_once '../PHPExcel-1.8/Classes/PHPExcel.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

$xls = PHPExcel_IOFactory::load('../new_kp_info/new_kp_shablon.xlsx');

$xls->getProperties()->setTitle("Коммерческое предложение");
// $xls->getProperties()->setSubject("Тема");
$xls->getProperties()->setCreator("Тендерный отдел");
// $xls->getProperties()->setManager("РуководительЯ");
$xls->getProperties()->setCompany("ООО ТД АНМАКС");
// $xls->getProperties()->setCategory("Группа");
// $xls->getProperties()->setKeywords("Ключевые слова");
// $xls->getProperties()->setDescription("Примечания");
// $xls->getProperties()->setLastModifiedBy("Автор изменений");


$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('КП');

$sheet->setCellValue("G6", "№ ".$comparr['KpNumber']." от ".$comparr['KpDate']);
$sheet->setCellValue("J8", $comparr['NameCustomer']);
$sheet->setCellValue("J9", $comparr['ContactCustomer']);
$sheet->setCellValue("J10", $comparr['Telephone']);
$sheet->setCellValue("J11", $comparr['Email']);


//Счет на оплату № ТО-772 от 4 мая 2022 г.


//Счет на оплату № ТО-772 от 4 мая 2022 г.
// $sheet->setCellValue("F21", $NameCompany);



$line=19;

$border_down = array(
  	'borders'=>array(
		'bottom' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
	  'color' => array('rgb' => '000000')
		),
	)
);

foreach ($products as $i => $prod) {
// Объединяем ячейки по горизонтали.
$sheet->mergeCells("D{$line}:H{$line}");
$sheet->mergeCells("I{$line}:J{$line}");

// заполняем значеия
	$sheet->setCellValue("C{$line}", ++$i);
	$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$sheet->setCellValue("D{$line}", $prod['name']);
	  // перенос слов в строке если выходит за ячейку
		$sheet->getStyle("D{$line}")->getAlignment()->setWrapText(true);
    $sheet->getStyle("D{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    		//  подбираем ширину строки
	  $len=strlen ($prod['name']);

		$high =  ((int) ($len/61));
    if ($high >1 ) {
		$high = ($high) * 15;
    } else {
      $high = 15;
    }
		$sheet->getRowDimension("{$line}")->setRowHeight($high);
		

	$sheet->getStyle("D{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
  
  $sheet->setCellValue("I{$line}", $prod['ed_izm']);
	$sheet->getStyle("I{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$sheet->getStyle("I{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

	$sheet->setCellValue("K{$line}", $prod['kol']);
	$sheet->getStyle("K{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$sheet->getStyle("K{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);



	$sheet->setCellValue("L{$line}", number_format($prod['price'], 2, ',', ' '));
	$sheet->getStyle("L{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
	$sheet->getStyle("L{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

	$sheet->setCellValue("M{$line}", number_format($prod['price'] * $prod['kol'], 2, ',', ' '));
	$sheet->getStyle("M{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
	$sheet->getStyle("M{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
 
  $sheet->getStyle("C{$line}:M{$line}")->applyFromArray($border_down);

	// Подсчет "Итого".
	@$total += $prod['price'] * $prod['kol'];
	$line++;
}







//  Жирная черта

$sheet->mergeCells("J{$line}:L{$line}");
$sheet->setCellValue("J{$line}", 'Итого:');
$sheet->getStyle("J{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Размер шрифта 18
$sheet->getStyle("J{$line}")->getFont()->setSize(14);
// Жирный
$sheet->getStyle("J{$line}")->getFont()->setBold(true);


$sheet->setCellValue("M{$line}", number_format($total, 2, ',', ' '));
$sheet->getStyle("M{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Размер шрифта 10
$sheet->getStyle("M{$line}")->getFont()->setSize(14);
// Жирный
$sheet->getStyle("M{$line}")->getFont()->setBold(true);
// // НДС (20% от итого)
 $line++;
 $sheet->mergeCells("J{$line}:L{$line}");
 $sheet->setCellValue("J{$line}", 'В т.ч. НДС (20%):');
 $sheet->getStyle("J{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Размер шрифта 18
$sheet->getStyle("J{$line}")->getFont()->setSize(14);
// Жирный
$sheet->getStyle("J{$line}")->getFont()->setBold(true);

$sheet->setCellValue("M{$line}", number_format(($total / 100) * 20, 2, ',', ' '));
 $sheet->getStyle("M{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Размер шрифта 18
$sheet->getStyle("M{$line}")->getFont()->setSize(14);
// Жирный
$sheet->getStyle("M{$line}")->getFont()->setBold(true);

 // Итого
$line++;


$sheet->setCellValue("C{$line}", 'Цены указаны в рублях с учетом НДС.');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$line = $line+4;
//  Условия оплаты
$sheet->mergeCells("D{$line}:E{$line}");
$sheet->mergeCells("F{$line}:M{$line}");
$sheet->setCellValue("D{$line}", 'Условия оплаты: ');
$sheet->getStyle("D{$line}")->getFont()->getColor()->setRGB('276fdb');
$sheet->getStyle("D{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("D{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("D{$line}")->getFont()->setSize(10);
$sheet->getStyle("D{$line}")->getFont()->setBold(true);
$sheet->getRowDimension("{$line}")->setRowHeight('21');

$sheet->setCellValue("F{$line}", 'По согласованию сторон');
$sheet->getStyle("F{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("F{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("F{$line}")->getFont()->setSize(11);


//  Срок изготовления: 
$line++;
$sheet->mergeCells("D{$line}:E{$line}");
$sheet->mergeCells("F{$line}:M{$line}");
$sheet->setCellValue("D{$line}", 'Срок изготовления: ');
$sheet->getStyle("D{$line}")->getFont()->getColor()->setRGB('276fdb');
$sheet->getStyle("D{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("D{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("D{$line}")->getFont()->setSize(10);
$sheet->getStyle("D{$line}")->getFont()->setBold(true);
$sheet->getRowDimension("{$line}")->setRowHeight('21');

$sheet->setCellValue("F{$line}", 'В наличии');
$sheet->getStyle("F{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("F{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("F{$line}")->getFont()->setSize(11);

//  Условия отгрузки:  
$line++;
$sheet->mergeCells("D{$line}:E{$line}");
$sheet->mergeCells("F{$line}:L{$line}");
$sheet->setCellValue("D{$line}", 'Условия отгрузки: ');
$sheet->getStyle("D{$line}")->getFont()->getColor()->setRGB('276fdb');
$sheet->getStyle("D{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle("D{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("D{$line}")->getFont()->setSize(10);
$sheet->getStyle("D{$line}")->getFont()->setBold(true);
$sheet->getRowDimension("{$line}")->setRowHeight('21');





if ($comparr['Adress'] == '') {
	$adress_dostav = 'Примерная стоимость доставки :';
} else {
$adress_dostav = 'Примерная стоимость доставки до объекта ('.$comparr['Adress'].')';
}

$sheet->setCellValue("F{$line}", $adress_dostav);
$sheet->getStyle("F{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("F{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("F{$line}")->getFont()->setSize(11);


$sheet->setCellValue("M{$line}", number_format($comparr['DostCost'], 2, ',', ' '));
$sheet->getStyle("M{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// Размер шрифта 18
$sheet->getStyle("M{$line}")->getFont()->setSize(14);
// Жирный
$sheet->getStyle("M{$line}")->getFont()->setBold(true);



// Подписант 
$line = $line+6;
$sheet->mergeCells("C{$line}:I{$line}");
$sheet->mergeCells("L{$line}:M{$line}");

$sheet->setCellValue("C{$line}", 'Генеральный директор ООО "ТД "АНМАКС"');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(11);
$sheet->getStyle("C{$line}")->getFont()->setBold(true);

$sheet->setCellValue("L{$line}", '     С.И. Зелизко');
$sheet->getStyle("L{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("L{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("L{$line}")->getFont()->setSize(11);
$sheet->getStyle("L{$line}")->getFont()->setBold(true);

$line2= $line - 9;
	$objDrawing = new PHPExcel_Worksheet_Drawing();
	$objDrawing->setResizeProportional(false);  
	$objDrawing->setName('Подписи');
	$objDrawing->setDescription('Описание картинки');
	$objDrawing->setPath('../new_kp_info/stamp.png');
	$objDrawing->setCoordinates("G{$line2}");                      
	$objDrawing->setOffsetX(20); 
	$objDrawing->setOffsetY(5);                
	// $objDrawing->setWidth(163); 
	// $objDrawing->setHeight(50); 
	$objDrawing->setWorksheet($sheet);


// Исполнитель 
$line = $line+4;

$sheet->setCellValue("C{$line}", 'Исполнитель:');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(10);
$line++;
$sheet->setCellValue("C{$line}", 'Артем Гуц');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(10);
$line++;
$sheet->setCellValue("C{$line}", '8-495-787-24-05 (доб. 103)');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(10);
$line++;
$sheet->setCellValue("C{$line}", '8-916-259-42-00');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(10);
$line++;
$sheet->setCellValue("C{$line}", 'a.guts@anmaks.ru');
$sheet->getCell("C{$line}")->getHyperlink()->setUrl("mailto:a.guts@anmaks.ru");
$sheet->getStyle("C{$line}")->getFont()->getColor()->setRGB('0000FF');
$sheet->getStyle("C{$line}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$sheet->getStyle("C{$line}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("C{$line}")->getFont()->setSize(10);



// Здесь используется функция num2str() для получение суммы прописью, взято с https://habrahabr.ru/post/53210/.

// Еще нужно у суммы прописью сделать первую букву заглавной. Т.к. скрипт в UTF-8 функция ucfirst не работает, поэтому используется аналог – mb_ucfirst().
// СУММА прописью


// ***** Добавляем строку

$objWriter = new PHPExcel_Writer_Excel2007($xls);

$NameCustomer = $comparr['NameCustomer'];
$NameCustomer = str_replace('"', '', $NameCustomer);
$NameCustomer = str_replace('«', '', $NameCustomer);
$NameCustomer = str_replace('»', '', $NameCustomer);

$KpFileName= "№".$comparr['KpNumber']." от ".$comparr['KpDate']." ".$NameCustomer." от ООО ТД АНМКАС".".xlsx";

$objWriter->save('../EXCEL/'.$KpFileName);
// $file_name_schet = "../SCHET/"."Счет на оплату № ТО-".$nomer_schet." от ".$schet_date."(".$arr_inn[0]['name'].").xlsx";

$back_arr = array('total' => $total, 
									'KpFileName' => $KpFileName);
return $back_arr;
}