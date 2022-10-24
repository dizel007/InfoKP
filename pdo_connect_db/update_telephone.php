<?php

require_once "../connect_db.php";

  $id_phone = $_POST["id_phone_cor"];
  $id = $_POST["id"];
  $InnCustomer = $_POST['InnCustomer'];
  $whatsapp = $_POST["whatsapp"];
  $actual = $_POST["actual_phone"];
  $commentPhone=htmlspecialchars($_POST["commentPhone"]);
  $contactName=htmlspecialchars($_POST["contactName"]);
  $today = date("Y-m-d H:i:s");       

  

 
  $data_arr = [
    'comment'=> $commentPhone,
    'whatsapp'=> $whatsapp,
    'name'=> $contactName,
    'actual'=> $actual,
    'date_write'=> $today,
    'id' => $id_phone,
  ];
  

$sql = "UPDATE telephone SET  comment=:comment,
                              whatsapp=:whatsapp,
                              name=:name,
                              actual=:actual,
                              date_write=:date_write
                        WHERE id=:id";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($data_arr);

    // $info = $stmt->errorInfo();
    //  print_r($info);
    
// $sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
// $user = $mysqli->query($sql);
// while ($row = $user -> fetch_assoc()) 
// {
//        $user_login = $row["user_login"];
//    }

  
// $db_comment="Изм. тел. :$tel_phone :";
// $db_comment.="контакт :".$contactName.";";
// $db_comment.=" коммент :".$commentPhone.";";
// $db_comment.=" актуал :".$actual.";";
     

// $id_item = $inn;
// $what_change = 3; 
// $comment_change = $db_comment; 
// $author = $user_login;
  
// require "update_reports.php";
        

      

header ("Location: ../index.php?transition=10&id=".$id."&InnCustomer=".$InnCustomer);
exit();    // прерываем работу скрипта, чтобы забыл о прошлом


?>
