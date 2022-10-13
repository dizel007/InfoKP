<?php
require_once ("connect_db.php"); // подключение к БД
require 'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging =  false; // старт консоли отладчика
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$realDate = date("m.d.y");
$realDate=strtotime($realDate);
$tempDate = '';
$smarty->assign("realDate" , $realDate);
$smarty->assign("tempDate" , $tempDate);

//  Получаем активного пользователя по Логину
if (isset($_GET['user'])) {
        if ($_GET['user'] <> '') {
            $user = $_GET['user'];
            $stmt = $pdo->prepare("SELECT * FROM users WHERE user_login = :user");
            $stmt->execute(array('user' => $user));
            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $smarty->assign("real_user", $arr[0]['user_name']);
            $smarty->assign("user", $user);
        }
}


// Если Есть ИНН заходим сюда после проверки ИНН
if (isset($_GET['InnCustomer'])) {
  $input_inn = $_GET['InnCustomer'];
  
    // вычитываем все по введенному ИНН
    $stmt = $pdo->prepare("SELECT * FROM inncompany WHERE inn = :inn");
    $stmt->execute(array('inn' => $input_inn));
    $arr_inn_comp = $stmt->fetchAll(PDO::FETCH_ASSOC);
     // вычитываем телефоны и почты, если существует ИНН
    if (isset($arr_inn_comp[0])) {
      Echo "Такая компания уже существует!";
      DIE('<br>СТОП по Вводу ИНН!!!');
    } else {
      // Если нет такой компании то передаем в форму шаблона ИНН
      $smarty->assign("input_inn", $input_inn); // суем введенный ИНН в шаблон
    }
}



require_once "pdo_connect_db/select_functions.php";
require_once "smarty_docs/_include_folder_files.php";

    $pageName='Добавление новой компании по ИНН ';
    $smarty->assign("pageName", $pageName);
    
    $smarty->display('make_new_comp.tpl');




