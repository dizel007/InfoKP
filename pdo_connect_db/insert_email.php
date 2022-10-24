<?php

require_once "../connect_db.php";
require_once "../functions/email_make.php";

$id = $_GET["id"];
$InnCustomer = $_GET["InnCustomer"];
$new_email=htmlspecialchars($_GET["new_email"]);
$actual = $_GET["actual_email"];
$commentEmail=htmlspecialchars($_GET["commentEmail"]);
$today = date("Y-m-d H:i:s"); 

$new_email_arr=array( "InnCustomer" => $InnCustomer,
                          "new_email" => $new_email,
                          "actual" => $actual,
                          "commentPhone" => $commentEmail,
                          "today" => $today,
                          
                        );
InsertOurEmailInDB ($pdo, $new_email_arr);


  // $sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
  // $user = $mysqli->query($sql);
  // while ($row = $user -> fetch_assoc()) 
  // {
  //        $user_login = $row["user_login"];
  //    }
  // $now_date = date('Y-m-d');
   
  // $db_comment="Нов.почта. :$new_email :";
  // $db_comment.=" коммент :".$commentEmail.";";
  // $db_comment.=" актуал :".$actual_email.";";
    
  //    $date_change = $now_date;
  //    $id_item = $inn;
  //    $what_change = 6; 
  //    $comment_change = $db_comment; 
  //    $author = $user_login;
     //    require "update_reports.php";
       
    //  $sql = "INSERT INTO `reports`(`id`, `date_change`, `id_item`, `what_change`, `comment_change`, `author`)
    //    VALUES ('', '$date_change', '$id_item', '$what_change', '$comment_change', '$author')";
    //  $query = $mysqli->query($sql);
    //  if (!$query){
    //   die("Соединение не удалось: (Добавление в реестр изменений) ");
    //  }

header ("Location: ..?transition=10&id=".$id."&InnCustomer=".$InnCustomer);
exit();    // прерываем работу скрипта, чтобы забыл о прошлом


?>
