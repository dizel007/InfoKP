<?php
/* Smarty version 4.1.0, created on 2022-10-18 13:24:32
  from 'C:\xampp\htdocs\InfoKP\templates\shapka_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634e7ee05e1ff1_03182539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83668442b776fcc89541eb54ab7658eda209339' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\shapka_menu.tpl',
      1 => 1664184220,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_634e7ee05e1ff1_03182539 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="up_form_new">
   <div class ="up_form_new">

   
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
            <input type="text" id="get_nomerKP" name="get_nomerKP" value = "<br />
<b>Notice</b>:  Undefined index: get_nomerKP in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>52</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>52</b><br />
">
        
        </div>

                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "<br />
<b>Notice</b>:  Undefined index: get_date_start in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>59</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>59</b><br />
">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "<br />
<b>Notice</b>:  Undefined index: get_date_end in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>64</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>64</b><br />
">
                </div>
        
     
        <div id="g_inn" class="mobile_web">
            <label for="param">Введите ИНН : </label>
            <input type="text" id="get_inn" name="get_inn" value = "<br />
<b>Notice</b>:  Undefined index: get_inn in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>71</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>71</b><br />
">
        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param"> Введите ID КП : </label>
            <input type="text" id="get_id_kp" name="get_id_kp" value = "<br />
<b>Notice</b>:  Undefined index: get_id_kp in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>78</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>78</b><br />
">
        
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:150px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
        <option selected value="<br />
<b>Notice</b>:  Undefined index: get_responsible in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>87</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>87</b><br />
"><br />
<b>Notice</b>:  Undefined index: get_responsible in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>88</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>88</b><br />
</option>
         <br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>90</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>90</b><br />
<br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>90</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>90</b><br />

         <option value=""></option>
         
     </select>
 </div>
     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param"> Наименование Заказчика : </label>
            <input type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "<br />
<b>Notice</b>:  Undefined index: get_name_zakazchik in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>99</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>99</b><br />
">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес поставки : </label>
            <input type="text" id="get_adres_postavki" name="get_adres_postavki" value = "<br />
<b>Notice</b>:  Undefined index: get_adres_postavki in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>107</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>107</b><br />
">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>
                    <br />
<b>Notice</b>:  Undefined index: get_FinishContract in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>115</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\e83668442b776fcc89541eb54ab7658eda209339_0.file.shapka_menu.tpl.cache.php</b> on line <b>115</b><br />
                        <input type="checkbox" name="get_FinishContract" value="1">
                           </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>




<?php }
}
