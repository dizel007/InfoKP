<?php
//  формируем SQL запрос в зависимости от предыдущего запроса  ******************************
function addWhere($where, $add, $and = true) {
  if ($where) {
    if ($and) $where .= " AND $add";
    else $where .= " OR $add";
  }
  else $where = $add;
  return $where;
}
$sql ="";
$where = "";
if ($typeQuery <> '') {
  if ($get_FinishContract  == '0') $where = addWhere($where, "FinishContract =".$get_FinishContract);

  if ($get_nomerKP <>'') $where = addWhere($where, "KpNumber =".$get_nomerKP);
  
  if ($get_inn <> '' ) $where = addWhere($where, "InnCustomer =".$get_inn);

  if ($get_responsible <>'') $where = addWhere($where, "Responsible = '".$get_responsible."'");
  
  if ($get_name_zakazchik <>'') $where = addWhere($where, "NameCustomer like '%".$get_name_zakazchik."%'");
  
  if ($get_adres_postavki <>'') $where = addWhere($where, "adress like '%".$get_adres_postavki."%'");

  if ($get_date_start<>'') $where = addWhere($where, "KpData >='".$get_date_start."'");

  if ($get_date_end<>'') $where = addWhere($where, "KpData <='".$get_date_end."'");


  // if ($sort_value_default == 2) $where .= " ORDER BY CHAR_LENGTH(`width`), width ASC";
  // if ($sort_value_default == 3) $where .= " ORDER BY load_class ASC";

  
}
if ($where) {$sql .= " WHERE $where"." ORDER BY KpData DESC , CHAR_LENGTH(`KpNumber`) DESC, KpNumber DESC";}
else {
  $sql .= " ORDER BY KpData DESC , CHAR_LENGTH(`KpNumber`) DESC, KpNumber DESC"; 
}

// echo $sql;


