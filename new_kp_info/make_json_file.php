<?php
function make_json_kp_file($products, $comparr,$user_responsible_arr, $hight_string){
    $summa_kp=0;
    foreach($products as $prods) {
        $summa_kp +=  $prods['kol']*$prods['price']; // рассчет суммы КП
    }

    $array['products'] = $products;
    $array['dop_info'] = $comparr;
    $array['user'] = $user_responsible_arr[0]['user_login'];
    $array['summa'] = $summa_kp;
    $array['hight_string'] = $hight_string;


$json = json_encode($array, JSON_UNESCAPED_UNICODE);


file_put_contents("../JSON_KP/".$comparr['KpFileName'].".json", $json);



    // $kkk= file_get_contents("../JSON_KP/".$comparr['KpFileName'].".json");
    // $array = json_decode($kkk, true);
return $summa_kp;
};



