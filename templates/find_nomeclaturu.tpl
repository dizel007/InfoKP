{include file="../templates/header.tpl"}
<link rel = "stylesheet" href = "../css/style.css">
<div class="">
     <div class="our_table">
       <table width="100%" class="drawtable employee_table">
         <thead>
            <tr class="DrawDark">
               <td class="hidden_class_column">пп</td>
               <td>Наименование</td>
               <td>ед.зм</td> 
               <td>Кол-во</td> 
               <td>№КП и дата</td> 
               <td>См</td>
               <td>Ex</td>
               <td>Рее</td>
               <td>Адрес</td>

         </tr>
         </thead>
      <tbody>
{$i=0}
{foreach from=$prods_all item=items}
 {foreach from=$items item=one_item}
   <tr class ="">
      <td>{$i+1}</td>
      <td>{$one_item['name']}</td>
      <td>{$one_item['ed_izm']}</td>
      <td>{$one_item['kol']}</td>
      {* <td rowspan="3">Русская</td>*}

      <td>{$one_item['KpNumber']} от {$one_item['KpData']}</td>
      <td><a href = "../open_excel/parce_excel_kp.php?LinkKp={$one_item['LinkKp']}"><img style = "opacity: 0.7" src="../icons/see_excel.png" alt="Excel"></a></td>
      
      <td><a href = "../{$one_item['LinkKp']}"><img style = "opacity: 0.7" src="../icons/table/excel.png" alt="Excel"></a></td>

      <td><a href = "..?transition=10&id={$one_item['id']}"><img style = "opacity: 0.7" src="../icons/see_excel_1.png" alt="Excel"></a></td>




      <td>{$one_item['adress']}</td>
      
   </tr>
       {$i = $i + 1}
  {/foreach}

{/foreach}

    
          </tbody>
      </table>
  </div>
</div>
