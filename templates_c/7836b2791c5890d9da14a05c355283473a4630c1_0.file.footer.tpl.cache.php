<?php
/* Smarty version 4.1.0, created on 2022-10-14 14:32:07
  from 'C:\xampp\htdocs\InfoKP\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634948b7a24918_70464032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7836b2791c5890d9da14a05c355283473a4630c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\footer.tpl',
      1 => 1664879491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal/modal_change_zakup.tpl' => 1,
  ),
),false)) {
function content_634948b7a24918_70464032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1056029998634948b7a1cc18_85653868';
?>
 <!-- модальные окна для правки по ИНН  -->

 <!-- модальные окна для вставки телефонов -->

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_change_zakup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для изменения инорфмаци d КП -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/ajax_query_comment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/modal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/phone_mask.js"><?php echo '</script'; ?>
>

</body>

</html>


<?php }
}
