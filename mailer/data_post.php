<?php
// Отправка с почты Зел
if ($user_mail == "zeld") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'send@anmaks.online';                 // Наш логин
  $mail->Password = '!QWEyww@cP8TDf88Kr6';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('send@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
// Отправка с почты Гуц
if ($user_mail == "guts") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'a.guts@anmaks.online';                 // Наш логин
  $mail->Password = 'k3CdEnz9xHcUHAU@@';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('a.guts@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
// Отправка с почты Горяч
if ($user_mail == "gor") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'ag@anmaks.online';                 // Наш логин
  $mail->Password = 'yFzXd9TXjAKAciE';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('ag@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
// Отправка с почты Штыб
if ($user_mail == "sti") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'sti@anmaks.online';                 // Наш логин
  $mail->Password = 'XVa39Xm3vYxieNd';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('sti@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
// Отправка с почты Манд
// if ($user_mail == "man") {
//   $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
//   $mail->SMTPAuth = true;                               // Enable SMTP authentication
//   $mail->Username = 'am@anmaks.online';                 // Наш логин
//   $mail->Password = 'FsWRKKg7eEzfurH';                 // Наш пароль от ящика
//   // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//   $mail->Port = 25; 
//   $mail->setFrom('am@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
// }
// Отправка с почты Лобов
if ($user_mail == "lobov") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'gl@anmaks.online';                 // Наш логин
  $mail->Password = 'Ps4qXUwFAeRLE3M';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('gl@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
// Отправка с почты Кулиев
if ($user_mail == "kul") {
  $mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'r.kuliev@anmaks.online';                 // Наш логин
  $mail->Password = 'REoPJoAY9reVaqr';                 // Наш пароль от ящика
  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25; 
  $mail->setFrom('r.kuliev@anmaks.online', 'Торговый дом АНМАКС');   // От кого письмо 
}
?>
