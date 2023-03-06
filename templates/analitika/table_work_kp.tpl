
<table class="table_work_kp">
  <tr class="">
      <th class="">Пользователь</th>
      <th class="">Новых КП</th>
      <th class="">Изм. данные в КП</th>
      <th class="">Изменений в КП</th>
      <th class="">Отправленных писем</th>
      <th class="">КП с изменениями</th>
</tr>

{foreach from=$arr_users item=value}

<tr>
    <td>{$value}</td>
    {* новые КП *}
    {foreach from=$kol_new_kp key=user item=new_kp}
            {if ($user == $value)}
                <td>
                 
                {if $new_kp <> 0}
                <a href="?transition=11&ids={$arr_new_kp_user["$value"]}">
                <div class ="">
                    {$new_kp}
                 </div>   
                </td>
                </a>
                {else} 
                 <div class ="">
                    {$new_kp}
                 </div>  
                {/if}
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
                <td>
                {if $kp_change <> 0}
                  
                <a href="?transition=15&author={$value}&date_start={$get_date_start}&date_end={$get_date_end}&what_change=1">
                 <div class ="">
                    {$kp_change}
                </div>
                </a>
                {else}
                    <div class ="">
                       {$kp_change}
                   </div>
                {/if}
                </td>
            
            
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
                <td>
                <a href="?transition=11&ids={$arr_change_kp_user["$value"]}">
                {$kp_unique_change}
                </a>
                </td>
            {/if}
        {/foreach}
              
      </tr>
        
{/foreach}

</table>
