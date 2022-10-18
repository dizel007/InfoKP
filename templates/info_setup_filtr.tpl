{* Настройка строки с отображением ФИЛЬТРа*} 

<div class = "filter_p">
ФИЛЬТР: <b>{$kpCount}</b> КП:
{if $get_nomerKP<>''}
<i>Номер КП :<b>{$get_nomerKP}</b></i>
{/if}
{if $get_date_start<>'' }
<i>Дата начала:<b>{$get_date_start}</b></i>
{/if}
{if $get_date_end<>'' }
<i>Дата окончания :<b>{$get_date_end}</b></i>
{/if}
{if $get_inn<>'' }
<i>ИНН :<b>{$get_inn}</b></i>
{/if}
{if $get_responsible<>'' }
<i>ответственный :<b>{$get_responsible}</b></i>
{/if}
{if $get_name_zakazchik <>''}
<i>Наименование Заказчика:<b>{$get_name_zakazchik}</b></i>
{/if}
{if $get_adres_postavki <>'' }
<i>Адрес поставки :<b>{$get_adres_postavki}</b></i>
{/if}

</div>