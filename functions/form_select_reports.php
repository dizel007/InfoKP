<?php

$sql ="";
$where = "";
// Если нет никаких дат, то ставим дату сегодняшняя
if (($get_date_start == '') &&  ($get_date_end =='')) {
  $now=date('Y-m-d');
  $get_date_start = $now;
  $get_date_end = $now;
} 
// формируем SQL запрос
  if ($get_responsible <>'') $where = addWhere($where, "author = '".$get_responsible."'");
  
  if ($get_type_kp <>'') $where = addWhere($where, "type_kp = '".$get_type_kp."'");

  if ($get_date_start<>'') $where = addWhere($where, "date_change >='".$get_date_start."'");

  if ($get_date_end<>'') $where = addWhere($where, "date_change <='".$get_date_end."'");

  // }
if ($where) {$sql .= " WHERE $where"." ORDER BY date_change DESC";}
else {
  $sql .= " ORDER BY date_change DESC"; 
}

// echo $sql;

// die();

//  формируем SQL запрос в зависимости от предыдущего запроса  ******************************
function addWhere($where, $add, $and = true) {
  if ($where) {
    if ($and) $where .= " AND $add";
    else $where .= " OR $add";
  }
  else $where = $add;
  return $where;
}


