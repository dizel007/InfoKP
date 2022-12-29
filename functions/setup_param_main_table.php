<?php
// *************************  Выбор несколько КП по ID
if (@$_GET['ids'] <> ''){
$id_arr = explode(";", $_GET['ids']);
 
// выбираем все По ID по фильтру
foreach ($id_arr as $id_value) {

  $array_with_all_kp_temp1 = GetKPById($pdo,$id_value);
  $array_with_all_kp_temp[] = $array_with_all_kp_temp1[0];
}
    $get_FinishContract = 1; //   когда выводим по ID  то выводим и закрытые КП
    if (count($array_with_all_kp_temp) == '') {
    die (' НЕТ ДАННЫХ ДЛЯ ВЫВОДА КП по ID');
     }
// Выбор одного  КП по ID   
} elseif ($id <> '') {

  $array_with_all_kp_temp1 = GetKPById($pdo,$id);
  $array_with_all_kp_temp[] = $array_with_all_kp_temp1[0];

} 

else {
// выбираем все КП по фильтру

    $array_with_all_kp_temp = GetSelectedKP($pdo,$sql);
    if (count($array_with_all_kp_temp) == '') {
      // $smarty->assign('alarm_message', 'Нет КП по выбранным параметрам');
      // $smarty->assign('back_adress', 'Нет КП по выбранным параметрам');
      // $smarty->display('alarm_message.tpl');
    }
}




$i=0;
$i1=0;
foreach ($array_with_all_kp_temp as $value) {
  // ************* Проверяем нужно ли выводить закрытые КП *********************
  $Show_close_Contracts = $get_FinishContract;
  if (($array_with_all_kp_temp[$i1]['FinishContract'] == 1) && ($Show_close_Contracts <> 1))
  { 
    $i1++;
    continue;
    } else {
      $array_with_all_kp[$i] = $array_with_all_kp_temp[$i1];
      $i++;
      $i1++;
    }
  }

  // echo "<pre>";
  // print_r($array_with_all_kp);
  // echo "<pre>";

if (isset($array_with_all_kp)) {
SetPageNumbers ($smarty, $array_with_all_kp, $pageNumber);
SetParametrsTable ($smarty, $array_with_all_kp);

}
isset($array_with_all_kp)?$kpCount = count($array_with_all_kp): $kpCount =0;


