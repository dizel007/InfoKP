<?php

require_once "../connect_db.php";
 
  $id_email = $_POST["id_email_cor"];
  $id = $_POST["id"];
  $InnCustomer = $_POST['InnCustomer'];
  $actual = $_POST["actual_email"];
  $commentEmail=htmlspecialchars($_POST["commentEmail"]);
  $today = date("Y-m-d H:i:s");       


  $data_arr = [
    'comment'=> $commentEmail,
    'actual'=> $actual,
    'date_write'=> $today,
    'id' => $id_email,
  ];
  
$sql = "UPDATE email SET  comment=:comment,
                              actual=:actual,
                              date_write=:date_write
                        WHERE id=:id";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($data_arr);



// $sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
// //$sql = "SELECT * FROM reestrkp where InnCustomer = '$inn';
// $user = $mysqli->query($sql);

// while ($row = $user -> fetch_assoc()) 
// {
//        $user_login = $row["user_login"];
//    }


// $now_date = date('Y-m-d');
   
// $db_comment="Изм.почты. :$real_email :";
// $db_comment.=" коммент :".$commentEmail.";";
// $db_comment.=" актуал :".$actual.";";
  
   
//    $id_item = $inn;
//    $what_change = 5; 
//    $comment_change = $db_comment; 
//    $author = $user_login;
//    require "update_reports.php";
     
  //  $sql = "INSERT INTO `reports`(`id`, `date_change`, `id_item`, `what_change`, `comment_change`, `author`)
  //    VALUES ('', '$date_change', '$id_item', '$what_change', '$comment_change', '$author')";
  //  $query = $mysqli->query($sql);
  //  if (!$query){
  //   die("Соединение не удалось: (Добавление в реестр изменений) ");
  //  }


// header ("Location: ../index.php?id=".$id);  // перенаправление на нужную страницу
header ("Location: ..?transition=10&id=".$id."&InnCustomer=".$InnCustomer);
exit();    // прерываем работу скрипта, чтобы забыл о прошлом


?>
