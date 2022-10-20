<?php
include_once 'functions/full_get.php'; // считваем все GET данные
include_once 'functions/form_select.php'; // Настраиваем SQL запрос
echo "Выводдим КП по ИД";
$smarty->display('info_filtr.tpl');
include_once 'functions/setup_param_main_table.php'; // настраиваем всек данные для шаблона
$smarty->display('info_setup_filtr.tpl');


$smarty->display('main_table.tpl'); // выводим данные о выбранном КП


$InnCustomer = $array_with_all_kp[0]['InnCustomer']; // Получили ИНН компании из выбранного КП
$company_arr = GetCompanyByInn($pdo, $InnCustomer); // Получили все данные о компании
$smarty->assign("company_arr",$company_arr);

$telephons_company = GetTelephoneByInn($pdo,$InnCustomer); //Получили все телефоны о компании с таким ИНН
$smarty->assign("telephons_company",$telephons_company);

$emails_company = GetEmailByInn($pdo,$InnCustomer); //Получили все email о компании с таким ИНН
$smarty->assign("emails_company",$emails_company);
// echo "<pre>";
// print_r ($company_arr);
// echo "<pre>";
// отображает информацию о компании только если есть ИНН
isset($company_arr[0])?$smarty->display('company_table.tpl'):$zzz=1; // 

