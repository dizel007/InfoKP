<?php
// 
//  Парсиv сайт закупки у Контура
// 
include_once __DIR__ . '/phpQuery/phpQuery.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
// $KonturLink ='https://zakupki.kontur.ru/0134300097522000969';

$html = phpQuery::newDocument(file_get_contents($KonturLink));

$tender_data= array();
$tender_data['KonturLink']=$KonturLink;
// парсим номер заукпки
$tender_number = $html->find('.tender_title');
$tender_number = pq($tender_number)->text();
$pos_N = strpos($tender_number, "№");
$tender_number = substr($tender_number,$pos_N);
$tender_number = str_replace('№', '', $tender_number);
$tender_number = htmlentities($tender_number); // преобразование, чтобы удалить символ &nbsp;
$tender_number = str_replace("&nbsp;",'',$tender_number);
$tender_number = preg_replace('/\s+/', '', $tender_number); // удалить все пробелы (включая табуляции и концы строк)
$tender_data['tender_number']=$tender_number;
// парсим описание заукупки
$tender_descr = $html->find('h1');
$tender_descr = pq($tender_descr)->text();
$tender_data['tender_descr']=$tender_descr;

// парсим НМЦК заукупки
$tender_begin_price = $html->find('.tenderPrice');
$data = array();
foreach ($tender_begin_price as $row) {
	$data[] = pq($row)->text();
}
isset($data[0])?$tender_begin_price = $data[0]:$tender_begin_price =0;
$tender_begin_price = str_replace('₽', '', $tender_begin_price);
$tender_begin_price = str_replace(',', '.', $tender_begin_price);
$tender_begin_price = preg_replace('/\s+/', '', $tender_begin_price); // удалить все пробелы (включая табуляции и концы строк)
unset($data);
$tender_data['tender_begin_price']=$tender_begin_price;

// парсим ссылку на ЕИС заукупки
$tender_link_eis = $html->find('a[id=headerSourceLink]', 0);
$tender_link_eis = pq($tender_link_eis)->attr('href');
$tender_data['tender_link_eis']=$tender_link_eis;


$tender_link_eis_kontract = $html->find('.tender_roundup]');
$tender_link_eis_kontract = $tender_link_eis_kontract->find('a');
$data = array();
foreach ($tender_link_eis_kontract as $row) {
	$data[] = pq($row)->attr('href');
}
// $data[0] <> ''?$tender_link_company = "https://zakupki.kontur.ru".$data[0]:$zzz=1;
isset($data[1])?$tender_link_eis_kontract = $data[1]:$zzz=1;
$tender_data['tender_link_eis_kontract']=$tender_link_eis_kontract;
unset($data);

// Парсим адресс доставки
$tender_adress_ = $html->find('.tenderField_data');
$tender_adress = $tender_adress_->find('.tenderField_data_in');
$data = array();
foreach ($tender_adress as $row) {
	$data = pq($row)->text();
}

$tender_adress = str_replace('Российская Федерация,','',$data);
$tender_adress = str_replace('РФ,','',$tender_adress);
$tender_adress = trim($tender_adress);
$tender_data['tender_adress']=$tender_adress;
