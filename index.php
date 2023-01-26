<?php
// session_start();
require_once ("connect_db.php"); // подключение к БД
// Находим всех активных пользоватлей и суем их в шаблоны
include_once 'functions/find_users.php';
//  подключение функций 
include_once 'functions/make_sql_query.php'; // функция для создания SQL запроса
include_once 'pdo_connect_db/select_functions.php';
include_once 'functions/setup_url_for_maintable.php'; // функции для настройки количества вывода страниц и КП на 
include_once 'functions/get_data_from_db.php'; // функции подгрузки в шаблоны выпадающих списков 


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
    
    case 5: // уходим на ввод нового пользователя 
        $pageName = "Ввод нвого пользователя";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        $smarty ->display('register_new_user.tpl');
        break;


    case 7: // основная таблица с фильтром  КП
        $pageName = "Реестр с фильтром  КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "основная таблица с фильтром  КП(**** DELETE ****)";
        include_once "sub_programs/main_filtr_table.php";
    break;
    
    case 10: // выводим КП по ID
        $pageName = "выводим КП по ID";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим КП по ID(**** DELETE ****)";
        include_once "sub_programs/one_kp_by_id.php";
    break;
    
    case 11: // выводим несколько КП по ID
        $pageName = "выводим несколько КП по ID";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим КП по ID(**** DELETE ****)";
        include_once "sub_programs/many_kp_by_id.php";
    break;

    case 13: // выводим Аналитику
        $pageName = "выводим Аналитику";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим Аналитику(**** DELETE ****)";
        include_once "sub_programs/reports.php";
    break;

    case 15: // выводим Аналитику
        $pageName = "выводим Аналитику";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим Аналитику(**** DELETE ****)";
        include_once "sub_programs/reports_show_changes.php";
    break;

    case 17: // выводим Историю изменений по КП
        $pageName = "выводим Историю по КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим Аналитику(**** DELETE ****)";
        include_once "sub_programs/reports_about_kp.php";
    break;


    case 23: // ОТправка Почты
        $pageName = "Форма для отправки письма";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "выводим Аналитику(**** DELETE ****)";
        include_once "mailer/msg_box.php";
    break;

    case 24: // ОТправка Почты
        $pageName = "Успешная отправка Емайла";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        $smarty->assign('alarm_message', 'УСПЕШНО ОТПРАВИЛИ');
        $smarty->assign('back_adress', "?id=".$_GET['id']);
        $smarty->display('alarm_message.tpl');
    break; 
    
    case 30: // Форма корректировки КП
        $id = $_GET['id'];
        $pageName = "Форма корректировки информации о КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        include_once "pdo_connect_db/update_data_in_kp.php";
    break;



    case 97: // Выход из Реестра
        $pageName = "Выход/Смена пользователя";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        $smarty->assign('back_adress', $_SERVER['HTTP_REFERER']);
        $smarty ->display('need_action.tpl');
        break;

    case 0: // основная таблица со всеми КП
        $pageName = "Реестр со всеми КП";
        $smarty->assign('pageName', $pageName);
        include_once 'parts_site/header.php';
        // echo "Основная таблица со всеми КП <br>";
        // echo "Выводим все КП без фильтра(**** DELETE ****)";
        include_once "sub_programs/main_table.php";
    break;

}

// echo "<pre>";
// print_r ($userdata);
// echo "</pre>";

/*session is started if you don't write this line can't use $_Session  global variable*/

// $_SESSION["newsession"]='22444422';
// $_SESSION["newsession1"]='222df444422';
// $_SESSION["newsession2"]='22sdfgdfgsdfgh444422';

// echo "<pre>";
// print_r ($_SESSION);
// echo "<pre>";
// if (!isset($_SESSION['count']))
// {
//   $_SESSION['count'] = 1;
// }
// else
// {
//   ++$_SESSION['count'];
// }
 

// echo session_id();
//  FOOOOOOOTER **************************************************************************
include_once 'parts_site/footer.php';
?>