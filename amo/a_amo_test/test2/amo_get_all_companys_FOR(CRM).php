<?php
// amo_get_data_user_WORK.php
require_once 'access.php';
require_once '../parts/functions_amo.php';


echo "<pre>";


$method = "/api/v4/companies?limit=20";
$link=1;
do{
    
    $res = get_query_in_amo($access_token, $subdomain , $method);
    echo "<br>00000000000000000<br>";
        if (isset($res['_links']['next'])){
        $method = str_replace('https://anmaks.amocrm.ru', '', $res['_links']['next']['href']); ;
        }
     foreach ($res['_embedded']['companies'] as $company) {
           $arr_sum_res[] = $company;
       }
   

    if (!isset($res['_links']['next'])) { 
        echo "<br> НЕТ ССЫЛКИ<br>";
        $link = 0; 
    }  

      
}
while ($link == 1);




$i=0;
foreach ($arr_sum_res as $comp) {
    $id_comp  = $comp['id'];
    $name  = $comp['name'];

    if ($comp['custom_fields_values'][0]['field_name'] == 'ИНН') {
        $inn = $comp['custom_fields_values'][0]['values'][0]['value'];
    } else {
        $inn = '';
    }
    echo "$i ). ID = $id_comp, NAME = $name; INN = $inn <br>";



    if ($inn == '4204007403') {
        echo "<br> FIBD IT <br>";
        break;
    }
$i++;
}


print_r($arr_sum_res[$i]);


die('fffffffffffffffffffffffffffffff');

