  <div class="dm-overlay js-modal " data-modal = "write_comment">
     <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal"  >
                  <!-- <a href="#close" class="close js-modal-close"></a> -->
                  <a class="close js-modal-close"></a>

{$i = 0}
  <div>
    <select hidden id = "js-id" name="id">
      <option id ="js-new-modal-id" value ="$id">{$id}</option>
            
    </select>
  </div>

<input hidden id="js-modal-user-login" value = {$userdata['user_login']}>

 <div><b> Номер КП : <span id="js-new-modal-KpNumber">$KpNumber</span></b></div>

 {* <!-- <div>Дата КП :$KpData</div> --> *}

 {* ****************************** ИНН Заказчика  *********************************** *}
 <div>ИНН Заказчика :<span id="js-new-modal-InnCustomer">$InnCustomer</span></div>

{* ****************************** Наименование Заказчика  *********************************** *}

 <div><b>Наименование Заказчика :<span id="js-new-modal-NameCustomer">$NameCustomer</span></b></div>
  <hr>
<div>ID закупки:<span id="js-new-modal-idKp">$idKp</span></div>
  <hr>
{*<!-- <div>Статус КП : <span id="js-new-modal-StatusKp">$StatusKp</span></div> -->*}





<table class="modal_change_all_zakup">
<tr class="modal_change_all_zakup_tr">
{* ****************************** Важность  *********************************** *}
    <td width ="150px" class="modal_change_all_zakup_td">Важность </td>
    <td class="modal_change_all_zakup_td"> 
   
          <select id="KpImportance" size="1" name="KpImportance">
            <option id="js-new-modal-KpImportance" selected value=""></option>  
            <option value="Нейтрально">Нейтрально</option>
            <option value="Важно">Важно</option>
            <option on value="Очень важно">Очень важно</option>
          </select>
    
    </td>
</tr>
<tr class="modal_change_all_zakup_tr">
{* ****************************** Ответственный  *********************************** *}
    <td width ="150px" class="modal_change_all_zakup_td">Ответственный </td>
    <td class="modal_change_all_zakup_td"> 
    
            <select id="Responsible" size="1" name="Responsible">
            <option id="js-new-modal-Responsible" selected value = ""></option>
            {for  $i=0 to $count_users-1}
                  <option value="{$active_user_names_arr_smarty[$i]}">{$active_user_names_arr_smarty[$i]}</option>
            {/for}
        </select>
    
    </td>
</tr>

</table>

 <hr>
{* ****************************** Комментарий  *********************************** *}
<div> 
    <p>Комментарий :<span id="js-new-modal-Comment">$Comment</span></p>
      <p id="Comment">    
         <textarea id="textarea-Comment" name="Comment" rows="2" cols="80"></textarea>
      </p>
</div>
<hr>

<table class="modal_change_all_zakup">
<tr class="modal_change_all_zakup_tr">
{* ****************************** Дата след.Звонка  *********************************** *}
    <td width ="150px" class="modal_change_all_zakup_td">Дата след.Звонка </td>
    <td class="modal_change_all_zakup_td"> <input id="DateNextCall" type="date" name="DateNextCall" value ="$DateNextCall"></td>
</tr>

{* ****************************** Состояние КП *********************************** *}
<tr class="modal_change_all_zakup_tr">
  <td class="modal_change_all_zakup_td">Состояние КП</td>
  <td class="modal_change_all_zakup_td">
      <select id="KpCondition" size="1" name="KpCondition">
         <option id="js-new-modal-KpCondition" selected value = ""></option>
             {for  $i=0 to count($AllKpConditions)-1}
               <option value="{$AllKpConditions[$i]}">{$AllKpConditions[$i]}</option>
             {/for} 
        {*html_options  values=$array_condition_kp output=$array_condition_kp*}
    </select>

  </td>
</tr>

{* ****************************** Сумма КП *********************************** *}
<tr class="modal_change_all_zakup_tr">
    <td class="modal_change_all_zakup_td">Сумма КП  </td>
    <td class="modal_change_all_zakup_td"> <input type="number" id="KpSum" name="KpSum" value ="$KpSum"></td>
</tr>

{* ****************************** Контракт закрыт *********************************** *}

<tr class="modal_change_all_zakup_tr">
<td class="modal_change_all_zakup_td">Контракт закрыт</td>
  <td class="modal_change_all_zakup_td">
      <select id="FinishContract" size="1" name="FinishContract">
          <!-- <option id="js-new-modal-FinishContract" selected value = "$FinishContract">$FinishContract</option> -->
          <option value="0">Контракт НЕ закрыт</option>
          <option value="1">Контракт закрыт</option>
    </select>
   </td>
</tr>
</table>






{* ****************************** НМЦК Тендера *********************************** *}
<div style="display: none"><p>НМЦК Тендера КП : <span id="js-new-modal-TenderSum">$TenderSum</span></p></div>

{* ****************************** Дата заключения Контакта *********************************** *}
 
<div style="display: none"> 
    <p>Дата заключения Контакта 
    <input hidden id="dateContract" type="date" name="dateContract" value ="$dateContract">
    Процент выполнения  <input hidden type="number" id="procent_work" name="procent_work" value ="$procent_work"></p>
    <p>Дата окончания Контакта <input hidden id="dateFinishContract" type="date" name="dateFinishContract" value ="$dateFinishContract"></p>
</div>

 


{* ****************************** Адрес поставки *********************************** *}
<div> 
  <p>Адрес поставки : </p> 
  <textarea id="textarea-Adress" name="Adress" rows="2" cols="80"><span id="js-new-modal-Adress">$Adress</span></textarea>
</div>
<div class="container-for-btn">
<div class = "btncommentClass button">СОХРАНИТЬ</div>                
</div>    

              
       

              </div>
          </div>
      </div>
  </div>