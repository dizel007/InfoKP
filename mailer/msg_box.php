<?php
require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
require_once 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
require_once 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

$ZakupName="";
(!empty($_GET['InnCustomer']))? $InnCustomer = $_GET['InnCustomer']: $InnCustomer = '';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
}

$arr_emails = GetEmailByInn($pdo,$InnCustomer);


  $smarty->assign('arr_emails', $arr_emails);
// количетво емайло в БД
  $smarty->assign('count_arr_emails', count($arr_emails));


// находим по ID закупки наименование файла, который будем отправлять
$arr_kp = GetKPById($pdo,$id);

// echo count($arr_emails);
// echo "<pre>";
// print_r($arr_emails);
// echo "<pre>";

// die();
if (file_exists($arr_kp[0]['LinkKp'])) {
// получаем данные из ексель файла
$xls = PHPExcel_IOFactory::load($arr_kp[0]['LinkKp']);
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$i=19;
$stop =0;
$kp_name = $sheet->getCellByColumnAndRow(6, 6)->getValue();
$Zakazchik = $sheet->getCellByColumnAndRow(9, 8)->getValue();
$Phone = $sheet->getCellByColumnAndRow(9, 10)->getValue();
$Email = $sheet->getCellByColumnAndRow(9, 11)->getValue();
$ZakupName = $sheet->getCellByColumnAndRow(2, 16)->getValue();


// формируем путь к загружаемому файлу
$link_pdf = substr($arr_kp[0]['LinkKp'], 0,-4);
$link_pdf = $link_pdf."pdf";

// проверяемя существует ли файл на сервере
$real_file =file_exists($link_pdf);

$link_pdf_text = substr($arr_kp[0]['LinkKp'], 6,-4)."pdf"; // формируем для вывода на экран имя файла
$link_pdf_excel = $arr_kp[0]['LinkKp']; // делаем путь для ексель файла

$ZakupNameTemp = str_replace('"', '', $ZakupName);
$ZakupNameTemp = str_replace(' ', '%20', $ZakupNameTemp); // чтобы передавать длинные пути с пробелами
$link_pdf = str_replace(' ', '%20', $link_pdf); // чтобы передавать длинные пути с пробелами


$pos_N = strpos($ZakupName, "№");
$ZakupName = substr($ZakupName,$pos_N);

$smarty->assign('kp_name', $kp_name);
$smarty->assign('Zakazchik', $Zakazchik);
$smarty->assign('InnCustomer', $InnCustomer);
$smarty->assign('Email', $Email);
$smarty->assign('ZakupName', $ZakupName);
$smarty->assign('link_pdf', $link_pdf);
$smarty->assign('link_pdf_text', $link_pdf_text);
$smarty->assign('link_pdf_excel', $link_pdf_excel);
$smarty->assign('id', $id);
$smarty->assign('ZakupNameTemp', $ZakupNameTemp);
$smarty->assign('real_file', $real_file); // ПризнакЮ что есть ПДФ файл
$smarty->assign('type_kp', $arr_kp[0]['type_kp']); // отправляем тип КП, чтобы понять что в письме писать



$smarty->display('send_mail.tpl');
} else {
  // При отсутствии ЕКСЕЛЬ файла
  $smarty->assign('alarm_message', 'Нет EXCEL файла c КП');
  $smarty->assign('back_adress', $_SERVER['HTTP_REFERER']);
  $smarty->display('alarm_message.tpl');
}
// echo "<pre>";
// print_r($arr_kp);
// echo "<pre>";

?>