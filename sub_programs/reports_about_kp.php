<?php

$id= $_GET['id']; // id KP

$stmt = $pdo->prepare("SELECT * FROM `reports` WHERE 	id_item = $id");
$stmt->execute([]);
$arr_with_all_changes = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($arr_with_all_changes as $value) {
  // информация о создании КП
  if ($value['what_change'] == 8) {
    $start_info_kp = $value;
  }

  if ($value['what_change'] == 9) {
    $change_data_kp[] = $value;
  }


  if ($value['what_change'] == 1) {
    $pos=0;
    $temp_text = $value['comment_change'];
    $temp_text = str_replace('коммент :', '' ,$temp_text);
    $temp_text = str_replace('@!', '' ,$temp_text);
    echo "***".$temp_text."<br>"; 
    $pos = strpos($temp_text, '||+');
    $temp_text = mb_strimwidth($temp_text, 0, $pos);
    echo "+++".$temp_text."<br>"; 
    echo "***".$pos."<br>"; 
 
    // $temp_text = str_replace('||+', '<br>' ,$temp_text);
   
   
    $temp_text = str_replace(' ; дата сл.зв.', 'дата сл.зв.' ,$temp_text);

   $value['comment_change']  = $temp_text;
    $change_in_kp[] = $value;
    
  }
 
  // информация об отправленных письмах 
  if ($value['what_change'] == 7) {
    // $value['comment_change'] = str_replace('Отправлено сообщение с сайта на адрес : ', '' ,$value['comment_change']);
    $start_emales[] = $value;
  }

}


// echo "<pre>";
// print_r($arr_with_all_changes);
// echo "<pre>";
// die();

$smarty->assign('start_info_kp' , @$start_info_kp);


@$change_in_kp = array_reverse(@$change_in_kp);
$smarty->assign('change_in_kp' , @$change_in_kp); // Изменния в КП
$smarty->assign('change_data_kp' , @$change_data_kp); // Изменния в КП

$smarty->assign('start_emales' , @$start_emales);

$smarty->display('reports/reports_about_kp.tpl');
die('DIE reports_about_kp.php');
