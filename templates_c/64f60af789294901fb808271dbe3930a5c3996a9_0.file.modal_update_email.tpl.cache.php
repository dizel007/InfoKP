<?php
/* Smarty version 4.1.0, created on 2022-10-24 16:02:27
  from 'C:\xampp\htdocs\InfoKP\templates\modal\modal_update_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63568ce32447d5_34984912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f60af789294901fb808271dbe3930a5c3996a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InfoKP\\templates\\modal\\modal_update_email.tpl',
      1 => 1666344026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63568ce32447d5_34984912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '70366692263568ce3240947_07309168';
?>
 <?php if ($_smarty_tpl->tpl_vars['typeQuery']->value == 400) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emails_company']->value, 'email_value');
$_smarty_tpl->tpl_vars['email_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_value']->value) {
$_smarty_tpl->tpl_vars['email_value']->do_else = false;
?>
 <?php if ($_smarty_tpl->tpl_vars['email_value']->value['id'] == $_smarty_tpl->tpl_vars['id_email']->value) {?>
  <div class="dm-overlay" id="win400">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ EMAIL<br><br></div>
                  <form  action="pdo_connect_db/update_email.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>
  <input type="hidden" name="InnCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
">
 <caption><b>Email: <?php echo $_smarty_tpl->tpl_vars['email_value']->value['email'];?>
</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_email_cor" value="<?php echo $_smarty_tpl->tpl_vars['id_email']->value;?>
">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      <tr>           
      </tr>

      <tr>           
        <td valign="top">Актуальность email</td>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
</td>
         <td> 
            
                  <select id="js-actual_email" size="1" name="actual_email">
                      <option id="js-new-modal-" selected value = "<?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
</option>
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['comment'];?>
</td>
          <td>   
              <p>    
                <textarea name="commentEmail" rows="3" cols="30"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['comment'];?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