function SetParametrsTable ($smarty, $array_with_all_kp) {

        $i=0;
        $realDate = date("m.d.y"); // Сегодняшняя дата
        $realDate=strtotime($realDate);
        // *********  НАЧИНАЕМ АНАЛИЗИРОВАТЬ МАССИВ С КП **************************
        foreach ($array_with_all_kp as $value) {
        // ************* Проверяем нужно ли выводить закрытые КП *********************
       
          // *************    делаем нормальный вывод комментария **************************
        // $Comment = (string)$arr_name[$i]['Comment'];
        $Comment = substr($value['Comment'], 2, strlen($value['Comment'])); // удаляем первые два символа комментария
        $Comment  = str_replace( "@!", "<br><hr>" , $Comment); // 
        $array_with_all_kp[$i]['Comment']  = str_replace( "||+", ";" , $Comment);
        // 
        // *************    Убираем нули , если не задана дата сл Звонка **************************
        if ($array_with_all_kp[$i]['DateNextCall'] == "0000-00-00") {
        $array_with_all_kp[$i]['DateNextCall'] = '';
        }
        // *************    Убираем нули , если не задана дата Окончания контакта **************************
        // if ($array_with_all_kp[$i]['dateFinishContract'] == "0000-00-00") {
        //   $array_with_all_kp[$i]['dateFinishContract'] = '';
        //   }

        // *************    Форматируем суммы  **************************
        $array_with_all_kp[$i]['KpSum'] = number_format($array_with_all_kp[$i]['KpSum']);
        $array_with_all_kp[$i]['TenderSum'] = number_format($array_with_all_kp[$i]['TenderSum']);

        // ************* делаем ссылку для скачивания PDF и EXCEL 
          $LinkKp[$i] = $array_with_all_kp[$i]['LinkKp'];
          $LinkKpPdf[$i] = substr($LinkKp[$i], 0, -4)."pdf";
          $exist_pdf_file[$i] =file_exists($LinkKpPdf[$i]); // Проверяем есть ли ПДФ файл
          $exist_excel_file[$i] = file_exists($LinkKp[$i]);


        // ************** Проверяем актуальность КП (Если не актуально то закрасим серым цветом)
        $statusKpClass[$i]='';      // нужен при следующей проверке
        $DateNextCallTable[$i]=''; // нужен при следующей проверке
            if ($array_with_all_kp[$i]['StatusKp'] == "КП сформировано" ||
            $array_with_all_kp[$i]['FinishContract'] == 1 || 
            $array_with_all_kp[$i]['KpCondition'] =="Не требуется" || 
            $array_with_all_kp[$i]['KpCondition'] =="Уже купили")  
              {  //// красим цветом статус КП
                      $statusKpClass[$i] = "BlinkColor";
              }  

        //  ************* Проверяем дату следующего звонка ... Если пора звонить, то красим в Красный (если КП актуально)
        $tempDate = ($array_with_all_kp[$i]['DateNextCall']);
        $tempDate=strtotime($tempDate);

        // проверяем не нуливая ли дата (пустую Дату не красим в КРасный цвет)
        if (date('Y-m-d', $tempDate) <> '')  
          {  
                if (($tempDate < $realDate) && ($statusKpClass[$i] <> "BlinkColor")){
                  $DateNextCallTable[$i] = "alarmcolor";
                } else { 
                  $DateNextCallTable[$i] = "";  
                }
          }  else {
              $DateNextCallTable[$i] = "";  
              }

        // ************* **  /// ЕСЛИ КУПИЛИ У НАС ТО КРАСИМ ЗЕЛЕНЫМ
        $KpConditionTable[$i] = '';
          if ($array_with_all_kp[$i]['KpCondition'] == "Купили у нас")
          {  //// красим цветом статус КП
                $KpConditionTable[$i] = "buyour";
          }
        
        // ************* Делаем чередование строк
        if(($i % 2) == 0) {
        $StringColor[$i] = "DrawLight";
        } else {
        $StringColor[$i] = "DrawDark";
        }
        // ************* Красим шрифт в строке в зависимости от важности
        if ($array_with_all_kp[$i]['KpImportance'] == "Важно") {
          $KpImportanceTable[$i] = "RedColor";}

            elseif ($array_with_all_kp[$i]['KpImportance'] == "Очень важно") {
              $KpImportanceTable[$i] = "GreenColor";}
            else {
              $KpImportanceTable[$i] = '';}
        // ************* Подсвечиваем компании которым раньше продавали  *********** 
          if ($array_with_all_kp[$i]['second_sell'] == 1) {
            $second_sell_cl[$i] = 'sell_comp';}  
          else {
          $second_sell_cl[$i] = '';} 
          
        // *************
        $i++;
        }

  // *******************   Отправляем в смарти массивы со ссылками на КП *********************
$smarty->assign("LinkKp", $LinkKp);
$smarty->assign("LinkKpPdf", $LinkKpPdf);
$smarty->assign("exist_pdf_file", $exist_pdf_file);
$smarty->assign("exist_excel_file", $exist_excel_file);
// *******************   Отправляем в смарти массив c закрытыми бледными КП *********************
$smarty->assign("statusKpClass", $statusKpClass);
// *******************   Отправляем в смарти массив c КП по которым просрочен звонок*********************
$smarty->assign("DateNextCallTable", $DateNextCallTable);
// *******************   Отправляем в смарти массив окрашенных цветом купленных КП *********************
$smarty->assign("KpConditionTable", $KpConditionTable);
// *******************   Отправляем в смарти массив c переменными цветами строк ********************
$smarty->assign("StringColor", $StringColor);
// *******************   Отправляем в смарти массив с цветом строки в завис.. от важности **************
$smarty->assign("KpImportanceTable", $KpImportanceTable);
// *******************   Отправляем в смарти массив с цветом RG которым раньше продавали **************
$smarty->assign("second_sell_cl", $second_sell_cl);
// *******************   Отправляем в смарти массив с КП  *********************
$smarty->assign("array_with_all_kp", $array_with_all_kp);

} 



$smarty->assign("kpCount", $kpCount);   // количество элементов

// **************************
