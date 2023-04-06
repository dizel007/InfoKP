<?php
require_once ("../connect_db.php");
require_once ("../update_data_in_kp/parce_excel_for_update_kp.php");
require_once ("../new_kp_info/format_new_kp.php");

require_once '../new_kp_info/make_pdf.php'; // фукнция создания КП в пдф формате

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
// die();

/*
GET данные
*/

$pdf_visota_prod_stroki = $_POST['pdf_visota_prod_stroki'];
$id = htmlspecialchars($_POST['id']); // 
/* СРАЗУ ОБНОВИМ ВЫСОТА СТРОКИ ТОВАРОВ в ПДФ Документе*/
$data_arr_ = [
   'visota_str_pdf_doc'=> $pdf_visota_prod_stroki,
  'id' => $id,
  ];
 
  $sql = "UPDATE reestrkp SET visota_str_pdf_doc=:visota_str_pdf_doc WHERE id=:id";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($data_arr_);


$type_kp_new = htmlspecialchars($_POST['type_kp']);
$product_type_new = htmlspecialchars($_POST['product_type']);
$param_arr['type_kp'] = $type_kp_new;
$param_arr['type_product'] = $product_type_new;

$adress = trim(htmlspecialchars($_POST['adress_dostavki']));
$ZakupName = trim($_POST['ZakupName']);

$telefon_zakaz = trim(htmlspecialchars($_POST['telefon_zakaz']));
$email_zakaz = trim(htmlspecialchars($_POST['email_zakaz']));
$contact_face_zakaz = trim(htmlspecialchars($_POST['contact_face_zakaz']));


(isset($_POST['uslovia_oplati']))?$uslovia_oplati = htmlspecialchars($_POST['uslovia_oplati']):$uslovia_oplati='по согласованию сторон';

(isset($_POST['srok_izgotovl']))?$srok_izgotovl = htmlspecialchars($_POST['srok_izgotovl']):$srok_izgotovl='в наличии';


// если треубется обновиь данные о Заказчике в КП


if (isset($_POST['InnCustomer'])){
UpdateCustomerDataInReestr($pdo,$_POST['InnCustomer'], $id);
}

//  Вычиитаваем все данные о КП из реестра 
$stmt = $pdo->prepare("SELECT * FROM `reestrkp` WHERE `id` = ?");
$stmt->execute([$id]);
$arr_kp_by_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
$type_kp = $arr_kp_by_id[0]['type_kp'];
// echo "<pre>";
// print_r($arr_kp_by_id);
// echo "<pre>";
// die('222222');

$KpNumber = $arr_kp_by_id[0]['KpNumber'];
$KpDate = $arr_kp_by_id[0]['KpData'];
$now = new DateTime($KpDate);
$KpDate_temp = $now->format('d.m.Y'); // меняет отображение даты для КП 

$NameCustomer = $arr_kp_by_id[0]['NameCustomer'];
// $adress = $arr_kp_by_id[0]['adress'];
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

if ($arr_kp_by_id[0]['cor_kol_kp'] == 0) {
  $next_cor_kol_kp = 1;
  $FileName_temp = $FileName_temp.$next_cor_kol_kp;  // цепляем новую весрия.
  
}else {
$len_cor_kol_kp = strlen($arr_kp_by_id[0]['cor_kol_kp']);

$FileName_temp =mb_substr( $FileName_temp, 0, -$len_cor_kol_kp); // Убираем прошлую версию файла без расширения
$next_cor_kol_kp = $arr_kp_by_id[0]['cor_kol_kp'] +1;

$FileName_temp = $FileName_temp.$next_cor_kol_kp;  // цепляем новую весрия.
}

$file_name_="../".$LinkKp;


$date_write = date('Y-m-d');

// echo "$FileName_temp";
// die();

$kp_array_shapka = parce_kp($file_name_)['shapka'];
// echo "<pre>";
// print_r($kp_array_shapka);
// echo "<pre>";

$products = make_prod_array($_POST);

$KpFileName= $FileName_temp;

if ($type_kp <> 6) {
  $adress_in_kp = $adress;
} else {
  $adress_in_kp = TEXT_PERED_ADRESOM_DOSTAVKI.$adress;  
}

