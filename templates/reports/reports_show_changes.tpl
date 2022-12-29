<table class="styled-table drawtable employee_table">
<tr>
<td>пп</td>
<td>Пользователь</td>
<td>Дата</td>
<td>Сылка на изменение</td>
<td>Изменение</td>
<td>Сумма КП</td>
<td>История КП</td>

</tr>

{$i=0}
{foreach from=$arr_select_changes key=user item=value}
<tr>
<td>{$i+1}пп</td>
<td>{$arr_select_changes.$i.author}</td>
<td>{$arr_select_changes.$i.date_change}</td>
<td>{$arr_select_changes.$i.id}</td>
<td>{$arr_select_changes.$i.comment_change}</td>
<td>Сумма КП</td>
<td>История КП</td>
<tr>
{$i=$i+1}
{/foreach}

</table>