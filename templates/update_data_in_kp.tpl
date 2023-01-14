


{$p=0}

<form action ="../update_data_in_kp/format_data_for_make_kp.php" method="POST">

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
  <input hidden type="text" name = "id" value ="{$id}"></td>

 <input hidden type="number" name = "all_kolvo" value ="{$p}"></td>

 <a  href="?id={$id}&add_str_plus={$add_str+1}">добавить строку</a>



<table>
<tr>
  <td><label for="uslovia_oplati">Условия оплаты :</label></td>
  <td><input size ="30"   type="text" name = "uslovia_oplati" value ="{$dop_info['uslovia_oplati']}"></td>
</tr>
<tr>
  <td>  <label for="srok_izgotovl">Срок изготовления :</label></td>
  <td><input size ="30"   type="text" name = "srok_izgotovl" value ="{$dop_info['srok_izgotovl']}"></td>
</tr>
<tr>
  <td>{$dop_info['adress_dostavki']}</td>
  <td><input size ="30"   type="number" name = "price_dost" value ="{$dop_info['price_dost']}"></td>
  <td><input hidden name = "adress_dostavki" value ="{$dop_info['adress_dostavki']}"></td>
</tr>  
  
  <br><br>

 


</table>
 <br> <br>
 <input type="submit">
 </form>