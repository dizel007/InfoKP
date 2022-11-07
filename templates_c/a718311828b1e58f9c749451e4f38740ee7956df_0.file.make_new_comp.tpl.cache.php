<?php
/* Smarty version 4.1.0, created on 2022-11-07 10:46:44
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368b7e45b3561_21585581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a718311828b1e58f9c749451e4f38740ee7956df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\make_new_comp.tpl',
      1 => 1666609927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6368b7e45b3561_21585581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5563066996368b7e45ab861_38053501';
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
  


<?php ob_start();
echo $_smarty_tpl->tpl_vars['input_inn']->value;
$_prefixVariable1 = ob_get_clean();
if ((isset($_prefixVariable1))) {?>
     <section class="block">
    <p><strong>Введите наименование компании или ИНН</strong></p>
    <input id="party" name="party" type="text" value="<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
">
    </div>  
  </section> 
<?php } else { ?> 
     <section class="block">
    <p><strong>Введите наименование компании или ИНН</strong></p>
    <input id="party" name="party" type="text" placeholder="Введите название, ИНН, ОГРН или адрес организации">
    </div>  
  </section>  
<?php }?>

<br><br><br>

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_comp_in_bd.php" method="post">


  
<div class="block green_bgc">  
 <p class="pad5px width15 zhir"> ИНН Заказчика :
    <input required id="inn" type="number" name="InnCustomer" value="">  
</p>
 <p class="pad5px width15 zhir"> КПП Заказчика :
    <input required id="kpp" type="number" name="KppCustomer" value="">  
</p>



  

 <p class="pad5px width15 zhir">Краткое наименование : <input required id="name_short" type="text" name="NameCustomer" value ="" size="70"></p>

  
<p class="pad5px width15 zhir">Телефон Заказчика : <input name="TelCustomer" size="70" data-phone-pattern></p>
        
        


  
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Адрес Заказчика   : <input id="address" type="text" name="Adress" value ="" size="70"></p>


<input type="hidden" name="back_transition" value="<?php echo $_smarty_tpl->tpl_vars['back_transition']->value;?>
"> 

  
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>


  <div class="block"> 
      <a class="zagolovok" href="?transition=<?php echo $_smarty_tpl->tpl_vars['back_transition']->value;?>
&user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
">Вернуться в создание КП</a>
 </div>
 
 <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
>
      $("#party").suggestions({
          token: "ef0e1d4c5e875f38344a698c7bfae1f02078f7ed",
          type: "PARTY",
          /* Вызывается, когда пользователь выбирает одну из подсказок */
          onSelect: function(suggestion) {
              console.log(suggestion);
          }
      });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="dadata/dadate.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              
<?php }
}
