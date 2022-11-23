<?php


include_once 'functions/form_select_reports.php'; // Настраиваем SQL запрос

// находим всех активных пользователей за этот промежуток времени
$stmt = $pdo->prepare("SELECT author FROM reports $sql");
$stmt->execute([]);
$arr_users = $stmt->fetchAll(PDO::FETCH_COLUMN);
$arr_users = array_unique($arr_users, SORT_STRING);
$smarty->assign('arr_users' , $arr_users);

$stmt = $pdo->prepare("SELECT * FROM reports $sql");
$stmt->execute([]);
$arr_all_reports = $stmt->fetchAll(PDO::FETCH_ASSOC);

// формируем массив на каждого пользователя
foreach ($arr_users as $value){
   foreach ($arr_all_reports as $temp) {
          if ($value == $temp['author']) {
            // $arr_user["$value"][] = $temp;
            // создаем массив с изменениями в КП
            if ($temp['what_change'] == 1) {
              $array_change_kp[] = $temp['id_item'];
               }
             // создаем массив с отправленными емайла  
            if ($temp['what_change'] == 7) {
              $array_send_mail[] = $temp['id_item'];
               }
             // создаем массив с изменениями в компании 
            if (($temp['what_change'] == 2) ||
                ($temp['what_change'] == 3) ||
                ($temp['what_change'] == 4) ||
                ($temp['what_change'] == 5) ||
                ($temp['what_change'] == 6) ) {
            $array_change_comp[] = $temp['id_item'];
              }

          }  
       }
// если есть данные, что юзер изменял КП, то пишем сколько КП изменилось для каждого пользователя
   if (isset ($array_change_kp))  {
    $kol_change_kp[$value] = count($array_change_kp);
    $kol_change_unique_kp[$value] = count(array_unique($array_change_kp, SORT_STRING));
    unset($array_change_kp); // удаляем для каждого пользователя
   }  else {
    $kol_change_kp[$value]=0;
    $kol_change_unique_kp[$value] =0;
   }
// если есть данные, что юзер отправлял письма с сайта, то пишем сколько раз отправил каждый юзер
if (isset ($array_send_mail))  {
  $kol_send_mail[$value] = count($array_send_mail);
  unset($array_send_mail); // удаляем для каждого пользователя
 } else {
  $kol_send_mail[$value]=0;
 }
// если есть данные, что юзер изменял данные о компании, то пишем сколько изменений сделал каждый пользователб
if (isset ($array_change_comp))  {
  $kol_change_comp[$value] = count($array_change_comp);
  unset($array_change_comp); // удаляем для каждого пользователя
 } else {
  $kol_change_comp[$value]=0;
 }
}

// отправляем количество КП с изменениями индекс сотрудник 
$smarty->assign('kol_change_kp', @$kol_change_kp);
// отправляем количество уникальных КП с изменениями индекс сотрудник 
$smarty->assign('kol_change_unique_kp', @$kol_change_unique_kp);
// отправляем количество отправленных емацлов  индекс сотрудник 
$smarty->assign('kol_send_mail', @$kol_send_mail);
// отправляем количество изменений данных о компаний с изменениями индекс сотрудник 
$smarty->assign('kol_change_comp', @$kol_change_comp);