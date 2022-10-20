<div class="zagolovok"> Создание нового КП </div>
 {*    ********************** ИНН Заказчика   ********************} 
<div class="block">
 <p class="zagolovok">Проверка наличия ИНН в Базе</p>
        <form enctype="multipart/form-data" action="?transition=1" method="get">
            <div class="input_form_left zhir">
              <input type="hidden" name="user_login" value="{$userdata['user_login']}">
              <input type="hidden" name="transition" value="1">   
                    {if isset($input_inn)}
                       ИНН Заказчика : <input type="number" name="InnCustomer" value ="{$input_inn}">
                    {else} 
                       ИНН Заказчика : <input type="number" name="InnCustomer" value ="">
                    {/if}
            </div>
            <div class="input_form_left">
              <input type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
              <p>
           {if isset($input_inn)}    
                  {if !isset($arr_inn_comp.0.inn)}          
                    Данный ИНН отсутствует в НАШЕЙ(!!!!!!!) Базе    &nbsp&nbsp&nbsp
                    <a href="?transition=3&user={$userdata['user_login']}&InnCustomer={$input_inn}" > Добавить?</a>
                  {else}
                    &nbsp
                  {/if}
          {else} 
               &nbsp
          {/if}                            
              </p>
            </div>

        </form>
</div>

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">


{*    ********************** Прячем тут ИНН если он был введен  ***************}    
{if isset($arr_inn_comp.0.inn)}
    <input type="hidden" name="InnCustomer" value="{$arr_inn_comp.0.inn}">  
{else} 
    <input type="hidden" name="InnCustomer" value="">  
{/if}
 {*    ********************** Тип КП   ***************}    
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

 {*    ********************** НОМЕР КП  для КП при ручном вводе ********************} 
<div id="type_kp_manual" class="block">
  <div class="input_form_left">
    <p class = "zhir">Номер КП из 1С: <input type="text" name="KpNumber" value =""></p>
  </div>
 
 
 
     {*    ********************** Дата  КП   ********************} 
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDate" value ="{$KpDate}"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>


 {*    ********************** ОБЪЕКТНЫЕ КП  ********************} 
<div id="type_kp_object" class="block" style="display:none; background-color: darkCyan;">
  <div class="input_form_left">
    <p class = "zhir">Номер КП : <input type="text" name="KpNumberO" value =""></p>
  </div>
 
 
 
     {*    ********************** Дата  КП   ********************} 
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDateO" value ="{$KpDateO}"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>



<div class="block green_bgc">
 {*    ********************** Наименование Заказчика   ********************} 
{if isset($arr_inn_comp.0.inn)}
 <p class="pad5px width15 zhir">Наименование Заказчика : <input disabled type="text"  value ="{$arr_inn_comp.0.name}" size="70">
 <input hidden type="text" name="NameCustomer" value ="{$arr_inn_comp.0.name}" size="70">
 </p>
{else}
 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>
{/if}


 {*    ********************** Телефон Заказчика   ********************} 
{if isset($tel_comp)}
 <p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="{$tel_comp}" size="70"></p>
 
{else}
<p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
{/if}
 {*    ********************** Почта Заказчика   ********************} 
 {if isset($email_comp)}
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="text" name="EmailCustomer" value ="{$email_comp}" size="70"></p>
 {else}
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

 {/if}
 {*    ********************** Контактное лицо Заказчика   ********************} 
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>
</div>


 {*    ********************** ВАЖНОСТЬ КП   ***************}    
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
{*       **************** ОТВЕТСТВЕННЫЙ КП  ***************}    
    <div class="pad5px zhir">

    Ответственный :
        <select style="width:150px;" name="responsible" size="1">
            <option selected value="{$userdata['user_name']}">{$userdata['user_name']}</option>
         {for  $i=0 to $count_users-2}
              {* Удаляем повтор активного польвателя*}
             {if $active_user_logins_arr_smarty[$i] == $userdata['user_login']}
                {$i = $i + 1}
             {/if}
            <option value="{$active_user_names_arr_smarty[$i]}">{$active_user_names_arr_smarty[$i]}</option>
         {/for}
         
          
        </select>
    </div>


{*  ********************************** Адрес поставки ***************}
      <div class="pad5px zhir"> 
        <p>Адрес поставки : </p> 
        <textarea name="Adress" rows="2" cols="50"></textarea>
      </div>
      <div class="pad5px zhir"> 
      <p> <b>Сумма доставки: <input required type="number" name="DostCost" value =""></b></p>
      </div>

</div>
{*  ********************************** Цепляем файл  ***************}
 <div class="block">              
                <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                файл заполненный по шаблону: <input required name="upload_file" type="file">
 
  <div><a href="sample_files/temp_kp.xlsx" download>Скачать шаблон для КП</a></div>
 </div>
 {*  ********************************** Кнопка Создать ***************}
 <div class="block"> 
 <p><input type="submit" value="Создать"></p>
 </div>
 </form>

 {*  ******************************** Ссылка на возврат в реестр  ***************}
  <div class="block"> 
      <a class="zagolovok" href="index.php">Вернуться в реестр</a>
 </div>


              
