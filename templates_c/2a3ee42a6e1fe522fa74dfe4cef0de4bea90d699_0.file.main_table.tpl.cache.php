<?php
/* Smarty version 4.1.0, created on 2022-11-07 14:18:55
  from 'C:\xampp\htdocs\InfoKP\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6368e99fea5332_21576720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3ee42a6e1fe522fa74dfe4cef0de4bea90d699' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\main_table.tpl',
      1 => 1667807090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6368e99fea5332_21576720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18903061066368e99fe85f36_63296441';
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
               <td>Тип</td>
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

 <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end_item_on_page']->value+1 - ($_smarty_tpl->tpl_vars['start_item_on_page']->value) : $_smarty_tpl->tpl_vars['start_item_on_page']->value-($_smarty_tpl->tpl_vars['end_item_on_page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start_item_on_page']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
          <tr class ="<?php echo $_smarty_tpl->tpl_vars['KpImportanceTable']->value[$_smarty_tpl->tpl_vars['i']->value];?>
  <?php echo $_smarty_tpl->tpl_vars['statusKpClass']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['StringColor']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
 <!-- ***************************  Номер КП  ********************************************* -->              
       <td><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['KpNumber'];?>
</td> 
<!-- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

         <?php ob_start();
echo $_smarty_tpl->tpl_vars['exist_excel_file']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 == 1)) {?>
             <td><a href="<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['LinkKp'];?>
"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
         <?php } else { ?> 
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
        <?php }?> 
<!-- *************************** парсер EXCEL файл  ********************************************** -->   

         <?php ob_start();
echo $_smarty_tpl->tpl_vars['exist_excel_file']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2 == 1)) {?>
             <td><a href="open_excel/parce_excel_kp.php?LinkKp=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['LinkKp'];?>
" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
         <?php } else { ?> 
       <td><img style = "opacity: 0.2" src="icons/see_excel.png" alt="Excel"></td>
        <?php }?> 

<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['exist_excel_file']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable3 = ob_get_clean();
if (($_prefixVariable3 == 1)) {?>  
   <td><a href = "xls_schet/make_schet.php?id=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
&inn=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['InnCustomer'];?>
&LinkKp=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['LinkKp'];?>
"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
        <?php } else { ?>
    <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
      <?php }?>  

<!-- ***************************  Дата КП  ************************************************* -->          
         <td><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['KpData'];?>
</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class="<?php echo $_smarty_tpl->tpl_vars['second_sell_cl']->value[$_smarty_tpl->tpl_vars['i']->value];?>
 hidden_class_column">
            <?php if ($_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['InnCustomer'] <> 0) {?>
            <a href="show_comp_by_inn.php?inn=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['InnCustomer'];?>
" target="_blank">
                  <?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['InnCustomer'];?>

            </a>
            <?php } else { ?>
                  &nbsp
            <?php }?>

       </td>
<!-- ***************************  PDF file  ***************************************** -->

         <?php ob_start();
echo $_smarty_tpl->tpl_vars['exist_pdf_file']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable4 == 1)) {?>
             <td><a href="<?php echo $_smarty_tpl->tpl_vars['LinkKpPdf']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/pdf.png" alt="Excel" ></a></td>
         <?php } else { ?> 
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
        <?php }?> 
<!-- ***************************  Тип Прихода КП  ***************************************** -->
         <?php ob_start();
echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['type_kp'];
$_prefixVariable5 = ob_get_clean();
if (($_prefixVariable5 > 0)) {?> 
            <td>
            <img class="scale11" style = "opacity:0.6" src="icons/type_kp/<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['type_kp'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['type_kp'];?>
">
             </td>
           <?php } else { ?>  
           <td></td>
          <?php }?>

<!-- ***************************  Наименование покупателя  ***************************************** -->
          <td width ="150"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['NameCustomer'];?>
</td>
          
<!-- ******************************  Icons konturLink   ***************************************************** -->

           <?php ob_start();
echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['konturLink'];
$_prefixVariable6 = ob_get_clean();
if (($_prefixVariable6 <> '')) {?> 
                  <td><a href= "<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['konturLink'];?>
" alt="konturLink" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/kontur.png" alt="SeeLinkKontur"></a></td>
             <?php } else { ?>
               <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             <?php }?>


<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
&InnCustomer=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['InnCustomer'];?>
" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" width ="50" class="hidden_class_column"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['KpImportance'];?>
</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" width="80" class="hidden_class_column"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['Responsible'];?>
</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" href="index.php?transition=10&id=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class ="limit_width text_left"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['Comment'];?>
</td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" width="60" class ="<?php echo $_smarty_tpl->tpl_vars['DateNextCallTable']->value[$_smarty_tpl->tpl_vars['i']->value];?>
  hidden_class_column"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['DateNextCall'];?>
</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class = "<?php echo $_smarty_tpl->tpl_vars['KpConditionTable']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['KpCondition'];?>
</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['KpSum'];?>
</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['TenderSum'];?>
</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['FinishContract'];?>
</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" href="reports_show_history_kp.php?typeQuery=5&id_kp=<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress<?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" width ="150" class="hidden_class_column"><?php echo $_smarty_tpl->tpl_vars['array_with_all_kp']->value[$_smarty_tpl->tpl_vars['i']->value]['adress'];?>
</td>
               
       </tr>
    
 <?php }
}
?>
          </tbody>
      </table>
  </div>
</div><?php }
}
