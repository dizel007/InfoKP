<?php
/* Smarty version 4.1.0, created on 2022-11-07 10:46:43
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368b7e324bf89_79938369',
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
  'cache_lifetime' => 120,
),true)) {
function content_6368b7e324bf89_79938369 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="flex_container flex_center"> 
   <div class="flex_1_container"> 
          <form enctype="multipart/form-data" action="?transition=1" method="get">
            <div class="subtitle">
              <input type="hidden" name="user_login" value="zeld">
              <input type="hidden" name="transition" value="1">   
                                           ИНН Заказчика : <input class="input-line full-width" type="text" name="InnCustomer" value ="501818685">
                                </div>
            <div class="flex_center">
              <input class ="ghost-round full-width" type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
                   
                            
                    Данный ИНН отсутствует в Базе &nbsp
                    <a class="input-line ghost-round" href="?transition=3&back_transition=1&user=zeld&InnCustomer=501818685" >Добавить?</a>
                                                        
              </p>
            </div>
        </form>

    </div>
</div>



<div class="flex_container flex_center">
   
     <form class ="form_class" enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">
       <div class="flex_2_container">
                  
               
                  <input type="hidden" name="InnCustomer" value="">  
                                     
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
            <option selected value="Зелизко">Зелизко</option>
                                                                             <option value="Горячев">Горячев</option>
                                                <option value="Гуц">Гуц</option>
                                                <option value="Штыбко">Штыбко</option>
                                                <option value="Кулиев">Кулиев</option>
                                                <option value="Лобов">Лобов</option>
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
  
 <p class="">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>


  
<p class="">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
  
  <p class="">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

   
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
