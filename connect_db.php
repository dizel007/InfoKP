<?php
   

// ************************************** PDO ***********************************
      $host="localhost";//имя  сервера
      $user="root";//имя пользователя
      $password="";//пароль
      $db="kpanmaks";//имя  базы данных
 
      try {  
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
        $pdo->exec('SET NAMES utf8');
        } catch (PDOException $e) {
          print "Has errors: " . $e->getMessage();  die();
        }


?>
