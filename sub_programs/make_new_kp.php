<?php

$realDate = date("m.d.y");
$realDate=strtotime($realDate);
$tempDate = '';
$smarty->assign("realDate" , $realDate);
$smarty->assign("tempDate" , $tempDate);

// Если Есть ИНН заходим сюда после проверки ИНН
if (isset($_GET['InnCustomer'])) {
    $input_inn = $_GET['InnCustomer'];
    $smarty->assign("input_inn", $input_inn); // суем введенный ИНН в шаблон
  
    // вычитываем все по введенному ИНН
    $stmt = $pdo->prepare("SELECT * FROM inncompany WHERE inn = :inn");
    $stmt->execute(array('inn' => $input_inn));
    $arr_inn_comp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign("arr_inn_comp", $arr_inn_comp); 
    // вычитываем телефоны и почты, если существует ИНН
    if (isset($arr_inn_comp[0])) {
        $inn = $arr_inn_comp[0]['inn'];
//  Телефоны с БД
        $stmt = $pdo->prepare("SELECT telephone FROM telephone WHERE inn = :inn AND actual <>:actual1 AND actual <>:actual2");
        $stmt->execute(array('inn' => $inn,
                           'actual1' => 'Неактуальный',
                           'actual2' => 'Не звонить'));
        $arr_inn_tel = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $tel_comp = implode(", ", $arr_inn_tel);
        $smarty->assign("tel_comp" , $tel_comp);
//  Почты из БД
        $stmt = $pdo->prepare("SELECT email FROM email WHERE inn = :inn AND actual <>:actual");
        $stmt->execute(array('inn' => $inn,
                           'actual' => 'Неактуальная'));
        $arr_inn_tel = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $email_comp = implode(", ", $arr_inn_tel);
        $smarty->assign("email_comp" , $email_comp);


    } else {
        // если нет такого ИНН, то формируем признак
    }
}



// require_once "pdo_connect_db/select_functions.php";
// require_once "smarty_docs/_include_folder_files.php";

    $pageName='Создание нового КП';
    $smarty->assign("pageName", $pageName);
    
    $smarty->display('make_new_kp.tpl');




