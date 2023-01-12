


{$p=0}
<form action ="../pdo_connect_db/update_data_in_kp.php" method="POST">

<table>
{foreach from=$prods item=value}

<tr>
  <td> {$p+1}</td>
  <td><input size ="100" type="text" name = "name{$p}" value ="{$value['name']}"></td>
  <td><input size ="2"   type="text" name = "ed_izm{$p}" value ="{$value['ed_izm']}"></td>
  <td><input size ="1"   type="number" name = "kol{$p}" value ="{$value['kol']}"></td>
  <td><input size ="1"   type="number" name = "price{$p}" value ="{$value['price']}"></td>

</tr>
  {$p = $p+1}
{/foreach}

 </table>
 <input hidden type="number" name = "all_kolvo" value ="{$p}"></td>
 <a  href="?add_string=7&add_str_plus={$add_str+1}">добавить строку</a>



<table>
<tr>
  <td><label for="uslovia_oplati">Условия оплаты :</label></td>
  <td><input size ="30"   type="text" name = "uslovia_oplati" value ="{$uslovia_oplati}"></td>
</tr>
<tr>
  <td>  <label for="srok_izgotovl">Срок изготовления :</label></td>
  <td><input size ="30"   type="text" name = "srok_izgotovl" value ="{$srok_izgotovl}"></td>
</tr>
<tr>
  <td>{$adress_dostavki}</td>
  <td><input size ="30"   type="number" name = "price_dost" value ="{$price_dost}"></td>
</tr>  
  
  <br><br>

 


</table>
 <br> <br>
 <input type="submit">
 </form>