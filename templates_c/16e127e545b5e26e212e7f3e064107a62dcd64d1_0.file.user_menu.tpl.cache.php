<?php
/* Smarty version 4.1.0, created on 2022-10-13 16:32:48
  from 'C:\xampp\htdocs\InfoKP\templates\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63481380da76a5_49013455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e127e545b5e26e212e7f3e064107a62dcd64d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\user_menu.tpl',
      1 => 1665664728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63481380da76a5_49013455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '197371298863481380da3822_52647898';
?>
<div class = "user_menu">
  <div class = "menu_button">
   <a href="?transition=1&user_login=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
"> Создать КП </a>
  </div>

   <div class = "menu_button">
   <a href="reports.php" target="_blank"> Аналитика </a>
  </div>

  <div class = "menu_button">
    Пользователь: <?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_name'];?>

  </div>

 
</div><?php }
}
