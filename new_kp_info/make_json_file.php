<?php
function make_json_kp_file($products, $comparr,$user_responsible_arr, $KpSum, $hight_string){


    $array['products'] = $products;
    $array['dop_info'] = $comparr;
    $array['user'] = $user_responsible_arr[0]['user_login'];
    $array['summa'] = $KpSum;
    $array['hight_string'] = $hight_string;


$json = json_encode($array, JSON_UNESCAPED_UNICODE);

// echo $json;    

file_put_contents("../JSON_KP/".$comparr['KpFileName'].".json", $json);

$kkk= file_get_contents("../JSON_KP/".$comparr['KpFileName'].".json");
$array = json_decode($kkk, true);


echo "<pre>";
print_r($array);
echo "<pre>";


    // header('Content-Type: application/json');






    
};



