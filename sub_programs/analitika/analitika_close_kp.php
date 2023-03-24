<?php
// ************************** Тут купленных КП за период **********************

$sql ="";
$where = "";
  $where = addWhere($where, "FinishContract=1");
  $where = addWhere($where, "KpCondition <>'Купили у нас'");
  if ($get_date_start<>'') $where = addWhere($where, "date_close >='".$get_date_start."'");
  if ($get_date_end<>'') $where = addWhere($where, "date_close <='".$get_date_end."'");
  if ($where) {$sql .= " WHERE $where"." ORDER BY KpData DESC , CHAR_LENGTH(`KpNumber`) DESC, KpNumber DESC";}
    else {
  $sql .= "AND ORDER BY KpData DESC , CHAR_LENGTH(`KpNumber`) DESC, KpNumber DESC"; 
      }


// Вычитываем все проданные за Период КП
$stmt = $pdo->prepare("SELECT * FROM `reestrkp` $sql");
$stmt->execute([]);
$arr_all_close = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($arr_all_reports);
// echo "<pre>";

// die();
// разбиваем все по пользователям
foreach ($active_user_login as $value){
   $key = key($active_user_login); // перебираем всех пользователей по ключу
   foreach ($arr_all_close as $temp) {
  if ($value == $temp['Responsible']) {
       // считаем количество закрыт  КП за период 
      $array_close_kp[$key]['idKp'] = @$array_close_kp[$key]['idKp'].$temp['id'].";"; // количество 
      $array_close_kp[$key]['KpCount'] = @$array_close_kp[$key]['KpCount'] + 1; // количество 
    }
  } 
next($active_user_login);      
}  // Конец перебора пользователей 

// Формируем массив ИТОГО 

if (isset($array_close_kp)){
  foreach ($array_close_kp as &$value) {
    @$itog_close_kp['KpCount'] = $itog_close_kp['KpCount'] + $value['KpCount'];
    @$itog_close_kp['idKp'] = $itog_close_kp['idKp'].$value['idKp'];
   }
   $itog_close_kp['idKp'] = rtrim($itog_close_kp['idKp'],';');
   

  }



  // echo ($itog_sold_kp['idKp']);
// echo "<pre>";
// print_r($array_close_kp);
// echo "<pre>";
// die();
//  if (isset($array_sold_kp_text))

// Удаляем последний ";" из перечня КП
if (isset($array_close_kp)){
foreach ($array_close_kp as &$value1) {
  $value1['idKp'] = rtrim(@$value1['idKp'],';');
  
 }
}
 
    
$smarty->assign('array_close_kp', @$array_close_kp);   
$smarty->assign('itog_close_kp', @$itog_close_kp);       
       

