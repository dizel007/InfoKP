<?php
/* 
*  ======================================= 
*  Author     : Zelizko Dmitriy 
*  License    : Protected 
*  Email      : 1dizel007@gmail.com 
*  ======================================= 
*/  
function make_pdf_kp($products, $comparr,$user_responsible_arr, $KpSum){
  

//   echo "<pre>";
//   print_r($products);
//   echo "<pre>";
// die();

  $NameCustomer=$comparr['NameCustomer'];
  $KpNumber=$comparr['KpNumber'];
  $KpDate_temp=$comparr['KpDate'];
  $ContactCustomer=$comparr['ContactCustomer'];
  $new_TelCustomer=$comparr['Telephone'];

  $new_TelCustomer = str_replace(array("\n","\r"), ' ', $new_TelCustomer);
  // $new_TelCustomer = explode(',',$new_TelCustomer);

  $EmailCustomer=$comparr['Email'];
  $EmailCustomer = str_replace(',', ' ', $EmailCustomer);
  $adress=$comparr['Adress'];
  $DostCost=$comparr['DostCost'];
  $KpFileName=$comparr['KpFileName'];
  $ZakupName=$comparr['ZakupName'];
  

  
require_once '../PHPExcel-1.8/fpdf/fpdf.php';

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();

$pdf->image('../new_kp_info/right_logo.png',10,15,57);
//set font to arial, bold, 14pt


// подключаем шрифты
define('FPDF_FONTPATH',"fpdf/font/");
// добавляем шрифт ариал
$pdf->AddFont('TimesNRCyrMT','','timesnrcyrmt.php');// добавляем шрифт ариал
$pdf->AddFont('TimesNRCyrMT-Bold','','timesnrcyrmt_bold.php'); 
// устанавливаем шрифт Ариал


/*
# Шапка КП
*/
$contact_font_size = 7;
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->Cell(190 ,4,'',0,2); // отступ сверху 1 строка
$pdf->Cell(70 ,4,'',0,0); // отступ
$pdf->Cell(60 ,4, MakeUtf8Font('ООО «Торговый дом «АНМАКС»'),0,0,'C');
$pdf->Cell(60 ,4, MakeUtf8Font('Tел. / факс: +7 (495) 787-24-05'),0,1,'C');

$pdf->Cell(70 ,4,'',0,0,'C');
$pdf->Cell(60 ,4, MakeUtf8Font('г. Москва, Зеленоград,'),0,0,'C');
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->SetFont('','U'); // подчеркивание
$pdf->Cell(60 ,4, MakeUtf8Font('email: info@anmaks.ru'),0,1,'C','', "mailto:info@anmaks.ru");

$pdf->SetTextColor(0,0,0);
$pdf->Cell(70 ,4,'',0,0,'C');
$pdf->SetFont('TimesNRCyrMT-Bold','');
$pdf->Cell(60 ,4, MakeUtf8Font('проезд № 4807, д. 1, стр. 1'),0,0,'C');
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->SetFont('','U'); // подчеркивание
$pdf->Cell(60 ,4, MakeUtf8Font('www.anmaks.ru'),0,1,'C','','https://www.anmaks.ru/');
$pdf->SetTextColor(0,0,0); // черный цвет

/* КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ */
$pdf->SetFont('TimesNRCyrMT','',15);
$pdf->Cell(190 ,5,'',0,2); // отступ сверху 1 строка
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(130 ,9, MakeUtf8Font('КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ'),0,1,'C');
$pdf->Cell(60 ,9,'',0,0); // отступ
$temp = "№".$KpNumber." от ".$KpDate_temp;
$pdf->Cell(130 ,9, MakeUtf8Font($temp),0,1,'C');

/* КОНТАКТЫ ЗАКАЗЧИКА */
$contact_font_size = 8;
$h_hight_shapka = 5;
$pdf->Cell(190 ,5,'',0,2); // отступ сверху 1 строка

//  ***************   **Заказчик 



/******************************** Наименование Заказчика ***********************/

$string_array = make_string_name_array($NameCustomer , 73); // число - это длина строки
$hight = count($string_array);
$real_hight_string = $h_hight_shapka*$hight;
$real_Y_position = $pdf->GetY();


$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(50 ,$real_hight_string, MakeUtf8Font('Заказчик'),'TB',0,'C');

$pdf->SetFont('TimesNRCyrMT','',$contact_font_size);
$pdf->SetTextColor(0,0,0); // черный цвет
$count_name_cycle=1;
  foreach ($string_array as $value_name) {
      if ($count_name_cycle < count($string_array)) {
         if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
          $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name),'T',0,'C');
         } else { // чтобы не рисовать черту сверху на второй и далее строках
          $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name), 0 , 0 ,'C');
         }
        // $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name),'T',0,'C');
        $real_Y_position = $pdf->GetY();
        $pdf->setXY(120,$real_Y_position+$h_hight_shapka);
        $count_name_cycle++;

      } else {
        if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
          $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name),'TB',0,'C');

         } else { // чтобы не рисовать черту сверху на второй и далее строках
          $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name),'B',0,'C');
       }

        // $pdf->Cell(80 ,$h_hight_shapka, MakeUtf8Font($value_name),'B',0,'C');
        $real_Y_position = $pdf->GetY();
        $pdf->setXY(10,$real_Y_position+$h_hight_shapka);
        $count_name_cycle++;
      }

  }

