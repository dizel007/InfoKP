<?php
/* Smarty version 4.1.0, created on 2022-10-20 15:05:46
  from 'C:\xampp\htdocs\InfoKP\templates\info_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6351399aed1418_06516308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e4fb399655b78fd3a27bcf8906ffbb3fccec51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\info_filtr.tpl',
      1 => 1666258009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6351399aed1418_06516308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21198270336351399aec5897_73352812';
?>
<div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="up_form_new">
   <div class ="up_form_new">

   
<input hidden type="text" name="transition" value="7">
   
        <div class="mobile_web">
            <select size="1" name="typeQuery" onchange="showhideBlocks(this.value)">
            <option disabled>Выберите параметр поиска</option>
            <option selected value="2">Номер КП</option>
            <option value="3">По Дате</option>
            <option value="4">ИНН</option>
            <option value="5">ID КП</option>
            <option value="6">Ответственный</option>
            <option value="7">Наименование Заказчика</option>
            <option value="8">Адрес поставки</option>
            </select>
        </div>

     
        <div id="g_nomerKP" class="mobile_web">
            <label for="param"> Введите номер КП : </label>
            <input type="text" id="get_nomerKP" name="get_nomerKP" value = "<?php echo $_smarty_tpl->tpl_vars['get_nomerKP']->value;?>
">
        
        </div>

                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "<?php echo $_smarty_tpl->tpl_vars['get_date_start']->value;?>
">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "<?php echo $_smarty_tpl->tpl_vars['get_date_end']->value;?>
">
                </div>
        
     
        <div id="g_inn" class="mobile_web">
            <label for="param">Введите ИНН : </label>
            <input type="text" id="get_inn" name="get_inn" value = "<?php echo $_smarty_tpl->tpl_vars['get_inn']->value;?>
">
        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param"> Введите ID КП : </label>
            <input type="text" id="get_id_kp" name="get_id_kp" value = "<?php echo $_smarty_tpl->tpl_vars['get_id_kp']->value;?>
">
        
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:150px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
 
         <option selected value="<?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
</option>
         <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count_users']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['count_users']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                           <?php if ($_smarty_tpl->tpl_vars['active_user_logins_arr_smarty']->value[$_smarty_tpl->tpl_vars['i']->value] == $_smarty_tpl->tpl_vars['get_responsible']->value) {?>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
             <?php }?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['active_user_names_arr_smarty']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['active_user_names_arr_smarty']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</option>
         <?php }
}
?>
         
     </select>
 </div>






     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param"> Наименование Заказчика : </label>
            <input type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "<?php echo $_smarty_tpl->tpl_vars['get_name_zakazchik']->value;?>
">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес поставки : </label>
            <input type="text" id="get_adres_postavki" name="get_adres_postavki" value = "<?php echo $_smarty_tpl->tpl_vars['get_adres_postavki']->value;?>
">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>
                    <?php if ($_smarty_tpl->tpl_vars['get_FinishContract']->value == 1) {?>            
                    <input type="checkbox" name="get_FinishContract" value="1" checked>
                    <?php } else { ?>
                        <input type="checkbox" name="get_FinishContract" value="1">
                    <?php }?>
       </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>




<?php }
}
