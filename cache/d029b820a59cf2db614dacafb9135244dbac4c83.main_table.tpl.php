<?php
/* Smarty version 4.1.0, created on 2022-10-20 15:05:47
  from 'C:\xampp\htdocs\InfoKP\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6351399b017bb9_28503740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3ee42a6e1fe522fa74dfe4cef0de4bea90d699' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\main_table.tpl',
      1 => 1666099721,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6351399b017bb9_28503740 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                      <td class="hidden_class_column">КЗ</td>       
                        <td>Ист</td>
               <td class="hidden_class_column">Адрес поставки</td>
         </tr>
         </thead>
      <tbody>

           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>1</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>96</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№96 от 19.10.2022 ООО ТД АНМАКС от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№96 от 19.10.2022 ООО ТД АНМАКС от ООО ТД АНМКАС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3649&inn=7727830864&LinkKp=EXCEL/№96 от 19.10.2022 ООО ТД АНМАКС от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-10-19</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7727830864" target="_blank">
                  7727830864
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ТД «АНМАКС»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3649&InnCustomer=7727830864" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3649" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3649" width="80" class="hidden_class_column">Штыбко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3649" href="index.php?transition=10&id=3649" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3649"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3649" class ="limit_width text_left">2022-10-20(zeld): ertertert; 44 56565656 bfghf</td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3649" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3649" width="60" class ="alarmcolor  hidden_class_column">2022-10-20</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3649" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3649" >454,545</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3649" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3649" href="reports_show_history_kp.php?typeQuery=5&id_kp=3649" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3649" width ="150" class="hidden_class_column">Popa new gwen</td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div><?php }
}