// Контактное лицо 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,6,'',0,0); // отступ
$pdf->Cell(50 ,6, MakeUtf8Font('Контактное лицо'),'B',0,'C');
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(80 ,6, MakeUtf8Font($ContactCustomer),'B',1,'C');

// ******************************    ****************   Телефон 
$h_tel_cell = 4.5; // нормальная высота строки


$string_array = make_string_name_array($new_TelCustomer , 18); // число - это длина строки

$hight = count($string_array);
$real_hight_string = $h_tel_cell*$hight;
$real_Y_position = $pdf->GetY();

$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(50 ,$real_hight_string, MakeUtf8Font('Телефон'),'TB',0,'C');

$pdf->SetFont('TimesNRCyrMT','',$contact_font_size);
$pdf->SetTextColor(0,0,0); // черный цвет
$count_name_cycle=1;

foreach ($string_array as $value_name) {
  if ($count_name_cycle < count($string_array)) {
     if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'T',0,'C');
     } else { // чтобы не рисовать черту сверху на второй и далее строках
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name), 0 , 0 ,'C');
     }
    $real_Y_position = $pdf->GetY();
    $pdf->setXY(120,$real_Y_position+$h_tel_cell);
    $count_name_cycle++;

  } else {
    if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'TB',0,'C');

     } else { // чтобы не рисовать черту сверху на второй и далее строках
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'B',0,'C');
   }

    $real_Y_position = $pdf->GetY();
    $pdf->setXY(10,$real_Y_position+$h_tel_cell);
    $count_name_cycle++;
  }

}



// ************************************************ email 

$h_tel_cell = 4.5; // нормальная высота строки


$string_array = make_string_name_array($EmailCustomer , 40); // число - это длина строки
$hight = count($string_array);
$real_hight_string = $h_tel_cell*$hight;
$real_Y_position = $pdf->GetY();

$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(50 ,$real_hight_string, MakeUtf8Font('e-mail'),'TB',0,'C');

$pdf->SetFont('TimesNRCyrMT','',$contact_font_size);
$pdf->SetTextColor(0,0,0); // черный цвет
$count_name_cycle=1;

foreach ($string_array as $value_name) {
  if ($count_name_cycle < count($string_array)) {
     if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'T',0,'C','', "mailto:$value_name");
     } else { // чтобы не рисовать черту сверху на второй и далее строках
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name), 0 , 0 ,'C','', "mailto:$value_name");
     }
    $real_Y_position = $pdf->GetY();
    $pdf->setXY(120,$real_Y_position+$h_tel_cell);
    $count_name_cycle++;

  } else {
    if ($count_name_cycle == 1) { // чтобы нарисовать черту только над первой строкой
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'TB',0,'C','', "mailto:$value_name");

     } else { // чтобы не рисовать черту сверху на второй и далее строках
      $pdf->Cell(80 ,$h_tel_cell, MakeUtf8Font($value_name),'B',0,'C','', "mailto:$value_name");
   }

    $real_Y_position = $pdf->GetY();
    $pdf->setXY(10,$real_Y_position+$h_tel_cell);
    $count_name_cycle++;
  }

}



// $pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
// $pdf->SetTextColor(5,99,193); // синий цвет
// $pdf->Cell(60 ,6,'',0,0); // отступ
// $pdf->Cell(50 ,6, MakeUtf8Font('e-mail'),'B',0,'C');
// $pdf->SetFont('','U'); // подчеркивание
// $pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
// $pdf->Cell(80 ,6, MakeUtf8Font($EmailCustomer),'B',1,'C','', "mailto:$EmailCustomer");

