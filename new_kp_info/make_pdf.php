<?php
/* 
*  ======================================= 
*  Author     : Zelizko Dmitriy 
*  License    : Protected 
*  Email      : 1dizel007@gmail.com 
*  ======================================= 
*/  


require_once '../PHPExcel-1.8/fpdf/fpdf.php';

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();

$pdf->image('../22.png',10,15,57);
//set font to arial, bold, 14pt
function MakeUtf8Font($string) {
  $string = iconv('utf-8', 'windows-1251', $string);
  return $string;
}

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
$pdf->Cell(130 ,9, MakeUtf8Font('№1357Е от 16.11.2022'),0,1,'C');

/* КОНТАКТЫ ЗАКАЗЧИКА */
$contact_font_size = 8;
$pdf->Cell(190 ,5,'',0,2); // отступ сверху 1 строка

// Заказчик 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(50 ,9, MakeUtf8Font('Заказчик'),'TB',0,'C');

$pdf->SetFont('TimesNRCyrMT','',$contact_font_size);
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->MultiCell(80 ,9, MakeUtf8Font('ООО «Дон-Строй»ООО «Дон-Строй»ООО «Дон-Строй»'),'TB','C',0);
// Контактное лицо 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,6,'',0,0); // отступ
$pdf->Cell(50 ,6, MakeUtf8Font('Контактное лицо'),'B',0,'C');
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(80 ,6, MakeUtf8Font('отдел снабжения'),'B',1,'C');
// Телефон 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size);
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,9,'',0,0); // отступ
$pdf->Cell(50 ,9, MakeUtf8Font('Заказчик'),'B',0,'C');
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size);
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->MultiCell(80 ,4.5, MakeUtf8Font("7 (473) 622-20-08\n7 (950) 766-80-52"),'B','C',0);
// email 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,6,'',0,0); // отступ
$pdf->Cell(50 ,6, MakeUtf8Font('e-mail'),'B',0,'C');
$pdf->SetFont('','U'); // подчеркивание
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
$pdf->Cell(80 ,6, MakeUtf8Font('don-stroy_36@mail.ru'),'B',1,'C','', "mailto:don-stroy_36@mail.ru");
// Номер извещения на ЭТП 
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$pdf->SetTextColor(5,99,193); // синий цвет
$pdf->Cell(60 ,6,'',0,0); // отступ
$pdf->Cell(50 ,6, MakeUtf8Font('Номер извещения на ЭТП'),'B',0,'C');
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(80 ,6, MakeUtf8Font('0131300045222000167'),'B',1,'C');

//  Добрый день!
$pdf->Cell(190 ,5,'',0,2); // отступ сверху 1 строка
$pdf->SetFont('TimesNRCyrMT-Bold','',11); // жирный текст 11
$pdf->SetTextColor(0,0,0); // черный цвет
$pdf->Cell(190 ,7, MakeUtf8Font('Добрый день!'),0,1,'C');

// текст о предложении
$contact_font_size = 9;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст 
$pdf->MultiCell(190 ,4.5, MakeUtf8Font('Предлагаем рассмотреть приобретение систем водоотвода, для гос.закупки №0131300045222000167 "Строительство объекта: "Пристройка спортивного зала к МБОУ Бобровская СОШ №1 в г. Бобров Бобровского района Воронежской области (подготовка территории,наружные сети,благоустройство территории,технологическое оборудование)"", победителем которой вы являетесь:'), 0,'C',0);
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

// ***********************  Таблица с номенклатурой
$contact_font_size = 8;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // нормальный текст
$i=1;
$max_long_string = 110;
foreach ($products as $value) {
  $h_cell = 4; // нормальная высота строки
  $long_str  = strlen ($value['name']);
  $kolvo_strok=1;
 
  if ($long_str > $max_long_string) {  // если строка превышает заданную длину, нужно расширить строку
     $kolvo_strok =$kolvo_strok + intval($long_str/$max_long_string);
    }

$pdf->Cell(10 ,$h_cell*$kolvo_strok, $i,'B',0,'C');
$pdf->multiCell(110 ,$h_cell, MakeUtf8Font($value['name']),'B','L');
$real_Y_position = $pdf->GetY();
$pdf->setXY(130,$real_Y_position-$h_cell*$kolvo_strok);
$pdf->Cell(15 ,$h_cell*$kolvo_strok, MakeUtf8Font($value['ed_izm']),'B',0,'C');
$pdf->Cell(15 ,$h_cell*$kolvo_strok, MakeUtf8Font($value['kol']),'B',0,'C');
$pdf->Cell(17 ,$h_cell*$kolvo_strok, MakeUtf8Font(number_format($value['price'], 2, ',', ' ')),'B',0,'C');
$summa_strolki = number_format($value['kol']*$value['price'], 2, ',', ' ');

$pdf->Cell(23 ,$h_cell*$kolvo_strok, MakeUtf8Font($summa_strolki),'B',1,'C');
$i++;
}
// *********** ВСЕГО ******* ИТОГО
$contact_font_size = 9;
$pdf->SetFont('TimesNRCyrMT-Bold','',$contact_font_size); // жирный текст 
$h_cell = 5;
$pdf->Cell(134 , $h_cell , '',0,0,'C');
$pdf->Cell(33 , $h_cell , MakeUtf8Font('Итого:'),0,0,'R');
$pdf->Cell(23 ,$h_cell*$kolvo_strok, MakeUtf8Font(number_format($KpSum, 2, ',', ' ')),0,1,'C');
$pdf->Cell(134 , $h_cell , '',0,0,'C');
$pdf->Cell(33 , $h_cell , MakeUtf8Font('В т.ч. НДС (20%):'),0,0,'R');
$nds20 = number_format(($KpSum / 100) * 20, 2, ',', ' ');
$pdf->Cell(23 ,$h_cell*$kolvo_strok, MakeUtf8Font($nds20),0,1,'C');


$contact_font_size = 8;
$pdf->SetFont('TimesNRCyrMT','',$contact_font_size); // жирный текст 
$pdf->Cell(190 ,5,MakeUtf8Font('Цены указаны в рублях с учетом НДС.'),0,2); // отступ сверху 1 строка


$pdf->Output();
//теперь добавляем синее подчеркивание для ссылки


