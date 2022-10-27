<?php
/* Smarty version 4.1.0, created on 2022-10-27 16:11:29
  from 'C:\xampp\htdocs\InfoKP\templates\modal\modal_insert_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635a83817cc513_10065649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ed88b1e15f7fb9ba237f055fbfef5952244119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_insert_email.tpl',
      1 => 1666342347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a83817cc513_10065649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1229867507635a83817c8690_28831907';
if (($_smarty_tpl->tpl_vars['typeQuery']->value == 409)) {?>
  
  <div class="dm-overlay" id="win409">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОЙ ЭЛЕКТРОННОЙ ПОЧТЫ<br><br></div>

<form  action="pdo_connect_db/insert_email.php" method="get">
  <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
    <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td>
              <input type="hidden" name="InnCustomer" value="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
  
           </td>
      </tr>
      <tr> 
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      
      <tr> 
          <td valign="top">email</td>
           <td>   
              <input type="email"  name="new_email" value="">
	         </td>
      </tr>
      <tr>           
        <td valign="top">Актуальность почты</td>
              <td> 
            
                  <select size="1" name="actual_email">
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option selected value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td>   
                 <textarea name="commentEmail" rows="3" cols="30"></textarea>
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
}