// ************************************** Номер извещения на ЭТП 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,6,'',0,0); // отступ
// $pdf->Cell(50 ,6, MakeUtf8Font('Номер извещения на ЭТП'),'0',0,'C');
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(80 ,6, MakeUtf8Font(''),'0',1,'C');

//  Добрый день!
$pdf->Cell(190 ,5,'',0,2); // отступ сверху 1 строка
$pdf->SetFont('TimesNRCyrMT-Bold','',11); // жирный текст 11
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(190 ,7, MakeUtf8Font('Добрый день!'),0,1,'C');

// текст о предложении



$contact_font_size = 9;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
$pdf->MultiCell(190 ,4.5, MakeUtf8Font($ZakupName), 0,'C',0);
// ************************ таблица товаров
// шапка
$contact_font_size = 9;
$pdf->Cell(190 ,3,'',0,2); // отступ сверху 1 строка
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->Cell(10 ,8, MakeUtf8Font('№п/п'),'B',0,'C');
$pdf->Cell(110 ,8, MakeUtf8Font('Наименование'),'B',0,'C');
$pdf->Cell(15 ,8, MakeUtf8Font('Ед.изм'),'B',0,'C');
$pdf->Cell(15 ,8, MakeUtf8Font('Кол-во'),'B',0,'C');
$pdf->Cell(17 ,8, MakeUtf8Font('Цена'),'B',0,'C');
$pdf->Cell(23 ,8, MakeUtf8Font('Сумма'),'B',1,'C');

// ***********************  Таблица с номенклатурой **************************
$contact_font_size = 8;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст
$i=1;

foreach ($products as $value) {
$h_cell = 5; // нормальная высота строки
 
$string_array = make_string_name_array($value['name'] , 115); // число - это длина строки
$hight = count($string_array);
$real_hight_string = $h_cell*$hight;
$real_Y_position = $pdf->GetY();

// 
$pdf->Cell(10 ,$real_hight_string, $i,'B',0,'C');
/**
 * Выводим наименовние товаров
*/
$count_name_cycle=1;
  foreach ($string_array as $value_name) {
      if ($count_name_cycle < count($string_array)) {

        $pdf->Cell(110 ,$h_cell, MakeUtf8Font($value_name),0,0,'L');
        $real_Y_position = $pdf->GetY();
        $pdf->setXY(20,$real_Y_position+$h_cell);
        $count_name_cycle++;
      } else {
        $pdf->Cell(110 ,$h_cell, MakeUtf8Font($value_name),'B',0,'L');
        $real_Y_position = $pdf->GetY();
        $pdf->setXY(20,$real_Y_position+$h_cell);
        $count_name_cycle++;
      }

  }

$real_Y_position = $pdf->GetY();


$pdf->setXY(130,$real_Y_position - $real_hight_string);

$pdf->Cell(15 , $real_hight_string, MakeUtf8Font($value['ed_izm']),'B',0,'C');
$pdf->Cell(15 , $real_hight_string, MakeUtf8Font($value['kol']),'B',0,'C');
$pdf->Cell(17 , $real_hight_string, MakeUtf8Font(number_format($value['price'], 2, ',', ' ')),'B',0,'C');
$summa_strolki = number_format($value['kol']*$value['price'], 2, ',', ' ');

$pdf->Cell(23 ,$h_cell*$hight, MakeUtf8Font($summa_strolki),'B',1,'C');
$i++;

}


// *********** ВСЕГО ******* ИТОГО
$contact_font_size = 9;
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$h_cell = 5;
$pdf->Cell(134 , $h_cell , '',0,0,'C');
$pdf->Cell(33 , $h_cell , MakeUtf8Font('Итого:'),0,0,'R');
$pdf->Cell(23 ,$h_cell, MakeUtf8Font(number_format($KpSum, 2, ',', ' ')),0,1,'C');
$pdf->Cell(134 , $h_cell , '',0,0,'C');
$pdf->Cell(33 , $h_cell , MakeUtf8Font('В т.ч. НДС (20%):'),0,0,'R');
$nds20 = number_format(($KpSum*0.2)/1.2, 2, ',', ' ');
$pdf->Cell(23 ,$h_cell, MakeUtf8Font($nds20),0,1,'C');


$contact_font_size = 8;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // жирный текст 
$pdf->Cell(190 ,5,MakeUtf8Font('Цены указаны в рублях с учетом НДС.'),0,2); // отступ сверху 1 строка

/*
* УСЛОВИЯ ПОСТАВКИ
*/

$real_Y_position = $pdf->GetY(); //------------------------------------------------------------
if ($real_Y_position > 200) {
  $pdf->AddPage('P');
}

