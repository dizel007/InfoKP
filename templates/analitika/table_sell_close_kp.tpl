 <p class="center"> Отчет о проданных </p> 
<table class="table_work_kp">
  <tr class="">
      <th class="">Пользователь</th>
      <th class="">Продано КП<br>(объектные)</th>
      <th class="">Сумма Продаж<br>(объектные)</th>
      
      <th class="">Продано КП<br>(остальные)</th>
      <th class="">Сумма Продаж<br>(остальные)</th>
      <th class="">Сумма Продаж<br>(все КП)</th>

  
  </tr>


{foreach from=$active_user_login key=key item=value_user key=key_user}
      
      <tr>
{foreach from=$array_sold_kp key=key item=value key=key}    
{if ($key_user == $key)}
  {* ************************************ Сотрудник ******************************* *}    
                <td>
                   <div class ="">  {$value_user} </div>   
                </td>
{* ************************************ Кол-во объектные ******************************* *}
   <td>
      <div class ="">
          {if (isset($array_sold_kp.$key['KpCount_obj']))}
              <a href="?transition=11&ids={$array_sold_kp.$key['idKp_obj']}">
                 {$array_sold_kp.$key['KpCount_obj']} 
               </a>
           {else} 
                 0
           {/if}
     </div>   
   </td>
{* ************************************ Сумма объектные ******************************* *}
    <td>
      <div class ="">
        {if (isset($array_sold_kp.$key['KpSum_obj']))}
             {number_format($array_sold_kp.$key['KpSum_obj'])}   
        {else} 
        0
        {/if}  
      </div>   
    </td>
{* ************************************ Кол-во остальные КП ******************************* *}
   <td>
      <div class ="">
          {if (isset($array_sold_kp.$key['KpCount_other']))}
              <a href="?transition=11&ids={$array_sold_kp.$key['idKp_other']}">
                 {$array_sold_kp.$key['KpCount_other']} 
               </a>
           {else} 
                 0
           {/if}
     </div>   
   </td>
{* ************************************ Сумма остальные КП  ******************************* *}
    <td>
      <div class ="">
        {if (isset($array_sold_kp.$key['KpSum_other']))}
             {number_format($array_sold_kp.$key['KpSum_other'])}   
        {else} 
        0
        {/if}  
      </div>   
    </td>

{* ************************************ Сумма все КП  ******************************* *}
    <td>
      <div class ="">
        {if (isset($array_sold_kp.$key['KpSum']))}
             {number_format($array_sold_kp.$key['KpSum'])}   
        {else} 
        0
        {/if}  
      </div>   
    </td>

{/if}
{/foreach}

{* ************************************ END Закрытые КП  ******************************* *}




       </tr>                

   
   
{/foreach}

  <tr class="itogo">
      <td>
         <div class ="">  ИТОГО </div>   
                </td>

{**********************   Объектные ИтоГо ************************************}
               <td>
                    <div class ="">
                    <a href="?transition=11&ids={$itog_sold_kp['idKp_obj']}">
                      {$itog_sold_kp['KpCount_obj']} 
                      </div>   
               </td>

                <td>
                    <div class =""> {number_format($itog_sold_kp['Summa_obj'])} </div>   
               </td>

 {**********************    Остальгные ИТОГО ************************************}
                <td>
                    <div class ="">
                    <a href="?transition=11&ids={$itog_sold_kp['idKp_other']}">
                      {$itog_sold_kp['KpCount_other']} 
                      </div>   
               </td>

                <td>
                    <div class =""> {number_format($itog_sold_kp['Summa_other'])} </div>   
               </td>
 {**********************    Остальгные ИТОГО ************************************}
                <td>
                    <div class =""> {number_format($itog_sold_kp['Summa'])} </div>   
               </td>

         


          
       </tr> 


</table>
 






              
     
        



