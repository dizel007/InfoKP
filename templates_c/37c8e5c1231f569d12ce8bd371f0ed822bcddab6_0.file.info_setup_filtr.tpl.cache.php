<?php
/* Smarty version 4.1.0, created on 2022-10-20 15:05:46
  from 'C:\xampp\htdocs\InfoKP\templates\info_setup_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6351399af0bda7_43362824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c8e5c1231f569d12ce8bd371f0ed822bcddab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\info_setup_filtr.tpl',
      1 => 1666166998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6351399af0bda7_43362824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '274916056351399af07f20_50176809';
?>
 

<div class = "filter_p">
ФИЛЬТР: <b><?php echo $_smarty_tpl->tpl_vars['kpCount']->value;?>
</b> КП:
<?php if ($_smarty_tpl->tpl_vars['get_nomerKP']->value <> '') {?>
<i>Номер КП :<b><?php echo $_smarty_tpl->tpl_vars['get_nomerKP']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_date_start']->value <> '') {?>
<i>Дата начала:<b><?php echo $_smarty_tpl->tpl_vars['get_date_start']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_date_end']->value <> '') {?>
<i>Дата окончания :<b><?php echo $_smarty_tpl->tpl_vars['get_date_end']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_inn']->value <> '') {?>
<i>ИНН :<b><?php echo $_smarty_tpl->tpl_vars['get_inn']->value;?>
</b></i>
<?php }
if (($_smarty_tpl->tpl_vars['get_responsible']->value <> '')) {?>
<i>ответственный :<b><?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_name_zakazchik']->value <> '') {?>
<i>Наименование Заказчика:<b><?php echo $_smarty_tpl->tpl_vars['get_name_zakazchik']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_adres_postavki']->value <> '') {?>
<i>Адрес поставки :<b><?php echo $_smarty_tpl->tpl_vars['get_adres_postavki']->value;?>
</b></i>
<?php }?>

</div><?php }
}