$contact_font_size = 8;
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->Cell(190 , 10 , '',0,1,'C'); // пустая тсрока

$h_cell = 5.5;
$pdf->Cell(20 , $h_cell , '',0,0,'C');
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(30 , $h_cell , MakeUtf8Font('Условия оплаты:'),0,0,'R');
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальнй текст 
$pdf->Cell(140 , $h_cell , MakeUtf8Font("По согласованию сторон"),0,1,'L');
$pdf->Cell(20 , $h_cell , '',0,0,'C');
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->Cell(30 , $h_cell , MakeUtf8Font('Срок изготовления:'),0,0,'R');
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальнй текст 
$pdf->Cell(140 , $h_cell , MakeUtf8Font('В наличии'),0,1,'L');

$long_str  = strlen ($adress) + 51;
$max_long_string=110;
$kolvo_strok=1;
if ($long_str > $max_long_string) {  // если строка превышает заданную длину, нужно расширить строку
   $kolvo_strok =$kolvo_strok + intval($long_str/$max_long_string);
  }
  $pdf->Cell(20 , $h_cell*$kolvo_strok , "",0,0,'C');
  $pdf->SetTextColor(5,99,193); // синий цвет
  $pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
  $pdf->Cell(30 , $h_cell*$kolvo_strok , MakeUtf8Font('Условия отгрузки:'),0,0,'R');
  $pdf->SetTextColor(0,0,0); // черный цвет
  $pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальнй текст 
  $pdf->multiCell(110 ,$h_cell, MakeUtf8Font("Примерная стоимость доставки до объекта Заказчика ($adress)"),'0','L');
$real_Y_position = $pdf->GetY();
  $pdf->setXY(170,$real_Y_position-$h_cell*$kolvo_strok);
  $pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
  $pdf->Cell(30 ,$h_cell*$kolvo_strok, MakeUtf8Font(number_format($DostCost, 2, ',', ' ')),0,1,'C');


$pdf->Cell(190 ,8, MakeUtf8Font(''),'0',1,'C'); // Пустая строкв
$real_Y_position = $pdf->GetY();
$pdf->Cell(80 ,8, MakeUtf8Font('Генеральный директор ООО "ТД "АНМАКС"'),'0',0,'C');
$pdf->Cell(60 ,8, MakeUtf8Font(''),'0',0,'C');
$pdf->Cell(50 ,8, MakeUtf8Font('С.И. Зелизко'),'0',0,'C');

/*
* ***************************   ПЕЧАТЬ
*/


  $pdf->image('../new_kp_info/stamp.png',103,$real_Y_position-30,65);

/*
* Данные исполнителя / ответственного
*/

$contact_font_size = 7;
  $pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальнй текст 
  
  $pdf->setXY(170,$real_Y_position+10);
  $pdf->Cell(190 ,6, MakeUtf8Font(''),'0',1,'C'); // Пустая строкв
  $h_cell=4;
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font('Исполнитель:'),'0',1,'L');
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font($user_responsible_arr[0]['ful_name']),'0',1,'L');
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font($user_responsible_arr[0]['user_phone']),'0',1,'L');
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font($user_responsible_arr[0]['user_mobile_phone']),'0',1,'L');
  $temp = $user_responsible_arr[0]['user_email'];
  $temp_2 = "mailto:".$user_responsible_arr[0]['user_email'];
  $pdf->SetTextColor(5,99,193); // синий цвет
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font($temp),'0',1,'L','',  $temp_2);
  $pdf->Cell(25 ,$h_cell, MakeUtf8Font("www.anmaks.ru"),'0',1,'L','',  "https://www.anmaks.ru/");

  




// $pdf->Output();

// die('PDFFFFF');
//output the result
$pdf->Output("../EXCEL/".$KpFileName.".pdf", 'F');
//теперь добавляем синее подчеркивание для ссылки

}
function MakeUtf8Font($string) {
  $string = iconv('utf-8', 'windows-1251', $string);
  return $string;
}

function make_string_name_array ($name, $max_long_string) {
  // $max_long_string = 115;
  $arr_string = explode(' ', $name);
  $our_str = "";
  foreach ($arr_string as $string) {
    if ((strlen($our_str) + strlen($string))<= $max_long_string) {
      $our_str = $our_str." ".$string;
      // echo $our_str."=".$string."<br>";
    } else {
      $our_array_string[] = $our_str;
      $our_str ='';
      $our_str = $our_str." ".$string;
    }
  }
  $our_array_string[] = $our_str;
return $our_array_string;
 
}