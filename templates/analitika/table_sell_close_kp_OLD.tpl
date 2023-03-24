{* <p class="center"> Отчет о проданных и закрытых КП </p> *}
<table class="table_work_kp">
  <tr class="">
      <th class="">Пользователь</th>
      <th class="">Продано КП</th>
      <th class="">Сумма Продаж</th>
      <th class="">Закрытые КП</th>
  </tr>


{foreach from=$active_user_login key=key item=value_user key=key_user}
<tr>
        {foreach from=$array_sold_kp_new_temp key=key item=value key=key}
        {*$value['idKp'].0*}  
      
          {if ($key_user == $key)}
            {$key_user} **   {$value_user} 
                <td>
                   <div class ="">  {$sold_kp} </div>   
                </td>
                               
          {/if}
            


            
        {/foreach}
</tr>        
{/foreach}
********

 
{foreach from=$active_user_login key=key item=value key=key}

<tr>
    <td>{$value}</td>
    {* ******************************************** Количество проданных КП ===== *}
    
    {foreach from=$kol_sold_kp_new key=user item=sold_kp}

            {if ($user == $key)}
                <td>
                   {if $sold_kp <> 0}
                <a href="?transition=11&ids={$arr_new_kp_user["$key"]}">
                <div class ="">
                    {$sold_kp}
                 </div>   
                </td>
                </a>
                {else} 
                 <div class ="">
                    {$sold_kp}
                 </div>  
                {/if}
            {/if}
    {/foreach}

    {* ****************************************************  СУмма Проданных КП ******************* *}
    {foreach from=$sum_sold_kp key=user item=sum_sold}
     {if ($user == $key)}

                 <td>
                   <div class ="">
                       <b>{number_format($sum_sold)}</b>
                   </div>
                </td>

            
            {/if}
    {/foreach}
{* Изменений *************************************Закрытые КП  ************************}
          {foreach from=$kol_change_kp key=user item=kp_change}
            {if ($user == $key)}
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




              
      </tr>
        
{/foreach}

</table>
