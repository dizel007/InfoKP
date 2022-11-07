<h2>Изменения в КП за выбранный период</h2>


<div>
<table class="drawtable employee_table">
<tr>
    <th>Юзер</th>
    <th>Новых КП назначено</th>
    <th>Новых КП ожидает</th>
    <th>КП "НЕ в работе" всего</th>    
    <th>КП "в работе" за период</th>
    <th>КП "в работе" всего</th>
    <th>КП проданы за период</th>
    <th>Сумма продаж за период</th>
    <th>Просроченные КП за период</th>
    <th>Закрытые КП за период</th>
    <th>Закрытые КП всего</th>

    
</tr>

{foreach from=$arr_users item=value}
    <tr>
    <td>{$value}</td>
        {foreach from=$kol_change_kp key=user item=kp_change}
            {if ($user == $value)}
                <td>{$kp_change}</td>
            {/if}
        {/foreach}
        
        {foreach from=$kol_send_mail key=user item=send_mail}
            {if ($user == $value)}
                <td>{$send_mail}</td>
            {/if}
        {/foreach}

        {foreach from=$kol_change_comp key=user item=change_comp}
        {if ($user == $value)}
            <td>{$change_comp}</td>
        {/if}
        {/foreach}

        {foreach from=$kol_change_unique_kp key=user item=kp_unique_change}
            {if ($user == $value)}
                <td>{$kp_unique_change}</td>
            {/if}
        {/foreach}
              
      </tr>
        
{/foreach}

</table>





</div>
