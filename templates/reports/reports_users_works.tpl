<div>
<table class="drawtable employee_table">
<tr>
    <th>Юзер</th>
    <th>изменений в КП</th>
    <th>отправленных email</th>
    <th>изменений в данных о компании</th>
    <th>КП с изменениями</th>
    
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