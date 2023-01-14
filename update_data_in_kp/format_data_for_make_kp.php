<?php
require_once ("../connect_db.php");
require_once ("../update_data_in_kp/parce_excel_for_update_kp.php");
require_once ("../new_kp_info/format_new_kp.php");

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
/*
GET данные
*/
$id = $_POST['id']; // 

//  Вычиитаваем все данные о КП из реестра 
$stmt = $pdo->prepare("SELECT * FROM `reestrKP` WHERE `id` = ?");
$stmt->execute([$id]);
$arr_kp_by_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($arr_kp_by_id);
// echo "<pre>";

$KpNumber = $arr_kp_by_id[0]['KpNumber'];
$KpDate = $arr_kp_by_id[0]['KpData'];
$now = new DateTime($KpDate);
$KpDate_temp = $now->format('d.m.Y'); // меняет отображение даты для КП 

$NameCustomer = $arr_kp_by_id[0]['NameCustomer'];
$adress = $arr_kp_by_id[0]['adress'];
$ContactCustomer = $arr_kp_by_id[0]['ContactCustomer'];

// Формируем номер закупки из ссылки
$NomerZakupki = $arr_kp_by_id[0]['konturLink'];
$NomerZakupki = $result = preg_replace("/[^,0-9]/", '', $NomerZakupki);

// Назначаем ответственного за КП 
$Responsible = $arr_kp_by_id[0]['Responsible'];
if ($Responsible =='') { // если нет ответственного, то назначаем того, кто изменяет КП
  $Responsible=$userdata['user_name'];
}
//  вычитаваем данные про ответственного
$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `user_name` = ?");
$stmt->execute([$Responsible]);
$user_responsible_arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // данные для заполнения инфы про ответ-го

/** получаем ссылку на файл ексель */
$LinkKp = $arr_kp_by_id[0]['LinkKp'];
mb_internal_encoding("UTF-8");
$FileName_temp =mb_substr( $arr_kp_by_id[0]['LinkKp'], 6);
$FileName_temp =mb_substr( $FileName_temp, 0, -5); // Название файла без расширения
$FileName_temp = $FileName_temp."7777"; //********************************* DELETE  */

$file_name_="../".$LinkKp;
$date_write = date('Y-m-d');

echo "HEOLdddLLLLL";

$kp_array_shapka = parce_kp($file_name_)['shapka'];
// echo "<pre>";
// print_r($kp_array_shapka);
// echo "<pre>";



$products = make_prod_array($_POST);
// echo "<pre>";
// print_r($prods);
// echo "<pre>";


$KpFileName= $FileName_temp;

$comparr = array ( 'KpNumber' => $arr_kp_by_id[0]['KpNumber'] ,
                   'KpDate' => $KpDate_temp,
                   'ContactPerson' => $kp_array_shapka['ContactPerson'],
                   'NameCustomer' => $NameCustomer,
                   'Adress' => $adress,
                   'ContactCustomer' => $ContactCustomer, 
                   'Email' => $kp_array_shapka['Email'],
                   'Telephone' => $kp_array_shapka['Phone'],
                   'ZakupName' => $kp_array_shapka['ZakupName'],

                   'NomerZakupki' => $NomerZakupki,
                   'DostCost' => $_POST['price_dost']);
                   


$comparr += array ('KpFileName' => $KpFileName); // наименование файла


$temp_array = format_new_kp($products, $comparr, $user_responsible_arr); // Формируем КП и получаем сумму КП 


update_db_reestr_kp($id, $temp_array, $pdo) ;
// echo "<pre>";
// print_r($temp_array);
// echo "<pre>";


header("Location: ../index.php?transition=10&id=".$id);

die();


/**
 * Формируем обновленный массив товаров из запроса ПОСТ 
 * * */
function make_prod_array($post) {
    for ($i=0; $i<@$post['all_kolvo']; $i++) {
      if (($post["name$i"] == '')) {
        break;
      }
      if ($post["ed_izm$i"] == '') {
        $post["ed_izm$i"]='шт';
      }
      if ($post["kol$i"] == '') {
        $post["kol$i"]=1;
      }
      if ($post["price$i"] == '') {
        $post["price$i"]=1;
      }

      $prods[$i]['name']= $post["name$i"];
      $prods[$i]['ed_izm']= $post["ed_izm$i"];
      $prods[$i]['kol']= $post["kol$i"];
      $prods[$i]['price']= $post["price$i"];

    }
return @$prods;
}

function update_db_reestr_kp($id, $temp_array, $pdo) {
  $LinkKp = "EXCEL/".$temp_array['KpFileName'].".xlsx";
  $KpSum = $temp_array['total'];
  // Формируем АПдейт в БД
$data_arr = [
  'LinkKp'=> $LinkKp,
  'KpSum'=> $KpSum,

  'id' => $id,
];

  $sql = "UPDATE reestrkp SET 
                            KpSum=:KpSum,
                            LinkKp=:LinkKp
                           
                      WHERE id=:id";


$stmt= $pdo->prepare($sql);
$stmt->execute($data_arr);

}