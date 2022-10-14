<?php

require_once ("connect_db.php"); // подключение к БД

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) // Проверяем зарегистрирован ли пользователь
    {   
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_hash='" . $_COOKIE['hash'] . "' LIMIT 1");
        $stmt->execute([]);
        $userdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $userdata = call_user_func_array('array_merge', $userdata); // Уменьшаем уровень вложенности массива          

// проверяем введеный хэш пароля с тем, что храниться в БД
        if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']))
        {
            setcookie("id", "", time() - 3600*26, "/");
            setcookie("hash", "", time() - 3600*26, "/", null, null, true); // httponly !!!
            header("Location: login.php"); exit();
        }
        else
        {   
      
    date_default_timezone_set('Europe/Moscow');
    // Ставим куки
    $hash= $_COOKIE['hash'];
    $user_id_cook = $_COOKIE['id'];
    setcookie("id", $user_id_cook, time() + 60 * 60 * 24, "/");
    setcookie("hash", $hash, time() + 60 * 60 * 24, "/", null, null, true); // httponly !!!

require 'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging =  False; // старт консоли отладчика
$smarty->caching = true;
$smarty->cache_lifetime = 120;
// Находим всех активных пользоватлей и суем их в шаблоны
include_once 'functions/find_users.php';


// **************************************************************************************
//  HEADER **************************************************************************
include_once 'parts_site/header.php';
// шапка с меню пользователя

$smarty->assign('userdata', $userdata);
$smarty->display('user_menu.tpl');

// Формируем тип перехода (Все переходы должны быть через index.php)
isset($_GET['transition'])? $transition=$_GET['transition']:$transition=''; // показывает куда переходить
switch ($transition) {
    case 1: // уходим на создание нового КП
        include_once "sub_programs/make_new_kp.php";
        break;
    case 3: // уходим на ввод данных по новой компании 
        include_once "sub_programs/make_new_comp.php";
        break;
}
 


// echo "<pre>";
// print_r ($userdata);
// echo "</pre>";

// **************************************************************************************
//  FOOOOOOOTER **************************************************************************
include_once 'parts_site/footer.php';
    }
}

else // Если проблемы со входом на сайт
{

    header("Location: login.php"); exit();
}
?>