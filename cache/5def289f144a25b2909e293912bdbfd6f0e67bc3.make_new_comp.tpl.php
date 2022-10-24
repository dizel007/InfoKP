<?php
/* Smarty version 4.1.0, created on 2022-10-24 15:01:59
  from 'C:\xampp\htdocs\InfoKP\templates\make_new_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63567eb763a2e5_09988346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a718311828b1e58f9c749451e4f38740ee7956df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\make_new_comp.tpl',
      1 => 1666609927,
      2 => 'file',
    ),
    '8ba03dffa35f7873a0e7e7c88c161c78dbd4bc92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\header.tpl',
      1 => 1666612736,
      2 => 'file',
    ),
    '7836b2791c5890d9da14a05c355283473a4630c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\footer.tpl',
      1 => 1666334975,
      2 => 'file',
    ),
    'e1f9b87fbfd6a394bc0d9bf780ab3e6139aa7c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\_include_modal.tpl',
      1 => 1664879449,
      2 => 'file',
    ),
    '9d26630517092b580f073c4c2c691d59b0b45b0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_insert_phone.tpl',
      1 => 1666263601,
      2 => 'file',
    ),
    'ca9b20e964a801dc7519e65db32b410d5142e217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_update_phone.tpl',
      1 => 1666271633,
      2 => 'file',
    ),
    'f5ed88b1e15f7fb9ba237f055fbfef5952244119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_insert_email.tpl',
      1 => 1666342347,
      2 => 'file',
    ),
    '64f60af789294901fb808271dbe3930a5c3996a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_update_email.tpl',
      1 => 1666344026,
      2 => 'file',
    ),
    'b034db4e8284d7f4a40539939a13d42f9f1b2680' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_update_infocomp.tpl',
      1 => 1666346222,
      2 => 'file',
    ),
    'f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_change_zakup.tpl',
      1 => 1666257640,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_63567eb763a2e5_09988346 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- скрипт для телефоной маски -->
     </head>

<body bgcolor="#ffffff">

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
  


     <section class="block">
    <p><strong>Введите наименование компании или ИНН</strong></p>
    <input id="party" name="party" type="text" value="">
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


<input type="hidden" name="back_transition" value="1"> 

  
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>


  <div class="block"> 
      <a class="zagolovok" href="?transition=1&user=zeld">Вернуться в создание КП</a>
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



   <!-- модальные окна для вставки телефонов -->
 <!-- модальные окна для изменения телефонов -->
 <!-- модальные окна для вставки email -->
  <!-- модальные окна для изменения email -->
<!-- Корректировка данных о Компании -->
 <!-- модальные окна для изменения инорфмаци о комапнии -->
 <!-- модальные окна для правки данных о компании -->



  <div class="dm-overlay js-modal " data-modal = "write_comment">
     <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal"  >
                  <!-- <a href="#close" class="close js-modal-close"></a> -->
                  <a class="close js-modal-close"></a>

  <div>
    <select id = "js-id" name="id">
      <option id ="js-new-modal-id" value ="$id"><br />
<b>Notice</b>:  Undefined index: id in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>36</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\InfoKP\templates_c\f9ac17a4a83153ccdb8bf5bdf021f1c8f8229185_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>36</b><br />
</option>
            
    </select>
  </div>

<input hidden id="js-modal-user-login" value = zeld>

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
                       <option value="Зелизко">Зелизко</option>
                       <option value="Горячев">Горячев</option>
                       <option value="Гуц">Гуц</option>
                       <option value="Штыбко">Штыбко</option>
                       <option value="Кулиев">Кулиев</option>
                       <option value="Кверти">Кверти</option>
                       <option value="Лобов">Лобов</option>
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
                        <option value="В работе">В работе</option>
                       <option value="Не требуется">Не требуется</option>
                       <option value="Купили у нас">Купили у нас</option>
                       <option value="Уже купили">Уже купили</option>
                       <option value="Перенос на сл.год">Перенос на сл.год</option>
         
       

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
