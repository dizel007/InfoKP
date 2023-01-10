<?php
require_once '../PHPExcel-1.8/Classes/PHPExcel.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
require_once '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
require_once '../connect_db.php';

(isset($_GET['words']))?$words=trim($_GET['words']):$words='';
(isset($_GET['kolvo_find']))?$kolvo_find=$_GET['kolvo_find']:$kolvo_find='';
(isset($_GET['FinishContract']))?$FinishContract=1:$FinishContract=0;
(isset($_GET['dateStart']))?$dateStart=$_GET['dateStart']:$dateStart='';
(isset($_GET['dateStop']))?$dateStop=$_GET['dateStop']:$dateStop=date('Y-m-d');
(@$_GET['dateStop'] == '')?$dateStop=date('Y-m-d'):$r=1;


echo <<<HTML
<form action="index.php" method="get">
<label for="words">слова для поиска</label>
<input required type="text" name="words" value="$words">

<label for="kolvo_find">количество</label>
<input type="number" name="kolvo_find" value="$kolvo_find">

<label for="FinishContract">Искать в Закрытых КП</label>
<input type="checkbox" name="FinishContract">

<br><br>
<label for="dateStart">Дата начала</label>
<input type="date" name="dateStart">

<label for="dateStop">Дата окончания</label>
<input type="date" name="dateStop">
<br>

<input type="submit"  value="Send">
</form>
HTML;
($words=='')?die('Введите слова для поиска'):$words=$words;

// echo $dateStart;
// echo $dateStop;
// echo $FinishContract;
$where = "";

  if ($FinishContract  == '0') { // если ищем только в открытых КП
  $where = "AND `FinishContract` =:FinishContract";
  $stmt = $pdo->prepare("SELECT id, KpNumber, KpData, LinkKp,	adress  FROM reestrkp 
  WHERE `KpData` >=:dateStart AND `KpData` <=:dateStop $where");

   $stmt->execute(array(':dateStart' => $dateStart,
                         ':dateStop' => $dateStop,
                   ':FinishContract' => $FinishContract,
    ));

  } else { // если ищем по всме КП и закрытым тоже
    $stmt = $pdo->prepare("SELECT id, KpNumber, KpData, LinkKp,	adress  FROM reestrkp 
    WHERE `KpData` >=:dateStart AND `KpData` <=:dateStop");
  
     $stmt->execute(array(':dateStart' => $dateStart,
                           ':dateStop' => $dateStop,
      
      ));

      
  }
  

  // $stmt = $pdo->prepare("SELECT id, KpNumber, KpData, LinkKp  FROM reestrkp 
  //             WHERE `KpData` >=:dateStart AND `KpData` <=:dateStop AND `FinishContract` =:FinishContract",
  //             );

  
    
  $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // var_dump($arr);
  // die('ssssssssssssssss');
  // 'closeContract' => $closeContract,
foreach ($arr as $value ){
  $LinkKp = "../".$value['LinkKp'];
if ($LinkKp == "../excel/") {
  $LinkKp ='';
}
  if (file_exists($LinkKp)) {
      $xls = PHPExcel_IOFactory::load($LinkKp );
      $xls->setActiveSheetIndex(0);
      $sheet = $xls->getActiveSheet();
      $i=19;
      $stop = 0;
      $priz_name_kp=0;

while ($stop <> 1 ) {
  $stop = 0;

  $name = $sheet->getCellByColumnAndRow(3, $i)->getValue();

  if ($name == '') {
    $stop =1;
    break;
  }
  $name = "*".$name;// 
  $ed_izm = $sheet->getCellByColumnAndRow(8, $i)->getValue();
  $kolvo = $sheet->getCellByColumnAndRow(10, $i)->getValue();
  $kolvo = str_replace(' ','',$kolvo);
  $kolvo = str_replace(',','.',$kolvo);

  // делаем проверку на вхождение нащих слов в наименование товара
  if ($words != '') {
    if (find_words_in_nomenclature($words, $name, $kolvo_find, $kolvo))  {
      $LinkKp = $value['LinkKp'];
        $priz_name_kp=1;
        

      $prods[$value['id']][] = 
        array(
          'name'  => $name,
          'kol' => $kolvo,
          'ed_izm' => $ed_izm,
          'LinkKp' => $value['LinkKp'],
        );
        $prods_all[$value['id']][] = 
        array(
          'name'  => $name,
          'kol' => $kolvo,
          'ed_izm' => $ed_izm,
          'LinkKp' => $value['LinkKp'],
          'KpNumber' => $value['KpNumber'],
          'KpData' => $value['KpData'],
          'adress' => $value['adress'],
        );

        
    }




  }

$i++;
}
if ($priz_name_kp) {
  $KpNumber = "<b>КП№".$value['KpNumber']." от ".$value['KpData']." (".$value['adress'].")</b>";
  $link_to_kp_by_id="?transition=10&id=".$value['id'];
  $open_kp_by_id="open_excel/parce_excel_kp.php?LinkKp=".$LinkKp;

  echo <<<HTML
    <!--<a href="../$LinkKp"><b>$KpNumber</b></a> -->
    <a href="../$open_kp_by_id" target="_blank"><b>$KpNumber</b></a>
    <a href="../$link_to_kp_by_id"><b>**Перейти к КП*</b></a>
    <a href="../$LinkKp"><b>*Скачать КП**</b></a>


HTML;
echo "<table>";
foreach ($prods as $value1) {
    foreach ($value1 as $item) {
      $name_temp= $item["name"];
      $ed_izm_temp= $item["ed_izm"];
      $kolvo_temp= $item["kol"];

echo <<<HTML
    
    <tr>
        <td>$name_temp<td>
        <td>$ed_izm_temp<td>
        <td>$kolvo_temp<td>

    </tr>
    
HTML;

    }
  }
  echo "</table><br>";
}
  unset($prods);

} 
};


 




function mod_words($words) { // функция приводит строку к стандартному виду
  $temp_words = mb_strtolower($words);
  $temp_words = str_replace(' ', '', $temp_words);
  $temp_words = str_replace('–', '-', $temp_words);
  $temp_words = str_replace(array("\n","\r"), '', $temp_words);
  return $temp_words;
}


function find_words_in_nomenclature($words, $name, $kolvo_find, $kolvo) { // функция ищет вхождение всех слов поиска в строке наименования
$result = false;
$count_inputs=0; // сколько уникальных вхождений
$find_arr = explode(' ', $words); 
$arr_count = count($find_arr);
foreach ($find_arr as $item) {
  if (strpos(mod_words($name),mod_words($item))) {
    $count_inputs++;
  }
}
if ($count_inputs == $arr_count) {
  $result = true;
}
// проверяем соответствие количества товара, если оно забано
if (($kolvo_find <> 0) AND ($kolvo_find != $kolvo)) {
  $result = false;
}
  return $result;
}


echo "Количество найденных КП :".count(@$prods_all);

//   echo "<pre>";
//  print_r($prods_all);
//  echo "<pre>";