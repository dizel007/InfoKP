<?php
// проверяем зашел ли пользователь с паролем

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) // Проверяем зарегистрирован ли пользователь
{   
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_hash='" . $_COOKIE['hash'] . "' LIMIT 1");
    $stmt->execute([]);
    $userdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $userdata = call_user_func_array('array_merge', $userdata); // Уменьшаем уровень вложенности массива          
    
// проверяем введеный хэш пароля с тем, что храниться в БД
    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']))
    {
        header("Location: login.php"); exit();
    }
  } else {
    header("Location: login.php"); exit();
  }
