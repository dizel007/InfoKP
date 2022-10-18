
<div class="">
        <div class="our_table">
        <table width="100%" class="drawtable employee_table">
          <thead>
            <tr class="DrawDark">
               <td class="hidden_class_column">пп</td>
               <td>№КП</td>
               <td>Ex</td> 
               <td>sEx</td> 
               <td>Сч</td> 
               <td width ="60" >Дата КП</td>
               <td width ="70" class="hidden_class_column">ИНН</td>
               <td>PDF</td>
               <td>Наименование</td>
               <td>Кон</td>
               <td>EM</td>
               <td class="hidden_class_column">Важность</td>
          
               <td class="hidden_class_column">Ответственный</td>
               <td>id</td>
               <td>Комментарий</td>
               <td>Ред</td>
               <td width ="60" class="hidden_class_column">Сл.звонок</td>
               <td class="hidden_class_column">Состояние</td>
               <td>Сумма КП</td>
               <td width ="50" class="hidden_class_column">НМЦК Закупки</td>
         {*    <td class="hidden_class_column">ДКЗ</td>      *}
             <td class="hidden_class_column">КЗ</td>       
         {*      <td width ="60" class="hidden_class_column">Финиш</td> *}
               <td>Ист</td>
               <td class="hidden_class_column">Адрес поставки</td>
         </tr>
         </thead>
      <tbody>

 {for $i = $start_item_on_page to $end_item_on_page}
          <tr class ="{$KpImportanceTable.$i}  {$statusKpClass.$i} {$StringColor.$i}">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>{$i+1}</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>{$array_with_all_kp.$i.KpNumber}</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

         {if ({$exist_excel_file.$i} == 1) }
             <td><a href="{$array_with_all_kp.$i.LinkKp}"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
         {else} 
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
        {/if} 
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

         {if ({$exist_excel_file.$i} == 1) }
             <td><a href="open_excel/parce_excel_kp.php?LinkKp={$array_with_all_kp.$i.LinkKp}" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
         {else} 
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
        {/if} 

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
  {if ({$exist_excel_file.$i} == 1) }  
   <td><a href = "xls_schet/make_schet.php?id={$array_with_all_kp.$i.id}&inn={$array_with_all_kp.$i.InnCustomer}&LinkKp={$array_with_all_kp.$i.LinkKp}"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
        {else}
    <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
      {/if }  

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>{$array_with_all_kp.$i.KpData}</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class="{$second_sell_cl.$i} hidden_class_column">
            {if $array_with_all_kp.$i.InnCustomer <> 0}
            <a href="show_comp_by_inn.php?inn={$array_with_all_kp.$i.InnCustomer}" target="_blank">
                  {$array_with_all_kp.$i.InnCustomer}
            </a>
            {else}
                  &nbsp
            {/if}

       </td>
<!-- ***************************  PDF file  ***************************************** -->

         {if ({$exist_pdf_file.$i} == 1) }
             <td><a href="{$LinkKpPdf.$i}" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/pdf.png" alt="Excel" ></a></td>
         {else} 
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
        {/if} 


<!-- ***************************  Наименование покупателя  ***************************************** -->
           {if ({$array_with_all_kp.$i.konturLink} <> '') } 
                      <td width ="150" ><a href="{$array_with_all_kp.$i.konturLink}" alt="konturLink" target="_blank">{$array_with_all_kp.$i.NameCustomer}</a>
                      </td>
             {else}
               <td width ="150">{$array_with_all_kp.$i.NameCustomer}</td>
             {/if}
<!-- ******************************  Icons konturLink   ***************************************************** -->

           {if ({$array_with_all_kp.$i.konturLink} <> '') } 
                  <td><a href= "{$array_with_all_kp.$i.konturLink}" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             {else}
               <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             {/if}


<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id={$array_with_all_kp.$i.id}&InnCustomer={$array_with_all_kp.$i.InnCustomer}" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance{$array_with_all_kp.$i.id}" width ="50" class="hidden_class_column">{$array_with_all_kp.$i.KpImportance}</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible{$array_with_all_kp.$i.id}" width="80" class="hidden_class_column">{$array_with_all_kp.$i.Responsible}</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="{$array_with_all_kp.$i.id}" href="index.php?transition=10&id={$array_with_all_kp.$i.id}" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id={$array_with_all_kp.$i.id}"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment{$array_with_all_kp.$i.id}" class ="limit_width text_left">{$array_with_all_kp.$i.Comment}</td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "{$array_with_all_kp.$i.id}" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall{$array_with_all_kp.$i.id}" width="60" class ="{$DateNextCallTable.$i}  hidden_class_column">{$array_with_all_kp.$i.DateNextCall}</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition{$array_with_all_kp.$i.id}" class = "{$KpConditionTable.$i}">{$array_with_all_kp.$i.KpCondition}</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum{$array_with_all_kp.$i.id}" >{$array_with_all_kp.$i.KpSum}</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">{$array_with_all_kp.$i.TenderSum}</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
{*{if (({$array_with_all_kp.$i.dateContract}<>"0000-00-00") && ({$array_with_all_kp.$i.dateContract}))}
      
     <td class="hidden_class_column" id = "js-dateContract{$array_with_all_kp.$i.id}"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :{$array_with_all_kp.$i.dateContract}"></td>
        {else}
        <td class="hidden_class_column" id = "js-dateContract{$array_with_all_kp.$i.id}">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

      {/if} 
*}
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract{$array_with_all_kp.$i.id}" >{$array_with_all_kp.$i.FinishContract}</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
{*      <td class="hidden_class_column" id = "js-dateFinishContract{$array_with_all_kp.$i.id}" width="60">{$array_with_all_kp.$i.dateFinishContract}</td>
*}
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="{$array_with_all_kp.$i.id}" href="reports_show_history_kp.php?typeQuery=5&id_kp={$array_with_all_kp.$i.id}" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress{$array_with_all_kp.$i.id}" width ="150" class="hidden_class_column">{$array_with_all_kp.$i.adress}</td>
               
       </tr>
    
 {/for}
          </tbody>
      </table>
  </div>
</div>