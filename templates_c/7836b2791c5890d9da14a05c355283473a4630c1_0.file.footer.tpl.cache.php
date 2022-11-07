<?php
/* Smarty version 4.1.0, created on 2022-11-07 15:59:34
  from 'C:\xampp\htdocs\InfoKP\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6369013696ecb6_16354778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7836b2791c5890d9da14a05c355283473a4630c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\footer.tpl',
      1 => 1666334975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_include_modal.tpl' => 1,
    'file:modal/modal_change_zakup.tpl' => 1,
  ),
),false)) {
function content_6369013696ecb6_16354778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6446290566369013696ae33_08532895';
?>

<?php $_smarty_tpl->_subTemplateRender("file:_include_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для правки данных о компании -->



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
