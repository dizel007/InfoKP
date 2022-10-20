<?php

require_once "../connect_db.php";
require_once "../functions/make_arr_from_obj.php";
// Обновляем данные в талиблице. $typeQuery - выбоо столбца, который будем редактировать. $id -  ИД строки которую будем редактировать

 
  $id_phone = $_POST["id_phone_cor"];

  // достаем данные о записи из таблицы
$sql = "SELECT * FROM `telephone` where `id` = '$id_phone'";
$fQuery = $mysqli->query($sql);
$my_inn_arr = MakeArrayFromObjTelephone($fQuery) ;
$inn = $my_inn_arr[0]["inn"];
$tel_phone = $my_inn_arr[0]["telephone"];

  $id = $_POST["id"];
  
  $whatsapp = $_POST["whatsapp"];

  $actual = $_POST["actual_phone"];
  $commentPhone = $_POST["commentPhone"];
  $commentPhone=htmlspecialchars($commentPhone);
  $contactName = $_POST["contactName"];
  $contactName=htmlspecialchars($contactName);
  $today = date("Y-m-d H:i:s");       
  
$sql = "UPDATE `telephone` SET 
      `comment`= '$commentPhone' ,
      `whatsapp`= '$whatsapp' ,
  
      `name`= '$contactName' ,
      `actual`= '$actual' ,
      `date_write` = '$today' 

      WHERE `id`='$id_phone'";

$query = $mysqli->query($sql);

if (!$query){
die("Соединение не удалось: ");
};


// die ($sql);



$sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
$user = $mysqli->query($sql);
while ($row = $user -> fetch_assoc()) 
{
       $user_login = $row["user_login"];
   }

  
$db_comment="Изм. тел. :$tel_phone :";
$db_comment.="контакт :".$contactName.";";
$db_comment.=" коммент :".$commentPhone.";";
$db_comment.=" актуал :".$actual.";";
     

$id_item = $inn;
$what_change = 3; 
$comment_change = $db_comment; 
$author = $user_login;
  
require "update_reports.php";
        
      // $sql = "INSERT INTO `reports`(`id`, `date_change`, `id_item`, `what_change`, `comment_change`, `author`)
      //   VALUES ('', '$date_change', '$id_item', '$what_change', '$comment_change', '$author')";
      // $query = $mysqli->query($sql);
      // if (!$query){
      //  die("Соединение не удалось: (Добавление в реестр изменений) ");
      // }    
      
      

      
// header ("Location: ../index.php?id=".$id);  // перенаправление на нужную страницу
header ("Location: ../select_transiton.php?id=".$id."&inn=".$inn);
exit();    // прерываем работу скрипта, чтобы забыл о прошлом


?>
