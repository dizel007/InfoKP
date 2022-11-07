<?php
/* Smarty version 4.1.0, created on 2022-11-07 10:46:43
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368b7e3234881_22680217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc973df88a92f1f49f3201cde49087e2f7b1ab9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\make_new_kp.tpl',
      1 => 1667452495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6368b7e3234881_22680217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18774879556368b7e3221000_07431192';
?>

 <div class="flex_container flex_center"> 
   <div class="flex_1_container"> 
          <form enctype="multipart/form-data" action="?transition=1" method="get">
            <div class="subtitle">
              <input type="hidden" name="user_login" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
">
              <input type="hidden" name="transition" value="1">   
                    <?php if ((isset($_smarty_tpl->tpl_vars['input_inn']->value))) {?>
                       ИНН Заказчика : <input class="input-line full-width" type="text" name="InnCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
">
                    <?php } else { ?> 
                       ИНН Заказчика : <input class="input-line full-width" type="text" name="InnCustomer" value ="">
                    <?php }?>
            </div>
            <div class="flex_center">
              <input class ="ghost-round full-width" type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
               <?php if ((isset($_smarty_tpl->tpl_vars['input_inn']->value))) {?>    
                  <?php if (!(isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>          
                    Данный ИНН отсутствует в Базе &nbsp
                    <a class="input-line ghost-round" href="?transition=3&back_transition=1&user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_login'];?>
&InnCustomer=<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
" >Добавить?</a>
                  <?php } else { ?>
                    &nbsp
                  <?php }?>
          <?php } else { ?> 
               &nbsp
          <?php }?>                            
              </p>
            </div>
        </form>

    </div>
</div>



<div class="flex_container flex_center">
   
     <form class ="form_class" enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">
       <div class="flex_2_container">
                  
              <?php if ((isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>
                  <input type="hidden" name="InnCustomer" value="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn'];?>
">  
              <?php } else { ?> 
                  <input type="hidden" name="InnCustomer" value="">  
              <?php }?>
                       
   <div id="type_kp_manual" class="">  
       <div class = "wd50">
                   Источник КП :
                    <select size="1" name="type_kp">
                      <option selected value="2">почта INFO</option>
                      <option value="3">Входящий звонок</option>
                      <option value="4">Старый клиент</option>
                      <option value="">Нет данных</option>
                    </select>
         </div>
     

       
        <div class="wd50">
           <p>Номер КП из 1С: <input type="text" name="KpNumber" value =""></p>
        </div>
             <div>
        <p class =""> Дата КП : <input type="date" name="KpDate" value =""></p>
       </div>
         <div class="">
        <p>Важность :
            <select size="1" name="KpImportance">
              <option id="js-new-modal-KpImportance" selected value=""></option>  
              <option value="Нейтрально">Нейтрально</option>
              <option value="Важно">Важно</option>
              <option on value="Очень важно">Очень важно</option>
            </select>
        </p>
        </div>

    <div class="">

    Ответственный :
        <select style="width:150px;" name="responsible" size="1">
            <option selected value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_name'];?>
</option>
         <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count_users']->value-2+1 - (0) : 0-($_smarty_tpl->tpl_vars['count_users']->value-2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                           <?php if ($_smarty_tpl->tpl_vars['active_user_logins_arr_smarty']->value[$_smarty_tpl->tpl_vars['i']->value] == $_smarty_tpl->tpl_vars['userdata']->value['user_login']) {?>
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
      <div class=""> 
        <p>Адрес поставки : </p> 
        <textarea name="Adress" rows="2" cols="50"></textarea>
      </div>
      <div class=""> 
         <p> <b>Сумма доставки: <input required type="number" name="DostCost" value =""></b></p>
      </div>




    </div>
</div>
<div class="flex_2_container">
  
<?php if ((isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>
 <div class="">Наименование Заказчика : <input disabled type="text"  value ="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['name'];?>
" size="70">
 <input hidden type="text" name="NameCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['name'];?>
" size="70">
 </div>
<?php } else { ?>
 <p class="">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>
<?php }?>


  
<?php if ((isset($_smarty_tpl->tpl_vars['tel_comp']->value))) {?>
 <p class="">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['tel_comp']->value;?>
" size="70"></p>
 
<?php } else { ?>
<p class="">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
<?php }?>
  
 <?php if ((isset($_smarty_tpl->tpl_vars['email_comp']->value))) {?>
 <p class="">Эл. Почта Заказчика : <input type="text" name="EmailCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['email_comp']->value;?>
" size="70"></p>
 <?php } else { ?>
 <p class="">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

 <?php }?>
  
   <p class="">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>




 <div class="">              
                <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                файл заполненный по шаблону: <input required name="upload_file" type="file">
 
  <div><a href="sample_files/temp_kp.xlsx" download>Скачать шаблон для КП</a></div>
 </div>

 </div>

</div>

 <div class="flex_container flex_center">
    <div class="flex_3_container"> 
           <input class ="ghost-round full-width" type="submit" value="Создать">
    </div>
 </div>


 </form>
</div>
      









         
<?php }
}
