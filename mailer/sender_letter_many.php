<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
require_once("modul/get_data.php"); // Заполняем наши переменные
require_once("../connect_db.php"); // Заполняем наши переменные
require_once("../pdo_connect_db/select_functions.php"); // Подлючачем функции для работы с БД



$Files_count = 0;
$i=0;

$active_user = GetUserByUser_login($pdo,$user_mail);

// Если у нас НЕ БЫЛ подгружен файл то загружаем файлы на сервер и добавим дальше их в письмо
if ($_FILES['upload_file']['name'][0] <> "") {
        for ($i=0; $i < count($_FILES['upload_file']['name']); $i++ ){
        $uploadfile = "../EXCEL/" . basename($_FILES['upload_file']['name'][$i]);
        $file_name = basename($_FILES['upload_file']['name'][$i]);
        $link_pppdf[$i] = "../EXCEL/". basename($_FILES['upload_file']['name'][$i]);

            if (move_uploaded_file($_FILES['upload_file']['tmp_name'][$i], $uploadfile)) {
                // echo "Файл корректен и был успешно загружен.\n";
                $Files_count++;
                if ($Files_count == count($_FILES['upload_file']['name'])) {
                    //   header("Location: ../index.php?fullload=777"); exit();
                    } 
                } else {
                echo '<pre>';
                    echo "Некоторая отладочная информация:\n";
                    print_r($_FILES);
                echo "</pre>";
              
            }

        }
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();


try {

$mail->CharSet = 'utf-8';
// $mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP(); 
$mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $active_user[0]['user_online_email'];                 // Наш логин
$mail->Password = $active_user[0]['pass_online'];                 // Наш пароль от ящика
$mail->Port = 25; 
$mail->setFrom($active_user[0]['user_online_email'], 'Торговый дом АНМАКС');   // От кого письмо 


$mail->addAddress($email_from_kp);     // Add a recipient

if ($_FILES['upload_file']['name'][0] <> "") { 
        for ($i=0; $i < count($link_pppdf); $i++) {
        $mail->addAttachment($link_pppdf[$i]);         // Add attachments
        }
    } else { // если файл уже был на сервере
        if (isset($link_pdf)) {$mail->addAttachment("../".$link_pdf);}
    }
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject_theme; // тема письма
$mail->Body    = $body_post;


    if ($mail->send()) 
        {
            $result = "НОРМА";
            // echo "СООБЩЕНИЕ ОТПРАВЛЕНО на адрес : ". $email_from_kp;
            $status ="OK";
            $id_item = $id;
            $what_change = 7;  // 7 - значит отправка почты
            $comment_change = "Отправлено сообщение с сайта на адрес : ". $email_from_kp; 
            $author = $user_mail;
              
            require "../pdo_connect_db/insert_reports.php"; 
            require "../pdo_connect_db/update_email_count_in_reestr.php";
            header('Location: ../index.php?transition=24&id='.$id);


        } else {
            $result = "ОШИБКА!!!!";
            echo "ОШИБКА ОТПРАВКИ";
            $status ="$mail->ErrorInfo";

            $id_item = $id;
            $what_change = 7;  // 7 - значит отправка почты
            $comment_change = "ОШИБКА отправки на адрес : ". $email_from_kp; 
            $author = $user_mail;
              
            require "../pdo_connect_db/insert_reports.php";
        }
  

    
  
        // require_once ("modul/mail_logger.php"); // логирование отправки





}
 catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
echo json_encode(["result" => $result, "status" => $status]);

?>