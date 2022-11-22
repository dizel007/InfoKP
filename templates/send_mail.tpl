<div class=\"col-12 shadow-lg up-page\">
<h5 class=\"center\"> ФОРМА ДЛЯ ОТПРАВКИ ПИСЬМА КЛИЕНТУ</h5>
{if ($link_pdf_excel <>'') } 
{*   если есть Ексель файл, то выводим данне с него *}
     <b>{$ZakupName}</b><br>
		 <b>Заказчик : {$Zakazchik} </b><br>
		 <b>EMAIL из КП : {$Email}</b>
{else} {* Если ексель файла нет *}
  <h5 class ="text-danger">КП в формате EXCEL отсутствует на сервере </h5>
{/if}
<br><br>
</div>

<form enctype="multipart/form-data" action="mailer/sender_letter_many.php"  method="post">
    <!-- передаем ID  закупки -->
    <input hidden name="id" value={$id}>
    <!-- передаем Наименование Заказчика -->
    <input hidden name="Zakazchik" value={$Zakazchik}>
    <!-- имя пользователя : --> 
    <input hidden name="user_mail" value={$userdata["user_login"]}>
    <!-- Наименование Закупки : -->
    <input hidden name="ZakupName" value = {$ZakupNameTemp}>


<div class="">

{if (isset($arr_emails))} 
    <h5>Email из Базы Данных: (Выберите один EMAIL , либо введите новый)</h5>
            <table>
            {foreach from=$arr_emails item=$value }
            <tr>
              <td>
              <input type="radio" name="email_from_kp" value="{$value['email']}">{$value['email']}
              </td>
              <td>{$value['actual']}</td>
              <td>{$value['comment']}</td>
              <td>{$value['date_write']}</td>

            </tr>
            {/foreach} 
            </table>
    {else}
     <b class="text-danger">В базе данных отсутствует EMAIL!!!</b>
     <br>
{/if}

<b>Новый EMAIL для отправки КП</b><br>  
<input type="email"  name="email_from_kp_new" value=""><Br>
</div>

  <br>    <br>    

<div class ="">

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

  <b class="text-danger">файл {$link_pdf_text} на сервере отсутствует.</b> <br><br> подгрузите файл(ы) для отправки :
 <input type="hidden" name="MAX_FILE_SIZE" value="500000" multiple>   
 <input name="upload_file[]" type="file" multiple>

{/if}
</div>

<div></div>
<div class = "col-12 post-data">

<h4>Предмет письма</h4>
<p>
<input type="text"  name="subject_theme"  size="150" value = "КП от ТД АНМАКС" placeholder="КП от ТД АНМАКС">
</p>
<h5>ТЕКСТ ПИСЬМА (Можно править все, что угодно, только следить за стилистическими тэгами)</h5>

   <textarea name="bodypost" cols="150" rows="14">
   <b>Добрый день!</b> <br>
    {if $type_kp == 6 }
     Предлагаем рассмотреть приобретение следующей продукции, для гос.закупки
    {/if}  
    <br>

    <b>
       {$ZakupName}
    </b>  <br><br>
    На всю предлагаемую продукцию имеются сертификаты. <br><br>
    Если у Вас есть более интересное предложение, сообщите нам, пожалуйста, мы постараемся улучшить условия нашего КП.<br><br>
    <br><br>
    С уважением<br>
    ООО ТД АНМАКС<br>
    по всем вопросам можете получить консультацию<br>
    по телефону 8 (495) 787-24-05<br>
    <img border=0 src="https://tradestorm.ru/images/tovar.jpg" useMap=#FPMap0>
    <img border=0 src="https://tradestorm.ru/images/logo.jpg" useMap=#FPMap0>
    </textarea>
    <p><button class="submit" type="submit">Отправить</button></p>
</form>

</div> <!--  конец post-data- -->
</div>
</div>
