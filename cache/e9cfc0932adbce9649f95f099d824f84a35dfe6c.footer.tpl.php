<?php
/* Smarty version 4.1.0, created on 2022-10-27 16:11:29
  from 'C:\xampp\htdocs\InfoKP\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635a83818456b8_53148173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
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
function content_635a83818456b8_53148173 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
