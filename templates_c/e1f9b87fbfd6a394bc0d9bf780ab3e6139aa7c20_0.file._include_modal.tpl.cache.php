<?php
/* Smarty version 4.1.0, created on 2022-10-20 15:05:47
  from 'C:\xampp\htdocs\InfoKP\templates\_include_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6351399b0757c8_58923050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f9b87fbfd6a394bc0d9bf780ab3e6139aa7c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\_include_modal.tpl',
      1 => 1664879449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal/modal_insert_phone.tpl' => 1,
    'file:modal/modal_update_phone.tpl' => 1,
    'file:modal/modal_insert_email.tpl' => 1,
    'file:modal/modal_update_email.tpl' => 1,
    'file:modal/modal_update_infocomp.tpl' => 1,
  ),
),false)) {
function content_6351399b0757c8_58923050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20022151566351399b071945_99355686';
$_smarty_tpl->_subTemplateRender("file:modal/modal_insert_phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для вставки телефонов -->
<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_update_phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для изменения телефонов -->
<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_insert_email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для вставки email -->
<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_update_email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для изменения email -->
<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_update_infocomp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для изменения инорфмаци о комапнии -->
<?php }
}