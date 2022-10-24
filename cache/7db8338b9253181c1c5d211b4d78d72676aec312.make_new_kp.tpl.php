<?php
/* Smarty version 4.1.0, created on 2022-10-24 11:01:30
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6356465ad0f243_32523520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc973df88a92f1f49f3201cde49087e2f7b1ab9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\make_new_kp.tpl',
      1 => 1666180493,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6356465ad0f243_32523520 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="zagolovok"> Создание нового КП </div>
  
<div class="block">
 <p class="zagolovok">Проверка наличия ИНН в Базе</p>
        <form enctype="multipart/form-data" action="?transition=1" method="get">
            <div class="input_form_left zhir">
              <input type="hidden" name="user_login" value="zeld">
              <input type="hidden" name="transition" value="1">   
                     
                       ИНН Заказчика : <input type="number" name="InnCustomer" value ="">
                                </div>
            <div class="input_form_left">
              <input type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
              <p>
            
               &nbsp
                                      
              </p>
            </div>

        </form>
</div>

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">


    
 
    <input type="hidden" name="InnCustomer" value="">  
     
<div class="block"> 

<p class = "zhir">Источник КП :
    <select size="1" name="type_kp" onchange="showhideTypeKP(this.value)">
      <option selected value="2">почта INFO</option>
      <option value="3">Входящий звонок</option>
      <option value="4">Старый клиент</option>
      <option value="5">Нет данных</option>
      <option value="6">Объектное</option>
    </select>
</p>
 </div>

  
<div id="type_kp_manual" class="block">
  <div class="input_form_left">
    <p class = "zhir">Номер КП из 1С: <input type="text" name="KpNumber" value =""></p>
  </div>
 
 
 
      
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDate" value ="<br />
<b>Notice</b>:  Undefined index: KpDate in <b>C:\xampp\htdocs\InfoKP\templates_c\bc973df88a92f1f49f3201cde49087e2f7b1ab9b_0.file.make_new_kp.tpl.cache.php</b> on line <b>101</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\bc973df88a92f1f49f3201cde49087e2f7b1ab9b_0.file.make_new_kp.tpl.cache.php</b> on line <b>101</b><br />
"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>


  
<div id="type_kp_object" class="block" style="display:none; background-color: darkCyan;">
  <div class="input_form_left">
    <p class = "zhir">Номер КП : <input type="text" name="KpNumberO" value =""></p>
  </div>
 
 
 
      
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDateO" value ="<br />
<b>Notice</b>:  Undefined index: KpDateO in <b>C:\xampp\htdocs\InfoKP\templates_c\bc973df88a92f1f49f3201cde49087e2f7b1ab9b_0.file.make_new_kp.tpl.cache.php</b> on line <b>120</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\bc973df88a92f1f49f3201cde49087e2f7b1ab9b_0.file.make_new_kp.tpl.cache.php</b> on line <b>120</b><br />
"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>



<div class="block green_bgc">
  
 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>


  
<p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
  
  <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

   
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>
</div>


     
<div class="block">
    <div class="pad5px zhir">
    <p>Важность :
        <select size="1" name="KpImportance">
          <option id="js-new-modal-KpImportance" selected value=""></option>  
          <option value="Нейтрально">Нейтрально</option>
          <option value="Важно">Важно</option>
          <option on value="Очень важно">Очень важно</option>
        </select>
    </p>
    </div>
    
    <div class="pad5px zhir">

    Ответственный :
        <select style="width:150px;" name="responsible" size="1">
            <option selected value="Зелизко">Зелизко</option>
                                                                             <option value="Горячев">Горячев</option>
                                                <option value="Гуц">Гуц</option>
                                                <option value="Штыбко">Штыбко</option>
                                                <option value="Кулиев">Кулиев</option>
                                                <option value="Кверти">Кверти</option>
                                                <option value="Лобов">Лобов</option>
                  
          
        </select>
    </div>


      <div class="pad5px zhir"> 
        <p>Адрес поставки : </p> 
        <textarea name="Adress" rows="2" cols="50"></textarea>
      </div>
      <div class="pad5px zhir"> 
      <p> <b>Сумма доставки: <input required type="number" name="DostCost" value =""></b></p>
      </div>

</div>
 <div class="block">              
                <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                файл заполненный по шаблону: <input required name="upload_file" type="file">
 
  <div><a href="sample_files/temp_kp.xlsx" download>Скачать шаблон для КП</a></div>
 </div>
  <div class="block"> 
 <p><input type="submit" value="Создать"></p>
 </div>
 </form>

   <div class="block"> 
      <a class="zagolovok" href="index.php">Вернуться в реестр</a>
 </div>


              
<?php }
}
