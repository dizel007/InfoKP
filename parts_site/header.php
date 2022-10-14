<?php
// т.к. HEADER подключаем во всех файлах, то тут сделаем проверку пользователя (вдруг придется уйти от index.php)
require_once ('check_user.php');  // проверяем зашел ли пользователь с паролем
$smarty->display('header.tpl');
?>  