<?php
// https://habr.com/en/post/137664/
// инструкция по вставки через PDO

require_once ("../connect_db.php");
$back_transition=$_POST['back_transition'];
// Если задан ИНН то проверим его по БД, если добавляем по инн, то нужно будет его ввести в Базу
$InnCustomer = $_POST['InnCustomer'];
// Проверим, чтобы не было уже такого ИНН
$stmt = $pdo->prepare("SELECT * FROM inncompany WHERE inn = ?");
$stmt->execute([$InnCustomer]);
$TempInnComp = $stmt->fetchAll(PDO::FETCH_ASSOC);



// если ИНН существет, то уходим на создание КП
if ($TempInnComp[0]['inn'] == $InnCustomer) {
  
  header("Location: ../index.php?transition=$back_transition&&InnCustomer=".$InnCustomer);
  die('Компания с таким ИНН уже вуществует');
}

$KppCustomer = $_POST['KppCustomer'];
// ******************* делаем запрос, чтобы узнать есть ли у нас в БД этот ИНН ********
$NameCustomer_temp = $_POST['NameCustomer'];

$NameCustomer = str_replace('"', '«', $NameCustomer_temp, $count);


//  ********** делаем костыль чтобы убрать двойные ковычки из названий компаний ************
for ($i = 0; $i < mb_strlen($NameCustomer); $i++) {
    $char = mb_substr($NameCustomer, $i, 1);
  }
if ($char == '«') {
  $NameCustomer = substr($NameCustomer,0,-2);
  $NameCustomer .="»";
}
// *************************************************************************************************

// контактного лица
$ContactCustomer = $_POST['ContactCustomer'];

$TelCustomer = $_POST['TelCustomer'];
$EmailCustomer = $_POST['EmailCustomer'];
$adress = $_POST['Adress'];
$date_write = date('Y-m-d');
$CommentCustomer='';



// echo "<pre>";
// print_r($adress);
// echo "<br>";
// print_r($date_write);
// echo "<pre>";


// die('2222222');


// **************** вставляем каждый параметр  данных  *********************
$stmt  = $pdo->prepare("INSERT INTO `inncompany` 
                       (inn, kpp, name, telefon, email, adress, contactFace, comment, date_write)
                       VALUES (:inn, :kpp, :name, :telefon, :email, :adress, :contactFace, :comment, :date_write)");


$stmt ->bindParam(':inn', $InnCustomer);
$stmt ->bindParam(':kpp', $KppCustomer);
$stmt ->bindParam(':name', $NameCustomer);
$stmt ->bindParam(':telefon', $TelCustomer);
$stmt ->bindParam(':email', $EmailCustomer);
$stmt ->bindParam(':adress', $adress);
$stmt ->bindParam(':comment', $CommentCustomer);
$stmt ->bindParam(':contactFace', $ContactCustomer);
$stmt ->bindParam(':date_write', $date_write);

if ($stmt ->execute()) {
  $last_id = $pdo->lastInsertId(); // получаем id - введенной строки 
  // echo "Запись УДАЧНО добавлена successfully";
} else {
  // $stmp->errorInfo();
  echo "fff";
  $last_id = $pdo->lastInsertId(); // получаем id - введенной строки 
  die (" ** DIE ** Не получилось добавить данные о компании, INSERT новой компании по ИНН");
}

// Добавляем новый телефонв БД телефонов
$stmt  = $pdo->prepare("INSERT INTO `telephone` 
                       (inn, telephone, date_write)
                       VALUES (:inn, :telephone, :date_write)");
$stmt ->bindParam(':inn', $InnCustomer);
$stmt ->bindParam(':telephone', $TelCustomer);
$stmt ->bindParam(':date_write', $date_write);
if ($stmt ->execute()) {
    // echo "Запись УДАЧНО добавлена successfully";
} else {
  die (" ** DIE ** Не получилось добавить телефонный номер в БД");
}
// Добавляем новый EMAIL БД email
$stmt  = $pdo->prepare("INSERT INTO `email` 
                       (inn, email, date_write)
                       VALUES (:inn, :email, :date_write)");
$stmt ->bindParam(':inn', $InnCustomer);
$stmt ->bindParam(':email', $EmailCustomer);
$stmt ->bindParam(':date_write', $date_write);
if ($stmt ->execute()) {
    // echo "Запись УДАЧНО добавлена successfully";
} else {
  die (" ** DIE ** Не получилось добавить email в БД email");
}



// ******************* делаем перенаправление на создание нового КП ********
header("Location: ../index.php?transition=$back_transition&InnCustomer=".$InnCustomer);

die('Че то померли на инсерте нового  ИНН в БД');