<div class= "main_container">
 <div class="flex_container flex_center"> 
   <div class="flex_1_container"> 
          <form enctype="multipart/form-data" action="?transition=1" method="get">
            <div class="subtitle">
              <input type="hidden" name="user_login" value="{$userdata['user_login']}">
              <input type="hidden" name="transition" value="1">   
                    {if isset($input_inn)}
                       ИНН Заказчика : <input class="input-line full-width" type="text" name="InnCustomer" value ="{$input_inn}">
                    {else} 
                       ИНН Заказчика : <input class="input-line full-width" type="text" name="InnCustomer" value ="">
                    {/if}
            </div>
            <div class="flex_center">
              <input class ="ghost-round full-width" type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
               {if isset($input_inn)}    
                  {if !isset($arr_inn_comp.0.inn)}          
                    Данный ИНН отсутствует в Базе &nbsp
                    <a class="input-line ghost-round" href="?transition=3&back_transition=1&user={$userdata['user_login']}&InnCustomer={$input_inn}" >Добавить?</a>
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
</div>


{************************************* Основная форма     *********************************************}
{************************************* Основная форма     *********************************************}
{************************************* Основная форма     *********************************************}

<div class="flex_container flex_center">
   
     <form class ="form_class" enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">
       <div class="flex_2_container">
              {*    ********************** Прячем тут ИНН если он был введен  ***************}    
              {if isset($arr_inn_comp.0.inn)}
                  <input type="hidden" name="InnCustomer" value="{$arr_inn_comp.0.inn}">  
              {else} 
                  <input type="hidden" name="InnCustomer" value="">  
              {/if}
                   {*    ********************** Тип КП   ***************}    
   <div id="type_kp_manual" class="">  
{* Источник КП *}
       <div class = "wd50">
                   Источник КП :
                    <select size="1" name="type_kp">
                      <option selected value="2">почта INFO</option>
                      <option value="3">Входящий звонок</option>
                      <option value="4">Старый клиент</option>
                      <option value="">Нет данных</option>
                    </select>
         </div>
 {* Тип продукции *}
       <div class = "wd50">
                   Тип продукции :
                    <select size="1" name="product_type">
                 
                      {for $i=0 to  (count($AllProductTypesName)-1)}
                        <option value="{$AllProductTypesValue.$i}">{$AllProductTypesName.$i}</option>
                      {/for}
                    </select>
         </div>    

{********* номер и дата КП *}       
        <div class="wd50">
           <p>Номер КП из 1С: <input type="text" name="KpNumber" value =""></p>
        </div>
      {* Дата КП *}
       <div>
        <p class =""> Дата КП : <input type="date" name="KpDate" value =""></p>
       </div>
{********* важность КП *}
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

{*** Ответственный за КП *}
    <div class="">

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
      <div class=""> 
        <p>Адрес поставки : </p> 
        <textarea name="Adress" rows="2" cols="50"></textarea>
      </div>
      <div class=""> 
         <p> <b>Сумма доставки: <input required type="number" name="DostCost" value =""></b></p>
      </div>




    </div>
</div>
{*-***************************************** Правый блок фломы **************************************************}
<div class="flex_2_container">
 {*    ********************** Наименование Заказчика   ********************} 
{if isset($arr_inn_comp.0.inn)}
 <div class="">Наименование Заказчика : <input disabled type="text"  value ="{$arr_inn_comp.0.name}" size="70">
 <input hidden type="text" name="NameCustomer" value ="{$arr_inn_comp.0.name}" size="70">
 </div>
{else}
 <p class="">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>
{/if}


 {*    ********************** Телефон Заказчика   ********************} 
{if isset($tel_comp)}
 <p class="">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="{$tel_comp}" size="70"></p>
 
{else}
<p class="">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
{/if}
 {*    ********************** Почта Заказчика   ********************} 
 {if isset($email_comp)}
 <p class="">Эл. Почта Заказчика : <input type="text" name="EmailCustomer" value ="{$email_comp}" size="70"></p>
 {else}
 <p class="">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

 {/if}
 {*    ********************** Контактное лицо Заказчика   ********************} 
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
      






</div> {* main_container *}


         
