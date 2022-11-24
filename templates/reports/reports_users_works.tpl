<div>
<table class="drawtable employee_table">
<tr>
    <td>Юзер</td>
    <td>новых КП</td>
    <td>новых Компаний</td>
    <td>изменений в КП</td>
    <td>отправленных email</td>
    <td>изменений в данных о компании</td>
    <td>КП с изменениями</td>
    
</tr>

{foreach from=$arr_users item=value}
    <tr>
    <td>{$value}</td>


    {* новые КП *}
    {foreach from=$kol_new_kp key=user item=new_kp}
            {if ($user == $value)}
                <td>{$new_kp}</td>
            {/if}
    {/foreach}

    {* новые Компаний создано *}
    {foreach from=$kol_new_comp key=user item=new_comp}
     {if ($user == $value)}
             <td>{$new_comp}</td>
            {/if}
    {/foreach}
{* Изменений в КП  *}
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
{* КП с изменениями *}
        {foreach from=$kol_change_unique_kp key=user item=kp_unique_change}
            {if ($user == $value)}
                <td>{$kp_unique_change}</td>
            {/if}
        {/foreach}
              
      </tr>
        
{/foreach}

</table>





</div>