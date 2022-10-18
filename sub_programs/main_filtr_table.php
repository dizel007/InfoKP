<?php

include_once 'functions/full_get.php'; // считваем все GET данные
include_once 'functions/form_select.php'; // Настраиваем SQL запрос

$smarty->display('info_filtr.tpl');

include_once 'functions/setup_param_main_table.php'; // настраиваем всек данные для шаблона
$smarty->display('info_setup_filtr.tpl');
($kpCount == 0)? $i=1:$smarty->display('main_table.tpl');