$comparr = array ( 'KpNumber' => $arr_kp_by_id[0]['KpNumber'] ,
                   'KpDate' => $KpDate_temp,
                   'ContactCustomer' => $contact_face_zakaz,
                   'NameCustomer' => $NameCustomer,
                   'Adress' => $adress_in_kp,
                   'Email' => $email_zakaz ,
                   'Telephone' => $telefon_zakaz,
                   'ZakupName' => $ZakupName,
                   'uslovia_oplati' => $uslovia_oplati,
                   'srok_izgotovl' => $srok_izgotovl,

                   'NomerZakupki' => $NomerZakupki,
                   'DostCost' => $_POST['price_dost']);
 $comparr += array ('KpFileName' => $KpFileName); // наименование файла


$temp_array = format_new_kp($products, $comparr, $user_responsible_arr); // Формируем КП и получаем сумму КП 


$KpSum = $temp_array['total'];
/*
Делаем маркер, что КП побработанно и сумма КП >100 рубл
*/

if ($KpSum > 100) {
  $marker=0;
}else{
  $marker=1;
}

//формируем ПЖФ документ
make_pdf_kp($products, $comparr,$user_responsible_arr, $KpSum, $pdf_visota_prod_stroki); // 


update_db_reestr_kp($id, $temp_array, $pdo, $Responsible, $next_cor_kol_kp, $marker, $adress, $param_arr) ;
// echo "<pre>";
// print_r($temp_array);
// echo "<pre>";

$date_change = date("Y-m-d");
$id_item = $id;
$what_change = 12;
$comment_change = "Изменение. КП№".$KpNumber." ".$NameCustomer; 
$author = $userdata['user_login'];
require "../pdo_connect_db/insert_reports.php";


header("Location: ../index.php?transition=10&id=".$id);

// die();


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

function update_db_reestr_kp($id, $temp_array, $pdo, $Responsible, $cor_kol_kp, $marker, $adress, $param_arr) {
  $today = date("Y-m-d");
  $LinkKp = "EXCEL/".$temp_array['KpFileName'].".xlsx";
  $KpSum = $temp_array['total'];

//  Вычиитаваем все данные о КП из реестра 
// echo "ll+++lll--". $adress;
// die();


  // Формируем АПдейт в БД
$data_arr = [
  'LinkKp'=> $LinkKp,
  'KpSum'=> $KpSum,
  'Responsible'=> $Responsible,
  'date_write'=> $today,
  'cor_kol_kp'=> $cor_kol_kp, //Добавляем следующий номер
  'marker'=> $marker,
  'adress'=> $adress,
  'type_kp' => $param_arr['type_kp'],
  'type_product' => $param_arr['type_product'],

  'id' => $id,
];



  $sql = "UPDATE reestrkp SET 
                            KpSum=:KpSum,
                            LinkKp=:LinkKp,
                            Responsible=:Responsible,
                            cor_kol_kp=:cor_kol_kp,
                            date_write=:date_write,
                            marker=:marker,
                            adress=:adress,
                            type_kp=:type_kp,
                            type_product=:type_product
                           
                      WHERE id=:id";


$stmt= $pdo->prepare($sql);
$stmt->execute($data_arr);

}

function updateCustomerDataInReestr ($pdo, $InnCustomer, $id ) {
$stmt = $pdo->prepare("SELECT * FROM `inncompany` WHERE `inn` = ?");
$stmt->execute([$InnCustomer]);
$arr_company_inn = $stmt->fetchAll(PDO::FETCH_ASSOC);

$NameCustomer = $arr_company_inn[0]['name'];
$today = date("Y-m-d");
// Формируем АПдейт в БД
$data_arr = [
'NameCustomer'=> $NameCustomer,
'InnCustomer'=> $InnCustomer,
'date_write'=> $today,
'id' => $id,
];

$sql = "UPDATE reestrkp SET 
                          NameCustomer=:NameCustomer,
                          InnCustomer=:InnCustomer,
                          date_write=:date_write
                         
                    WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data_arr);
}