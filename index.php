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

include_once 'pdo_connect_db/select_functions.php';
// шапка с меню пользователя

$smarty->assign('userdata', $userdata);
$smarty->display('user_menu.tpl');

// Формируем тип перехода (Все переходы должны быть через index.php)
isset($_GET['transition'])? $transition=$_GET['transition']:$transition=0; // показывает куда переходить
switch ($transition) {
    case 1: // уходим на создание нового КП
        $pageName = "Создание КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        include_once "sub_programs/make_new_kp.php";
        break;
    case 3: // уходим на ввод данных по новой компании 
        $pageName = "Ввод данных новой компании";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        include_once "sub_programs/make_new_comp.php";
        break;
    case 7: // основная таблица с фильтром  КП
        $pageName = "Реестр с фильтром  КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "основная таблица с фильтром  КП <br>";
        include_once "sub_programs/main_filtr_table.php";
    break;
    
    case 10: // выводим КП по ID
        $pageName = "выводим КП по ID";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        include_once "sub_programs/one_kp_by_id.php";
    break;

    case 0: // основная таблица со всеми КП
        $pageName = "Реестр со всеми КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "Основная таблица со всеми КП <br>";
        include_once "sub_programs/main_table.php";
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