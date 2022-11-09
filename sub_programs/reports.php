<?php
$now=date('Y-m-d');
$smarty->assign('now' , $now);
$yesturday = date('Y-m-d', strtotime($now . '-1 day'));
$smarty->assign('yesturday' , $yesturday);
$last_week = date('Y-m-d', strtotime($now . '-7 day'));
$smarty->assign('last_week' , $last_week);
$last_month = date('Y-m-d', strtotime($now . '-30 day'));
$smarty->assign('last_month' , $last_month);

include_once 'functions/full_get.php'; // считваем все GET данные

// echo "<pre>";
// print_r($arr_users);
// echo "<pre>";
 // Достаем все изменения за выбранный период
include_once "reports_table_change.php"; // тут формируются данные для таблицы с изменениями (АНАЛИТИКА)

include_once "reports_kp_changes.php"; // тут формируются данные для таблицы с изменениями п КП  (АНАЛИТИКА)


$smarty->display('reports.tpl');