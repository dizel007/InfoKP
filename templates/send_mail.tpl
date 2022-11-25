<div class="mail_about_company">
<p class="mail-center"> ФОРМА ДЛЯ ОТПРАВКИ ПИСЬМА КЛИЕНТУ</p>
    {if ($link_pdf_excel <> '') } 
    {*   если есть Ексель файл, то выводим данне с него *}
        <i>Вводный текст:</i> <b>{$ZakupName}</b><br>
        <i>Заказчик :</i> <b>{$Zakazchik}</b><br>
        <i>ИНН :</i><b> {$InnCustomer} </b><br>
        <i>EMAIL из КП :</i> <b>{$Email}</b>
    {else} {* Если ексель файла нет *}
      <h5 class ="alarm_font">КП в формате EXCEL отсутствует на сервере </h5>
    {/if}


<hr>
<form enctype="multipart/form-data" action="mailer/sender_letter_many.php"  method="post">
    <!-- передаем ID  закупки -->
    
    <input hidden name="id" value={$id}>
    <!-- передаем Наименование Заказчика -->
    <input hidden name="Zakazchik" value={$Zakazchik}>
    <!-- имя пользователя : --> 
    <input hidden name="user_mail" value={$userdata["user_login"]}>
    <!-- Наименование Закупки : -->
    <input hidden name="ZakupName" value = {$ZakupNameTemp}>



<div class="container">
{********************* Блок с выводм емайлов ************************************}
<div class="emails_from_db">

{if ($InnCustomer <>'')} 

       {if ($count_arr_emails > 0)} 
            Email из Базы Данных: (Выберите один EMAIL , либо введите новый)
            <br><br>
              <table>
                <tr>
                  <td class="emails_table_db email_table_shapka">email</td>
                  <td class="emails_table_db email_table_shapka">Состояние</td>
                  <td class="emails_table_db email_table_shapka">Коммент</td>
                  <td class="emails_table_db email_table_shapka">Дата создания</td>
                </tr>

                {foreach from=$arr_emails item=$value }
                <tr>
                  <td class="emails_table_db">
                  <input type="radio" name="email_from_kp" value="{$value['email']}">{$value['email']}
                  </td>
                  <td class="emails_table_db">{$value['actual']}</td>
                  <td class="emails_table_db">{$value['comment']}</td>
                  <td class="emails_table_db">{$value['date_write']}</td>
                </tr>
                {/foreach} 
         </table>
     {else}
      <b class="alarm_font">В базе данных отсутствует EMAIL!!!</b>
      <br><br>
       <label for="email_from_kp">Email из КП </label>
    <input type="radio" name="email_from_kp" value="{$Email}">{$Email}
    <br><br>
  {/if}
        {else}
      <b class="alarm_font">В базе данных отсутствует EMAIL!!!</b>
      <br><br>
       <label for="email_from_kp">Email из КП </label>
    <input type="radio" name="email_from_kp" value="{$Email}">{$Email}
    <br><br>
   
{/if}

<b>Новый EMAIL для отправки КП</b><br>  
<input type="email"  name="email_from_kp_new" value=""><Br>

</div> {* конец блок с выводом емайлов*}

{********************* Вложение в письмо ************************************}
<div class="add_post_file">
{* Когда нужно отправить файл загруженный на сервер *}
{if $real_file == 1 }

  <h5>Подгрузиться либо предложенный файл с сервера, либо подцепите новые файлы</h5>
      к письму подгрузиться файл: 
      <a href="{$link_pdf}" target="_blank"><img src="icons/table/pdf.png"></a>
      <b>{$link_pdf_text}</b>
      <input type="hidden" name="link_pdf" value={$link_pdf}>
       <br><br>Либо подгрузить другие файлы с КП  <b>(макс. размер 0,5 Мб каждый)</b> <br> подгрузите файл(ы) для отправки :
      <input type="hidden" name="MAX_FILE_SIZE" value="500000" multiple>   
      <input name="upload_file[]" type="file" multiple>
  

{else}
{* Когда нужно отправить файл новый файл *}

  <b class="alarm_font">файл {$link_pdf_text} на сервере отсутствует.</b> <br><br> подгрузите файл(ы) для отправки :
 <input type="hidden" name="MAX_FILE_SIZE" value="500000" multiple>   
 <input name="upload_file[]" type="file" multiple>

{/if}

</div> {* конец блока с вложением письма*}
</div> {* конец контейнера *}



{********************* ТЕКСТ ПИСЬМА ************************************}
<div class="container">

<div class = "post_text">

<h4>Предмет письма</h4>
<p>
<input type="text"  name="subject_theme"  size="50" value = "КП от ТД АНМАКС" placeholder="КП от ТД АНМАКС">
</p>
<h5>ТЕКСТ ПИСЬМА</h5>
Добрый день!<br>
<textarea name="bodypost" cols="100" rows="4">
{if $type_kp == 6 }
Предлагаем рассмотреть приобретение следующей продукции, для гос.закупки
{/if}
{$ZakupName}
</textarea>
<br>
<input type="checkbox"  name="certifikat" checked value="На всю предлагаемую продукцию имеются сертификаты."> 
<label for="certifikat">На всю предлагаемую продукцию имеются сертификаты.</label> <br>

<input type="checkbox"  name="better_offer" checked value="Если у Вас есть более интересное предложение, сообщите нам, пожалуйста, мы постараемся улучшить условия нашего КП.">
<label for="better_offer">Если у Вас есть более интересное предложение, сообщите нам, пожалуйста, мы постараемся улучшить условия нашего КП.</label> <br>

  <br>
    С уважением<br>
    ООО ТД АНМАКС<br>
    по всем вопросам можете получить консультацию<br>
    по телефону 8 (495) 787-24-05
  </div> {* конец текста пиьсма post_text *}
  </div> {* конец контейнера *}
<div class="mail_button">
    <button class="submit" type="submit">Отправить</button>
</div> {* конец mail_button *}
</form>
</div> {* конец класса mail_about_company*}

