<?php
/* Smarty version 4.1.0, created on 2022-11-07 15:59:34
  from 'C:\xampp\htdocs\InfoKP\templates\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_636901368037e8_89664078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e127e545b5e26e212e7f3e064107a62dcd64d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\user_menu.tpl',
      1 => 1667464089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636901368037e8_89664078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1698469916636901367d0b54_23145447';
?>


<div class="user_menu">
  <nav>
    <ul class="menuItems">
      <li>
        <a href="?transition=0" data-item='РЕЕСТР КП' >РЕЕСТР КП</a>
      </li>
      <li>
        <a href="?transition=1&user_login=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
" data-item='Создать КП' >Создать КП</a>
      </li>
      <li>
        <a href="?transition=2&user_login=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
" data-item='Создать объектное КП'>Создать объектное КП</a>
      </li>
      <li>
        <a href="?transition=13&user_login=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
" target="_blank">Аналитика</a>
      </li>
      <li>
        <a href="#">Пользователь: <?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_name'];?>
</a>
      </li>
    </ul>
  </nav>

</div>
<?php }
}
