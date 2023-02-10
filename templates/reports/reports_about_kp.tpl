<h1>История изменений по КП </h1>




дата и время создания КП :{$start_info_kp['time_change']}
<br>
{***************************************  **** ИНФО об ОТправке ЕМАЙЛОВ ******************************}
<br>
Дата и время отправки EMAILS:<br>
<table class="table_about_kp">
  <tr>
    <td>пп</td>
    <td>Адрес получателя</td>
    <td>дата/время отправки</td>
    <td>исполнитель</td>
  </tr>
  {$i=0}
  {foreach from=$start_emales item=emails}

    <tr>
      <td>{$i+1}</td>
      <td>{$emails['comment_change']}</td>
      <td>{$emails['time_change']}</td>
      <td>{$emails['author']}</td>
      </tr>
    {$i=$i+1}
  {/foreach}
</table>

{* **************************************  **** ИНФО Изменения в КП *********************************** *}
<br>
Дата и время Изменений в КП:<br><br>
<table class="table_about_kp">
  <tr>
    <td>пп</td>
    <td>Комментарий</td>
    <td>дата/время изменения</td>
    <td>исполнитель</td>
  </tr>
  {$i=0}
  {foreach from=$change_in_kp item=comment}
    <tr>
      <td>{$i+1}</td>
      <td>
        {foreach from=$comment['comment_change'] item=value}
           {$value}<br>
        {/foreach}
      </td>
   
      <td>{$comment['time_change']}</td>
      <td>{$comment['author']}</td>
      </tr>
    {$i=$i+1}
  {/foreach}
</table>

{* ***************************************  **** Изменения данных в КП ************************************}
<br>
Дата и время Изменений ДАнных в КП:<br><br>
<table class="table_about_kp">
  <tr>
    <td>пп</td>
    <td>Изменения в КП</td>
    <td>дата/время изменения</td>
    <td>исполнитель</td>
  </tr>
   <tr>
    <td>0</td>
    <td> 
              {if ($LinkKp_first <> '')}
      <a href="{$LinkKp_first}" target="_blank" >Первичное КП</a>
         {else}
         файл удален с сервера
         {/if}

  
    </td>
    <td>{$start_info_kp['time_change']}</td>
    <td>{$start_info_kp['author']}</td>
  </tr>
 
  {$i=0}
  {foreach from=$change_data_kp item=comment}

    <tr>
      <td>{$i+1}</td>
      <td>
          {if ($arr_LinkKp[$i] <> '')}
         <a href="{$arr_LinkKp[$i]}" target="_blank" >{$comment['comment_change']}</a>
         {else}
         файл удален с сервера
         {/if}
      </td>
      <td>{$comment['time_change']}</td>
      <td>{$comment['author']}</td>
      </tr>
    {$i=$i+1}
  {/foreach}
</table>
