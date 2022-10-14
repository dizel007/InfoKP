<?php
/* Smarty version 4.1.0, created on 2022-10-14 14:27:59
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634947bf178f82_62509174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a718311828b1e58f9c749451e4f38740ee7956df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\make_new_comp.tpl',
      1 => 1665739595,
      2 => 'file',
    ),
    '8ba03dffa35f7873a0e7e7c88c161c78dbd4bc92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\header.tpl',
      1 => 1665663705,
      2 => 'file',
    ),
    '7836b2791c5890d9da14a05c355283473a4630c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\footer.tpl',
      1 => 1664879491,
      2 => 'file',
    ),
    'f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_change_zakup.tpl',
      1 => 1664879304,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_634947bf178f82_62509174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление новой компании по ИНН </title>
    
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap-grid.css">
    <link rel = "stylesheet" href = "css/style.css">
    
    
    
    <script type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"></script>
    <!-- скрипт по выбору типа Фильтра в шапке  -->
    <script type="text/javascript" src="js/shapka_menu.js"></script>
    <!-- скрипт по выбору типа КП при создании нового КП   -->
    <script type="text/javascript" src="js/make_new_kp_type_kp.js"></script>
    <!-- скрипт для телефоной маски -->
    <script src="jquery-3.3.1.maskedinput.min.js" type="text/javascript"></script> 
 </head>

<body bgcolor="#ffffff">

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
  


     <section class="block">
    <p><strong>Введите наименование компании или ИНН</strong></p>
    <input id="party" name="party" type="text" value="66840108945">
    </div>  
  </section> 

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




  
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>


  <div class="block"> 
      <a class="zagolovok" href="?transition=1&user=qwe">Вернуться в создание КП</a>
 </div>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
  
  <script>
      $("#party").suggestions({
          token: "ef0e1d4c5e875f38344a698c7bfae1f02078f7ed",
          type: "PARTY",
          /* Вызывается, когда пользователь выбирает одну из подсказок */
          onSelect: function(suggestion) {
              console.log(suggestion);
          }
      });
  </script>
  <script src="dadata/dadate.js"></script>


 <!-- модальные окна для правки по ИНН  -->

 <!-- модальные окна для вставки телефонов -->

  <div class="dm-overlay js-modal " data-modal = "write_comment">
     <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal"  >
                  <!-- <a href="#close" class="close js-modal-close"></a> -->
                  <a class="close js-modal-close"></a>

  <div>
    <select id = "js-id" name="id">
      <option id ="js-new-modal-id" value ="$id"><br />
<b>Notice</b>:  Undefined index: id in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>37</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>37</b><br />
</option>
            
    </select>
  </div>

 <div><b> Номер КП : <span id="js-new-modal-KpNumber">$KpNumber</span></b></div>

  
 <div>ИНН Заказчика :<span id="js-new-modal-InnCustomer">$InnCustomer</span></div>
 <div><b>Наименование Заказчика :<span id="js-new-modal-NameCustomer">$NameCustomer</span></b></div>
  <hr>
<div>ID  закупки :<span id="js-new-modal-idKp">$idKp</span></div>
  <hr>
     
<div> 
<p>Важность :
    <select id="KpImportance" size="1" name="KpImportance">
      <option id="js-new-modal-KpImportance" selected value=""></option>  
      <option value="Нейтрально">Нейтрально</option>
      <option value="Важно">Важно</option>
      <option on value="Очень важно">Очень важно</option>
    </select>
</p>
 </div>

<div> 
  <p>Ответственный
    <select id="Responsible" size="1" name="Responsible">
        <option id="js-new-modal-Responsible" selected value = ""></option>
           <br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />


     </select>
  </p>
</div>
   <hr>

<div> 
    <p>Комментарий :<span id="js-new-modal-Comment">$Comment</span></p>
      <p id="Comment">    
         <textarea id="textarea-Comment" name="Comment" rows="2" cols="50"></textarea>
      </p>
</div>
<hr>

<div> 
    <p >Дата след.Звонка <input id="DateNextCall" type="date" name="DateNextCall" value ="$DateNextCall"></p>
</div>


<div> 
  <p>Состояние КП
    <select id="KpCondition" size="1" name="KpCondition">
        <option id="js-new-modal-KpCondition" selected value = ""></option>
       <br />
<b>Notice</b>:  Undefined index: array_condition_kp in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Undefined index: array_condition_kp in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />



        </select>
  </p>
</div>
<div><p>Сумма КП  <input type="number" id="KpSum" name="KpSum" value ="$KpSum"></p></div>
<div><p>НМЦК Тендера КП : <span id="js-new-modal-TenderSum">$TenderSum</span></p></div>
<hr>

<div> 
    <p>Дата заключения Контакта <input id="dateContract" type="date" name="dateContract" value ="$dateContract">
    Процент выполнения  <input type="number" id="procent_work" name="procent_work" value ="$procent_work"></p>
    <p>Дата окончания Контакта <input id="dateFinishContract" type="date" name="dateFinishContract" value ="$dateFinishContract"></p>
</div>
<hr>

<div> 
  <p>Контракт закрыт 
    <select id="FinishContract" size="1" name="FinishContract">
      <!-- <option id="js-new-modal-FinishContract" selected value = "$FinishContract">$FinishContract</option> -->
      <option value="0">Контракт НЕ закрыт</option>
      <option value="1">Контракт закрыт</option>
  </select>
  </p>
</div>

<div> 
  <p>Адрес поставки : </p> 
  <textarea id="textarea-Adress" name="Adress" rows="1" cols="50"><span id="js-new-modal-Adress">$Adress</span></textarea>
</div>
<div class="container-for-btn">
<div class = "btncommentClass button">СОХРАНИТЬ</div>                
</div>    

              
       

              </div>
          </div>
      </div>
  </div> <!-- модальные окна для изменения инорфмаци d КП -->
<script type="text/javascript" src="js/ajax_query_comment.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/phone_mask.js"></script>

</body>

</html>


              
<?php }
}
