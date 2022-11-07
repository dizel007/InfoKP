<?php
/* Smarty version 4.1.0, created on 2022-11-07 15:59:34
  from 'C:\xampp\htdocs\InfoKP\templates\modal\modal_update_phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_636901369d45c9_65450398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9b20e964a801dc7519e65db32b410d5142e217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_update_phone.tpl',
      1 => 1666271633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636901369d45c9_65450398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '861512524636901369cc8c9_39762728';
if (($_smarty_tpl->tpl_vars['typeQuery']->value == 300)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['telephons_company']->value, 'tel_value');
$_smarty_tpl->tpl_vars['tel_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tel_value']->value) {
$_smarty_tpl->tpl_vars['tel_value']->do_else = false;
if ($_smarty_tpl->tpl_vars['tel_value']->value['id'] == $_smarty_tpl->tpl_vars['id_phone']->value) {?>
  <div class="dm-overlay" id="win300">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="pdo_connect_db/update_telephone.php?id=<?php echo $_smarty_tpl->tpl_vars['id_phone']->value;?>
" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>
 <input type="hidden" name="InnCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
">
 <caption><b>Телефон: <?php echo $_smarty_tpl->tpl_vars['tel_value']->value['telephone'];?>
</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_phone_cor" value="<?php echo $_smarty_tpl->tpl_vars['id_phone']->value;?>
">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      
      <tr>           
        <td valign="top">WhatsApp</td>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
</td>
        <td> 
                  <select size="1" name="whatsapp">
                      <option selected value = "<?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
</option>
                      <option value="1">есть</option>
                      <option value="0">нет</option>
                  </select>
            
          </td>
    </tr>

    <tr >           
        <td valign="top">Актуальность номера</td>



        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
</td>
         <td> 
            
                  <select id="js-phone-num" size="1" name="actual_phone">
                      <option id="js-new-modal-" selected value = "<?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
</option>
                      <option value="Актуальный">Актуальный</option>
                      <option value="Неактуальный">Неактуальный</option>
                      <option value="Не звонить">Не звонить</option>
                      <option value="Новый">Новый</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

     <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['name'];?>
</td>
          <td>   
              <textarea name="contactName" rows="1" cols="30"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['name'];?>
</textarea>
         </td>
     </tr>
  
     <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['comment'];?>
</td>
          <td>   
              <p>    
                <textarea name="commentPhone" rows="3" cols="30"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['comment'];?>
</textarea>
              </p>
         </td>
      </tr>


                           
 
           </table>
                                    
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
       </div>
   </div>
  </div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 <?php }
}
}
