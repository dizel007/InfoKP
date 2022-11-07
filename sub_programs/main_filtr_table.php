<?php

include_once 'functions/full_get.php'; // считваем все GET данные
include_once 'functions/form_select.php'; // Настраиваем SQL запрос

if (isset($get_type_kp)) {
$get_value_type_kp = GetOneValueKptype($pdo,$get_type_kp);
$smarty->assign('get_value_type_kp', $get_value_type_kp);
} else {
  $smarty->assign('get_value_type_kp', '');  
}
$smarty->display('info_filtr.tpl');

include_once 'functions/setup_param_main_table.php'; // настраиваем всек данные для шаблона
include_once 'sub_programs/page_number.php'; // выводим номера страниц на таблице

$smarty->display('info_setup_filtr.tpl');
if ($kpCount == 0) { // Если нет КП по фильтру по выводим ошибку
  $smarty->assign('alarm_message', 'Нет КП по выбранным параметрам');
      $smarty->assign('back_adress', 'Нет КП по выбранным параметрам');
      $smarty->display('alarm_message.tpl');
} else { // если есть хоть 1 КП, то выводим его
  $smarty->display('main_table.tpl');
  include 'sub_programs/page_number.php'; // выводим номера страниц на таблице
}
