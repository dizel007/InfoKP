<?php
/* Smarty version 4.1.0, created on 2022-10-24 16:02:27
  from 'C:\xampp\htdocs\InfoKP\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63568ce3142a90_47380055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba03dffa35f7873a0e7e7c88c161c78dbd4bc92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\header.tpl',
      1 => 1666612736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63568ce3142a90_47380055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14227727963568ce313ec12_72165306';
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
</title>
    
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap-grid.css">
    <link rel = "stylesheet" href = "css/style.css">
    
    
    
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <!-- скрипт по выбору типа Фильтра в шапке  -->
    <?php echo '<script'; ?>
 type="text/javascript" src="js/shapka_menu.js"><?php echo '</script'; ?>
>
    <!-- скрипт для телефоной маски -->
     </head>

<body bgcolor="#ffffff">
<?php }
}
