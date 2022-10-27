{* РИСУЕМ кнопку сброса *}
<div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="up_form_new">
   <div class ="up_form_new">

{* *******************  Прячем сюда тип перехода        ************************** *}   
<input hidden type="text" name="transition" value="7">
{* *******************  Меня Выбора параметр поиска       ************************** *}   
        <div class="mobile_web">
            <select size="1" id="typeQuery" name="typeQuery" onchange="showhideBlocks(this.value)">
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

 {* *******************  Меня ввода номер КП      ************************** *}
    
        <div id="g_nomerKP" class="mobile_web">
            <label for="param"> Введите номер КП : </label>
            <input type="text" id="get_nomerKP" name="get_nomerKP" value = "{$get_nomerKP}">
            <input hidden type="text" id="get_nomerKP_t" name="get_nomerKP_t" value = "{$get_nomerKP}">
        
        </div>

{* *******************  Меня ввода Даты       ************************** *}
                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "{$get_date_start}">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "{$get_date_end}">
                </div>
        
 {* *******************  Меня ввода ИНН      ************************** *}
    
        <div id="g_inn" class="mobile_web">
            <label for="param">Введите ИНН : </label>
            <input type="text" id="get_inn" name="get_inn" value = "{$get_inn}">
            <input hidden type="text" id="get_inn_t" name="get_inn_t" value = "{$get_inn}">

        </div>

 {* *******************  Меня ввода ID КП     ************************** *}
    
        <div id="g_id_kp" class="mobile_web">
            <label for="param"> Введите ID КП : </label>
            <input type="text" id="get_id_kp" name="get_id_kp" value = "{$get_id_kp}">
        
        </div>

{* *******************  Меня Выбора Ответственного Юзера       ************************** *}  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:150px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
 
         <option selected value="{$get_responsible}">{$get_responsible}</option>
         {for  $i=0 to $count_users-1}
              {* Удаляем повтор активного польвателя*}
             {if $active_user_logins_arr_smarty[$i] == $get_responsible}
                {$i = $i + 1}
             {/if}
            <option value="{$active_user_names_arr_smarty[$i]}">{$active_user_names_arr_smarty[$i]}</option>
         {/for}
         
     </select>
 </div>






 {* *******************  Меня ввода Наименование Заказчика     ************************** *}
    
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param"> Наименование Заказчика : </label>
            <input type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "{$get_name_zakazchik}">
   
        </div>

 {* *******************  Меня ввода Адрес поставки     ************************** *}
    
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес поставки : </label>
            <input type="text" id="get_adres_postavki" name="get_adres_postavki" value = "{$get_adres_postavki}">
      
        </div>

{* *******************  Меня ввода Закр.Перенос Контр      ************************** *}
       
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>
                    {if $get_FinishContract == 1}            
                    <input type="checkbox" name="get_FinishContract" value="1" checked>
                    {else}
                        <input type="checkbox" name="get_FinishContract" value="1">
                    {/if}
       </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>




