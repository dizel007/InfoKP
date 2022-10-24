<?php
/* Smarty version 4.1.0, created on 2022-10-24 11:00:58
  from 'C:\xampp\htdocs\InfoKP\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6356463a6c26e9_10410257',
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
function content_6356463a6c26e9_10410257 (Smarty_Internal_Template $_smarty_tpl) {
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

           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>1</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>332</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№332 от 21.10.2022 ООО ПитерСпортСтрой от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№332 от 21.10.2022 ООО ПитерСпортСтрой от ООО ТД АНМКАС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3651&inn=7810489590&LinkKp=EXCEL/№332 от 21.10.2022 ООО ПитерСпортСтрой от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-10-21</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7810489590" target="_blank">
                  7810489590
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПитерСпортСтрой»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3651&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3651" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3651" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3651" href="index.php?transition=10&id=3651" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3651"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3651" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3651" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3651" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3651" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3651" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3651" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3651" href="reports_show_history_kp.php?typeQuery=5&id_kp=3651" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3651" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>2</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>97</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№97 от 20.10.2022 Хрен Моржовый от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№97 от 20.10.2022 Хрен Моржовый от ООО ТД АНМКАС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3650&inn=0&LinkKp=EXCEL/№97 от 20.10.2022 Хрен Моржовый от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-10-20</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                              &nbsp
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Хрен Моржовый</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3650&InnCustomer=0" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3650" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3650" width="80" class="hidden_class_column">Горячев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3650" href="index.php?transition=10&id=3650" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3650"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3650" class ="limit_width text_left">2022-10-21(zeld): hjgjdj; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3650" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3650" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3650" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3650" >97,848</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3650" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3650" href="reports_show_history_kp.php?typeQuery=5&id_kp=3650" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3650" width ="150" class="hidden_class_column">Конураghj</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>3</td>
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
      <td  class="hidden_class_column" id = "js-KpImportance3649" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3649" width="80" class="hidden_class_column">Штыбко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3649" href="index.php?transition=10&id=3649" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3649"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3649" class ="limit_width text_left">2022-10-21(zeld): fg hsf fghdfgh dfghdfghdfgh; <br><hr>2022-10-20(zeld): ertertert; 44 56565656 bfghf</td>

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
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>4</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>232</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№232 от 18.10.2022 ООО КЛУБ ДЛЯ ДЕТЕЙ КАРАПУЗИКИ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№232 от 18.10.2022 ООО КЛУБ ДЛЯ ДЕТЕЙ КАРАПУЗИКИ от ООО ТД АНМКАС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3652&inn=1657196714&LinkKp=EXCEL/№232 от 18.10.2022 ООО КЛУБ ДЛЯ ДЕТЕЙ КАРАПУЗИКИ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-10-18</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=1657196714" target="_blank">
                  1657196714
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «КЛУБ ДЛЯ ДЕТЕЙ «КАРАПУЗИКИ»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3652&InnCustomer=1657196714" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3652" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3652" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3652" href="index.php?transition=10&id=3652" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3652"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3652" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3652" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3652" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3652" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3652" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3652" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3652" href="reports_show_history_kp.php?typeQuery=5&id_kp=3652" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3652" width ="150" class="hidden_class_column">татария</td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>5</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>1111111</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7810489590" target="_blank">
                  7810489590
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПитерСпортСтрой»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3606&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3606" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3606" width="80" class="hidden_class_column">Горячев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3606" href="index.php?transition=10&id=3606" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3606"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3606" class ="limit_width text_left">2022-10-21(zeld): wertert; <br><hr>2022-10-12(zeld): Просто и ьыстор; <br><hr>2022-09-28(zeld): Созвонился с Андреем; Созвонился с Андреем; Созвонился с Андреем; df jdg kdfh g s;ldg lkxjf hlkdjhgkhdfgl. lsugh lkdng sl gh ;al udh lgskdg lsdgll uhlgsdfghh; df jdg kd; Созвонился с Андреем; Созвонился с Андреем; Созвонился с Андреем; df jdg   kdfh g s;ldg lkxjf hlkdjhgkhdfgl.  lsugh lkdng sl gh ;al udh lgskdg lsdgll uhlgsdfghh; df jdg   kdfh g s;ldg lkxjf hlkdjhgkhdfgl.  lsugh lkdng sl gh ;al udh lgskdg lsdgll uhlgsdfghh; <br><hr>2022-09-22(zeld): цйу; <br><hr>2022-09-15(zeld): ssss; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3606" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3606" width="60" class ="alarmcolor  hidden_class_column">2022-08-30</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3606" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3606" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3606" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3606" href="reports_show_history_kp.php?typeQuery=5&id_kp=3606" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3606" width ="150" class="hidden_class_column">pipofg</td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>6</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>1111111</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7810489590" target="_blank">
                  7810489590
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПитерСпортСтрой»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3607&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3607" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3607" width="80" class="hidden_class_column">Лобов</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3607" href="index.php?transition=10&id=3607" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3607"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3607" class ="limit_width text_left">2022-10-21(zeld): нгнг; <br><hr>2022-09-28(zeld): Созвонился с Андреем; Созвонился с Андреем; <br><hr>2022-09-22(zeld): 555555; <br><hr>2022-09-15(zeld): ertuyrtuy; 34563456; rty; ert; as; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3607" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3607" width="60" class ="alarmcolor  hidden_class_column">2022-10-06</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3607" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3607" >345,345</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3607" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3607" href="reports_show_history_kp.php?typeQuery=5&id_kp=3607" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3607" width ="150" class="hidden_class_column">sssssdsds111tt</td>
               
       </tr>
    
           <tr class ="GreenColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>7</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>63</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=3627008639" target="_blank">
                  3627008639
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">АО «КОТТЕДЖ-ИНДУСТРИЯ»</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3609&InnCustomer=3627008639" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3609" width ="50" class="hidden_class_column">Очень важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3609" width="80" class="hidden_class_column">Штыбко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3609" href="index.php?transition=10&id=3609" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3609"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3609" class ="limit_width text_left">2022-10-20(zeld): Второй нах; Первый нах; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3609" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3609" width="60" class ="alarmcolor  hidden_class_column">2022-09-28</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3609" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3609" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3609" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3609" href="reports_show_history_kp.php?typeQuery=5&id_kp=3609" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3609" width ="150" class="hidden_class_column">1231231231</td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>8</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>87875</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class="sell_comp hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=666666666666" target="_blank">
                  666666666666
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Горсвет зажчс авап</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3596&InnCustomer=666666666666" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3596" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3596" width="80" class="hidden_class_column">Горячев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3596" href="index.php?transition=10&id=3596" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3596"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3596" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3596" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3596" width="60" class ="alarmcolor  hidden_class_column">2022-09-17</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3596" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3596" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3596" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3596" href="reports_show_history_kp.php?typeQuery=5&id_kp=3596" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3596" width ="150" class="hidden_class_column">москва</td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>9</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>87875</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=666666666666" target="_blank">
                  666666666666
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Горсвет зажчс авап</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3595&InnCustomer=666666666666" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3595" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3595" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3595" href="index.php?transition=10&id=3595" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3595"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3595" class ="limit_width text_left">2022-10-20(zeld): авпвапвап; <br><hr>2022-09-28(zeld): ДДДДДОООРРРРТТТИ; Созвонился с Андреем; <br><hr>2022-09-22(zeld): dfgsgsdf; 321; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3595" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3595" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3595" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3595" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3595" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3595" href="reports_show_history_kp.php?typeQuery=5&id_kp=3595" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3595" width ="150" class="hidden_class_column">москва</td>
               
       </tr>
    
           <tr class ="GreenColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>10</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>145И</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class="sell_comp hidden_class_column">
                              &nbsp
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ГорсДорСтрой</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3597&InnCustomer=0" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3597" width ="50" class="hidden_class_column">Очень важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3597" width="80" class="hidden_class_column">Кулиев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3597" href="index.php?transition=10&id=3597" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3597"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3597" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3597" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3597" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3597" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3597" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3597" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3597" href="reports_show_history_kp.php?typeQuery=5&id_kp=3597" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3597" width ="150" class="hidden_class_column">12121212</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>11</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>4545</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-08</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=234" target="_blank">
                  234
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">234234</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3608&InnCustomer=234" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3608" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3608" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3608" href="index.php?transition=10&id=3608" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3608"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3608" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3608" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3608" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3608" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3608" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3608" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3608" href="reports_show_history_kp.php?typeQuery=5&id_kp=3608" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3608" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>12</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>158Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№158Е от 09.03.2022 ООО ПКТ СТРОЙ (КП к закупке№0830600001622000002) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№158Е от 09.03.2022 ООО ПКТ СТРОЙ (КП к закупке№0830600001622000002) ООО ТД АНМАКС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3208&inn=3525395322&LinkKp=EXCEL/№158Е от 09.03.2022 ООО ПКТ СТРОЙ (КП к закупке№0830600001622000002) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-09</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=3525395322" target="_blank">
                  3525395322
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0830600001622000002" alt="konturLink" target="_blank">ООО «ПКТ СТРОЙ»</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/0830600001622000002" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3208&InnCustomer=3525395322" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3208" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3208" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3208" href="index.php?transition=10&id=3208" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3208"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3208" class ="limit_width text_left">2022-03-28(lobov): Созвонился с Андреем Владимировичем. Отправил КП.
Закупка в апреле.; <br><hr>2022-03-16(lobov): Не отвечают. Отправил КП; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3208" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3208" width="60" class ="alarmcolor  hidden_class_column">2022-04-04</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3208" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3208" >332,800</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">93,518,028</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3208" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3208" href="reports_show_history_kp.php?typeQuery=5&id_kp=3208" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3208" width ="150" class="hidden_class_column"> Вологодская обл, Вологда ввв</td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>13</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>153Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№153Е от 04.03.2022 ООО РОТОР (КП к закупке№0164200003022000082) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№153Е от 04.03.2022 ООО РОТОР (КП к закупке№0164200003022000082) ООО ТД АНМАКС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3203&inn=6820036862&LinkKp=EXCEL/№153Е от 04.03.2022 ООО РОТОР (КП к закупке№0164200003022000082) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-04</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=6820036862" target="_blank">
                  6820036862
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0164200003022000082" alt="konturLink" target="_blank">ООО «РОТОР»</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/0164200003022000082" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3203&InnCustomer=6820036862" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3203" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3203" width="80" class="hidden_class_column">Кулиев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3203" href="index.php?transition=10&id=3203" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3203"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3203" class ="limit_width text_left">2022-03-14(guts): дубль на вотс ап; Городской телефон - говорят, что ошибка. Мобильный не але; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3203" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3203" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3203" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3203" >5,022,221</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">11,989,796</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3203" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3203" href="reports_show_history_kp.php?typeQuery=5&id_kp=3203" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3203" width ="150" class="hidden_class_column">Тамбовская область, с. Пичаево1111</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>14</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>147Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№147Е от 03.03.2022 Меликов Сергей Еврасович (КП к закупке№0126300029122000040) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№147Е от 03.03.2022 Меликов Сергей Еврасович (КП к закупке№0126300029122000040) ООО ТД АНМАКС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3197&inn=310259684507&LinkKp=EXCEL/№147Е от 03.03.2022 Меликов Сергей Еврасович (КП к закупке№0126300029122000040) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-03</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=310259684507" target="_blank">
                  310259684507
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0126300029122000040" alt="konturLink" target="_blank">Меликов Сергей Еврасович</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/0126300029122000040" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3197&InnCustomer=310259684507" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3197" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3197" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3197" href="index.php?transition=10&id=3197" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3197"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3197" class ="limit_width text_left">2022-03-14(guts): телефон не але, вотс апа нет. Дубль КП на почту; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3197" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3197" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3197" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3197" >425,000</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">1,058,060</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3197" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3197" href="reports_show_history_kp.php?typeQuery=5&id_kp=3197" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3197" width ="150" class="hidden_class_column">Белгородский район, с. Таврово</td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>15</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>145Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№145Е от 03.03.2022 ООО ПитерСпортСтрой (КП к закупке№0157200000322000022) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/parce_excel_kp.php?LinkKp=EXCEL/№145Е от 03.03.2022 ООО ПитерСпортСтрой (КП к закупке№0157200000322000022) ООО ТД АНМАКС.xlsx" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3195&inn=7810489590&LinkKp=EXCEL/№145Е от 03.03.2022 ООО ПитерСпортСтрой (КП к закупке№0157200000322000022) ООО ТД АНМАКС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-03</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7810489590" target="_blank">
                  7810489590
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0157200000322000022" alt="konturLink" target="_blank">ООО «ПитерСпортСтрой»</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/0157200000322000022" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3195&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3195" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3195" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3195" href="index.php?transition=10&id=3195" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3195"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3195" class ="limit_width text_left">2022-10-04(zeld): ghmcbmnbnm; <br><hr>2022-09-28(zeld): ДДДДДОООРРРРТТТИ; <br><hr>2022-09-15(zeld): 34523452345; <br><hr>2022-03-11(guts): трубки не берут, дубль кп на почту.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3195" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3195" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3195" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3195" >416,900</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">40,720,000</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3195" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3195" href="reports_show_history_kp.php?typeQuery=5&id_kp=3195" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3195" width ="150" class="hidden_class_column">Псковская область, Порховский район район, г. Порхов.</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>16</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>114Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-02-21</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=5610004196" target="_blank">
                  5610004196
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/1053600002422000001" alt="konturLink" target="_blank">АО «ОРЕНБУРГОБЛГРАЖДАНСТРОЙ»</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/1053600002422000001" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3156&InnCustomer=5610004196" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3156" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3156" width="80" class="hidden_class_column">Лобов</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3156" href="index.php?transition=10&id=3156" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3156"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3156" class ="limit_width text_left">2022-05-04(lobov): ЛПР Сергей, есть предложения от Аквастока и от местных.
Отправил КП на рассмотрение.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3156" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3156" width="60" class ="alarmcolor  hidden_class_column">2022-05-17</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3156" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3156" >543,710</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">295,923,200</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3156" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3156" href="reports_show_history_kp.php?typeQuery=5&id_kp=3156" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3156" width ="150" class="hidden_class_column">Оренбургская обл, Орск</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>17</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td>112Е</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
         

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-02-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class=" hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=7736279690" target="_blank">
                  7736279690
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0149200002321009766" alt="konturLink" target="_blank">ООО «ТОРИОН»</a>
                      </td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

            
                  <td><a href= "https://zakupki.kontur.ru/0149200002321009766" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3154&InnCustomer=7736279690" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3154" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3154" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3154" href="index.php?transition=10&id=3154" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3154"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3154" class ="limit_width text_left">2022-04-13(lobov): Отправил КП.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3154" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3154" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3154" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3154" >818,300</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">1,869,980,893</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3154" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3154" href="reports_show_history_kp.php?typeQuery=5&id_kp=3154" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3154" width ="150" class="hidden_class_column">Мурманская область, г. Мурманск</td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div><?php }
}
