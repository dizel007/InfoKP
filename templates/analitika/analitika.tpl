{* <div class = "zagolovok_an">Аналитика</div> *}
<div class = "date_menu_an">
  
  <form class = "date_select_menu_an" action = "">
  <input hidden type="text" name ="transition" value="70">
  
  {*
  <select name="report_type">

     <option value="r1">Отчет по работе с КП</option>
     <option value="r2">Отчет по  КП</option>
     <option value="r3">Отчет по работе с КП</option>
 </select>
 *}
   <input class = "mar_left_30" type="submit" value="Отправить">
   <ul class="date_menu_an">
    <li class=""><a href="?transition=70&user_login={$userdata['user_login']}&get_date_start={$now}&get_date_end={$now}">Сегодня</a></li>
    <li class=""><a href="?transition=70&user_login={$userdata['user_login']}&get_date_start={$yesturday}&get_date_end={$yesturday}">Вчера</a></li>
    <li class=""><a href="?transition=70&user_login={$userdata['user_login']}&get_date_start={$last_week}&get_date_end={$now}">Неделя</a></li>
    <li class=""><a href="?transition=70&user_login={$userdata['user_login']}&get_date_start={$last_month}&get_date_end={$now}">Месяц</a></li>
    <li class=""><a href="?transition=70&user_login={$userdata['user_login']}&get_date_start={$last_kvartal}&get_date_end={$now}">Квартал</a></li>

</ul>
   
   {* *******************  Меня ввода Даты       ************************** *}
                <div id="g_dateKPs" class="mar_left_60">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "{$get_date_start}">
                </div>
                <div id="g_dateKPe" class="mar_left_30">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "{$get_date_end}">
                </div>

  </form>



</div>

{**********************  Таблица с отчетами (Продажи КП)    ******************}
{include file="analitika/table_sell_kp.tpl"}


{**********************  Таблица с отчетами   (РАБОТА ПО КП)  ******************}
{include file="analitika/table_work_kp.tpl"}

{**********************  Таблица с отчетами (Закрытые КП)    ******************}
{include file="analitika/table_close_kp.tpl"}

