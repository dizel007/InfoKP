<?php
/**
 * Формируем массив с данными для формирования нового КП
 */
function parce_kp($file_name){ 

  // выбираем файл для парсинга
 // Начали формировать массив с шапки КП
 //************************************************* */  
 $xls = PHPExcel_IOFactory::load($file_name);
 $xls->setActiveSheetIndex(0);
 $sheet = $xls->getActiveSheet();
 $i=19;
 $stop =0;
 
 $kp_name = $sheet->getCellByColumnAndRow(6, 6)->getValue();
 $Zakazchik = $sheet->getCellByColumnAndRow(9, 8)->getValue();
 $ContactPerson = $sheet->getCellByColumnAndRow(9, 9)->getValue();
 $Phone = $sheet->getCellByColumnAndRow(9, 10)->getValue();
 $Email = $sheet->getCellByColumnAndRow(9, 11)->getValue();
 $ZakupName = $sheet->getCellByColumnAndRow(2, 16)->getValue();

 $kp_array_shapka = array ( 'kp_name' => $kp_name ,
                       'Zakazchik' => $Zakazchik,
                       'Phone' => $Phone,
                       'Email' => $Email, 
                      'ContactPerson' => $ContactPerson);
$kp_array_shapka += array (  'ZakupName' => $ZakupName);

  $sum_kp_array['shapka'] = $kp_array_shapka;
  
  $sheet = $xls->getActiveSheet();
  $i=19;
  $stop =0;
  
 // Начали формировать массив товаров 
 //************************************************* */  
  while ($stop <> 1 ) {
  $name = $sheet->getCellByColumnAndRow(3, $i)->getValue();
  
  if ($name == '') {
    $stop =1;
    break;
  }
  
  $ed_izm = $sheet->getCellByColumnAndRow(8, $i)->getValue();
  $kolvo = $sheet->getCellByColumnAndRow(10, $i)->getValue();
  $kolvo = str_replace(' ','',$kolvo);
  $kolvo = str_replace(',','.',$kolvo);
  $price = $sheet->getCellByColumnAndRow(11, $i)->getValue();
  $sum_price = $sheet->getCellByColumnAndRow(11, $i)->getValue();
  $price = str_replace(' ','',$price);
  $price = str_replace(',','.',$price);
  
  $prods[] = 
    array(
      'name'  => $name,
      'kol' => $kolvo,
      'ed_izm' => $ed_izm,
      'price' => $price,
      'sum_price' => $sum_price
    );
  
  $i++;
  }

  $sum_kp_array['prods'] = $prods;
  // echo "<pre>";
  // print_r($prods);
  // echo "<pre>";
  // die();
  
 // Начали формировать дополнительной информации 
 //************************************************* */  

  $idost= $i+8;
  $price_dost = $sheet->getCellByColumnAndRow(12, $idost)->getValue();
  $price_dost = str_replace(' ','',$price_dost);
  $price_dost = str_replace(',','.',$price_dost); // стоимость доставки
  
  
  $i_1 = $i+6;
  $uslovia_oplati = $sheet->getCellByColumnAndRow(5, $i_1)->getValue();
  $i_1 = $i+7;
  $srok_izgotovl =$sheet->getCellByColumnAndRow(5, $i_1)->getValue();
  $i_1 = $i+8;
  $adress_dostavki =$sheet->getCellByColumnAndRow(5, $i_1)->getValue();
  
   $kp_dop_info = 
	array(
		'uslovia_oplati'  => $uslovia_oplati,
		'srok_izgotovl' => $srok_izgotovl,
		'adress_dostavki' => $adress_dostavki,
		'price_dost' => $price_dost,
	); 
  
  $sum_kp_array['dop_info'] = $kp_dop_info;


  return $sum_kp_array;
 }

/**
 * Выводим на экран информацию из КП с возможностью редактирования
 */
function dispay_update_kp($smarty, $sum_kp_array, $add_str, $id){
  $smarty->assign('prods', $sum_kp_array['prods']);
  $smarty->assign('dop_info', $sum_kp_array['dop_info']);
  $smarty->assign('add_str', $add_str);
  $smarty->assign('id', $id);
  $smarty->display('../templates/update_data_in_kp.tpl');
}