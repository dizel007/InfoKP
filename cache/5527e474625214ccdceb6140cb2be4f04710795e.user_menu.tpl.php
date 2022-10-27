<?php
/* Smarty version 4.1.0, created on 2022-10-27 16:11:29
  from 'C:\xampp\htdocs\InfoKP\templates\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635a838169f851_81593517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e127e545b5e26e212e7f3e064107a62dcd64d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\user_menu.tpl',
      1 => 1666608894,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_635a838169f851_81593517 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "user_menu">
  <div class = "menu_button">
   <a href="?transition=0"> РЕЕСТР КП </a>
  </div>

  <div class = "menu_button">
   <a href="?transition=1&user_login=zeld"> Создать КП </a>
  </div>
 
 <div class = "menu_button">
   <a href="?transition=2&user_login=zeld"> Создать объектное КП </a>
 </div>

   <div class = "menu_button">
   <a href="reports.php" target="_blank"> Аналитика </a>
  </div>

  <div class = "menu_button">
    Пользователь: Зелизко
  </div>

 
</div><?php }
}
