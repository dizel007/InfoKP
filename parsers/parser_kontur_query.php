<?php
// 
//  Парсиv сайт закупки у Контура
// 
include_once __DIR__ . '/phpQuery/phpQuery.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
// $link ='https://zakupki.kontur.ru/0348100004521000007';
// $content = file_get_contents($KonturLink);
// if(($content = file_get_contents($KonturLink)) === FALSE) {
// 	echo "SOP55PO";
// }



$html = phpQuery::newDocument(file_get_contents($KonturLink));

$tender_date= array();
$tender_date['KonturLink']=$KonturLink;
// парсим номер заукпки
$tender_number = $html->find('.tender_title');
$tender_number = pq($tender_number)->text();
$pos_N = strpos($tender_number, "№");
$tender_number = substr($tender_number,$pos_N);
$tender_number = str_replace('№', '', $tender_number);
$tender_number = htmlentities($tender_number); // преобразование, чтобы удалить символ &nbsp;
$tender_number = str_replace("&nbsp;",'',$tender_number);
$tender_number = preg_replace('/\s+/', '', $tender_number); // удалить все пробелы (включая табуляции и концы строк)
$tender_date['tender_number']=$tender_number;
// парсим описание заукупки
$tender_descr = $html->find('h1');
$tender_descr = pq($tender_descr)->text();
$tender_date['tender_descr']=$tender_descr;

// парсим НМЦК заукупки
$tender_begin_price = $html->find('.tenderPrice');
$data = array();
foreach ($tender_begin_price as $row) {
	$data[] = pq($row)->text();
}
$tender_begin_price = $data[0];
$tender_begin_price = str_replace('₽', '', $tender_begin_price);
$tender_begin_price = str_replace(',', '.', $tender_begin_price);
$tender_begin_price = preg_replace('/\s+/', '', $tender_begin_price); // удалить все пробелы (включая табуляции и концы строк)
$tender_date['tender_begin_price']=$tender_begin_price;

// парсим ссылку на ЕИС заукупки
$tender_link_eis = $html->find('a[id=headerSourceLink]', 0);
$tender_link_eis = pq($tender_link_eis)->attr('href');
$tender_date['tender_link_eis']=$tender_link_eis;


$tender_link_eis_kontract = $html->find('.tender_roundup]');
$tender_link_eis_kontract = $tender_link_eis_kontract->find('a');
$data = array();
foreach ($tender_link_eis_kontract as $row) {
	$data[] = pq($row)->attr('href');
}
$tender_link_company = "https://zakupki.kontur.ru".$data[0];
$tender_link_eis_kontract = $data[1];

$tender_date['tender_link_eis_kontract']=$tender_link_eis_kontract;