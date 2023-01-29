
<br>
    <b>{$shapka['kp_name']}</b>
<br>
<table class = "shapka_kp">

<tr>
  <td>Заказчик :</td>
  <td> {$shapka['Zakazchik']} 
  {if (($InnCustomer <> 0))}
    ИНН: {$InnCustomer}
    {/if}
    </td>
  {if (($InnCustomer == 0) && ($priz_update_inn == '') )}
    <td><div>
      <a class="link_inn" href="?transition=3&back_transition=30&user=zeld&id={$id}&InnCustomer="> 
        Привязать к ИНН
      </a>
    </div>
      </td>

  {/if}
   {if ($priz_update_inn <> '')}
    <td>
        <div class="major_info">
            При сохранении формы к КП будет привязан ИНН: {$priz_update_inn} ({$NameCustomer})
        </div>
    </td>
  {/if}

</tr>
<tr>
  <td>Телефон :</td>
  <td>{$shapka['Phone']}</td>
</tr>
<tr>
  <td>Эл. почта :</td>
  <td>{$shapka['Email']}</td>
</tr>
</table>

{$p=0}

{******************************** Начало ФОРМЫ **************************************************}
<form class ="contact_form_change_kp" action ="update_data_in_kp/format_data_for_make_kp.php" method="POST">
{* *}
  {if ($priz_update_inn <> '')}
    <input hidden name="InnCustomer" value="{$priz_update_inn}">
  {/if}
  
  <div class="text_in_kp">Текст в Коммерческом предложении :</div>
  
          <textarea class="zonavvoda" name="ZakupName" rows="5 cols="10">
             {$shapka['ZakupName']}
        </textarea>
  
<div class="text_in_kp">
Перечень товаров :
</div>
<table>
{foreach from=$prods item=value}

<tr>
  <td><p class ="table_p"> {$p+1}</p></td>

{if $p==0}
  <td><input required size ="100" type="text" name = "name{$p}" value ="{$value['name']}"></td>
{else}
  <td><input size ="100" type="text" name = "name{$p}" value ="{$value['name']}"></td>
{/if}

  <td><input size ="2"   type="text" name = "ed_izm{$p}" value ="{$value['ed_izm']}"></td>
  <td><input size ="1"   type="number" step="any" name = "kol{$p}" value ="{$value['kol']}"></td>
  <td><input size ="1"   type="number" step="any" name = "price{$p}" value ="{$value['price']}"></td>
</tr>
  {$p = $p+1}
{/foreach}

 </table>
  <input hidden type="text" name = "id" value ="{$id}"></td>
  <input hidden type="number" name = "all_kolvo" value ="{$p}"></td>

   {if ($priz_update_inn == '')}
   <div class ="add_string">
        <a  href="?transition=30&id={$id}&add_str_plus={$add_str+1}">добавить строку</a>
    </div>
  {/if}

 



<table>
<tr>
  <td><label for="uslovia_oplati">Условия оплаты :</label></td>
  <td><input size ="30" type="text" name = "uslovia_oplati" value ="{$dop_info['uslovia_oplati']}"></td>
</tr>
<tr>
  <td>  <label for="srok_izgotovl">Срок изготовления :</label></td>
  <td><input size ="30"   type="text" name = "srok_izgotovl" value ="{$dop_info['srok_izgotovl']}"></td>
</tr>
<tr>
    <td>
    <label for="adress_dostavki">Примерная стоимость доставки до объекта:  <label>
   </td>
      <td>   </td>
</tr>
<tr>
   <td>
        <input name = "adress_dostavki" value ="{$dop_info['adress_dostavki']}">
    </td>
    <td>
        <input size ="30"   type="number" name = "price_dost" value ="{$dop_info['price_dost']}">
    </td>
  
</tr>  
  
  <br><br>

 


</table>
 <br> <br>
 <button class="submit" type="submit">Отправить</button>
 </form>