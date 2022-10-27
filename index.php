<?php

require_once ("connect_db.php"); // подключение к БД
     
// Находим всех активных пользоватлей и суем их в шаблоны
include_once 'functions/find_users.php';
//  подключение функций 
include_once 'pdo_connect_db/select_functions.php';
// получаем все активные состояния КПП
$AllKpConditions = GetAllActiveKpCondition($pdo);
$smarty->assign('AllKpConditions', $AllKpConditions);
// *******************  шапка с меню пользователя **********************************
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
    
    case 2: // уходим на создание нового Объектного КП
            $pageName = "Создание Объектного КП";
            $smarty->assign('pageName', $pageName);
            include_once 'parts_site/header.php';
            include_once "sub_programs/make_new_obj_kp.php";
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
        echo "основная таблица с фильтром  КП <br>";
        include_once "sub_programs/main_filtr_table.php";
    break;
    
    case 10: // выводим КП по ID
        $pageName = "выводим КП по ID";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        echo "выводим КП по ID";
        include_once "sub_programs/one_kp_by_id.php";
    break;

    case 0: // основная таблица со всеми КП
        $pageName = "Реестр со всеми КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "Основная таблица со всеми КП <br>";
        echo "FUUUUUUL";
        include_once "sub_programs/main_table.php";
    break;

}

// echo "<pre>";
// print_r ($userdata);
// echo "</pre>";

//  FOOOOOOOTER **************************************************************************
include_once 'parts_site/footer.php';

?>