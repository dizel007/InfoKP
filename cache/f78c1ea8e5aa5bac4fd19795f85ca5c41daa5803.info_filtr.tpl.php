<?php
/* Smarty version 4.1.0, created on 2022-11-07 14:18:55
  from 'C:\xampp\htdocs\InfoKP\templates\info_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368e99fd22760_34167884',
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
  'cache_lifetime' => 120,
),true)) {
function content_6368e99fd22760_34167884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="">
   <div class ="up_form_new">

   
<input hidden type="text" name="transition" value="7">

     
        <div id="g_nomerKP" class="mobile_web">
            <label for="param">номер КП : </label>
            <input size="6" type="text" id="get_nomerKP" name="get_nomerKP" value = "">
        </div>

                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "">
                </div>
        
     
        <div id="g_inn" class="mobile_web">
            <label for="param">ИНН : </label>
            <input size="8" type="text" id="get_inn" name="get_inn" value = "">
           

        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param">ID КП : </label>
            <input size="6" type="text" id="get_id_kp" name="get_id_kp" value = "">
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:120px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
 
         <option  selected value=""></option>
                                                <option value="Зелизко">Зелизко</option>
                                                <option value="Горячев">Горячев</option>
                                                <option value="Гуц">Гуц</option>
                                                <option value="Штыбко">Штыбко</option>
                                                <option value="Кулиев">Кулиев</option>
                                                <option value="Лобов">Лобов</option>
                  
     </select>
 </div>

  
 <div id="g_type_kp" class="mobile_web" >
Тип КП :
    <select style="width:100px;" id="get_type_kp" class="form-select data-windows" name="get_type_kp" size="1">
 
         <option selected value=""></option>
                  
                                                <option value="2">почта Info</option>
                                                <option value="3">Входящий звонок</option>
                                                <option value="4">Старый клиент</option>
                                                <option value="6">Объектные</option>
                 
     </select>
 </div>


     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param">Заказчик : </label>
            <input size="10" type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес : </label>
            <input size="10" type="text" id="get_adres_postavki" name="get_adres_postavki" value = "">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр. Контр: </label>
                                            <input type="checkbox" name="get_FinishContract" value="1">
                           </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>




<?php }
}
