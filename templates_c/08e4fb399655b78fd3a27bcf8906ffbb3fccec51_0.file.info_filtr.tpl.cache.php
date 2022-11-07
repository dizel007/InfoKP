<?php
/* Smarty version 4.1.0, created on 2022-11-07 14:18:55
  from 'C:\xampp\htdocs\InfoKP\templates\info_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368e99fd0b056_60566363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e4fb399655b78fd3a27bcf8906ffbb3fccec51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\info_filtr.tpl',
      1 => 1667814335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6368e99fd0b056_60566363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12347111396368e99fcfb651_06558490';
?>
<div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="">
   <div class ="up_form_new">

   
<input hidden type="text" name="transition" value="7">

     
        <div id="g_nomerKP" class="mobile_web">
            <label for="param">номер КП : </label>
            <input size="6" type="text" id="get_nomerKP" name="get_nomerKP" value = "<?php echo $_smarty_tpl->tpl_vars['get_nomerKP']->value;?>
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
            <label for="param">ИНН : </label>
            <input size="8" type="text" id="get_inn" name="get_inn" value = "<?php echo $_smarty_tpl->tpl_vars['get_inn']->value;?>
">
           

        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param">ID КП : </label>
            <input size="6" type="text" id="get_id_kp" name="get_id_kp" value = "<?php echo $_smarty_tpl->tpl_vars['get_id_kp']->value;?>
">
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:120px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
 
         <option  selected value="<?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
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

  
 <div id="g_type_kp" class="mobile_web" >
Тип КП :
    <select style="width:100px;" id="get_type_kp" class="form-select data-windows" name="get_type_kp" size="1">
 
         <option selected value="<?php echo $_smarty_tpl->tpl_vars['get_type_kp']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['get_value_type_kp']->value;?>
</option>
         <?php $_smarty_tpl->_assignInScope('count_AllKptype', count($_smarty_tpl->tpl_vars['AllKptype']->value)-2);?>
         
         <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['AllKptype']->value)-2)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['AllKptype']->value)-2))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                           <?php if ($_smarty_tpl->tpl_vars['AllValuesKptype']->value[$_smarty_tpl->tpl_vars['i']->value] == $_smarty_tpl->tpl_vars['get_type_kp']->value) {?>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
             <?php }?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['AllValuesKptype']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['AllKptype']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</option>
         <?php }
}
?>
        
     </select>
 </div>


     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param">Заказчик : </label>
            <input size="10" type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "<?php echo $_smarty_tpl->tpl_vars['get_name_zakazchik']->value;?>
">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес : </label>
            <input size="10" type="text" id="get_adres_postavki" name="get_adres_postavki" value = "<?php echo $_smarty_tpl->tpl_vars['get_adres_postavki']->value;?>
">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр. Контр: </label>
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
