<?php
require_once "../connect_db.php";
// Обновляем данные в талиблице. $typeQuery - выбоо столбца, который будем редактировать. $id -  ИД строки которую будем редактировать
$id = $_POST['id'];
$InnCustomer = $_POST['InnCustomer'];

$stmt = $pdo->prepare("SELECT * FROM inncompany WHERE inn = $InnCustomer");
$stmt->execute([]);
$email_db = $stmt->fetchAll(PDO::FETCH_ASSOC);


$contactFace=trim($_POST['contactFace'], $character_mask = " \t\n\r\0\x0B");  // убипаем все лишние пробелы и переносы
$comment=trim($_POST['comment'], $character_mask = " \t\n\r\0\x0B");  // убипаем все лишние пробелы и переносы
$contactFace=htmlspecialchars($contactFace);
$comment=htmlspecialchars($comment);


$data_arr = [
  'contactFace'=> $contactFace,
  'comment'=> $comment,
  'inn' => $InnCustomer,
];

$sql = "UPDATE inncompany SET contactFace=:contactFace,
                              comment=:comment
                        WHERE inn=:inn";
$stmt= $pdo->prepare($sql);
$stmt->execute($data_arr);


// $sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
// $user = $mysqli->query($sql);
// while ($row = $user -> fetch_assoc()) {$user_login = $row["user_login"];}

   

//       $db_comment="";      if ($my_inn_arr[0]['contactFace'] != $contactFace) { $db_comment.="конт.лицо :".$contactFace.";";}
//       if ($my_inn_arr[0]['comment'] != $comment)    { $db_comment.=" комент :".$comment.";";}
       
// $id_item = $inn;
// $what_change = 2; 
// $comment_change = $db_comment; 
// $author = $user_login;
//    require "update_reports.php";

header ("Location: ../?transition=10&id=".$id."&InnCustomer=".$InnCustomer);  // перенаправление на нужную страницу
exit();    // прерываем работу скрипта, чтобы забыл о прошлом

?>
