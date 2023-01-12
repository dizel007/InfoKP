<?php
function make_prod_array($post) {

// echo "HEOLL";



// echo $post["uslovia_oplati"]."<br>";
// echo $post["srok_izgotovl"]."<br>";
// echo $post["price_dost"]."<br>";



echo "<br>";
for ($i=0; $i<@$post['all_kolvo']; $i++) {
  if (!isset($post["name$i"] )) {
    break;
  }
  if ($post["ed_izm$i"] == '') {
    $post["ed_izm$i"]='шт';
  }
  if ($post["kol$i"] == '') {
    $post["kol$i"]=1;
  }
  if ($post["price$i"] == '') {
    $post["price$i"]=1;
  }

  $prods[$i]['name']= $post["name$i"];
  $prods[$i]['ed_izm']= $post["ed_izm$i"];
  $prods[$i]['kol']= $post["kol$i"];
  $prods[$i]['price']= $post["price$i"];

}
// echo $_POST["uslovia_oplati"]."<br>";
// echo $_POST["srok_izgotovl"]."<br>";
// echo $_POST["price_dost"]."<br>";



// echo "<br>";
// for ($i=0; $i<$_POST['all_kolvo']; $i++) {
//   if ($_POST["name$i"] == '') {
//     break;
//   }
//   if ($_POST["ed_izm$i"] == '') {
//     $_POST["ed_izm$i"]='шт';
//   }
//   if ($_POST["kol$i"] == '') {
//     $_POST["kol$i"]=1;
//   }
//   if ($_POST["price$i"] == '') {
//     $_POST["price$i"]=1;
//   }

//   $prods[$i]['name']= $_POST["name$i"];
//   $prods[$i]['ed_izm']= $_POST["ed_izm$i"];
//   $prods[$i]['kol']= $_POST["kol$i"];
//   $prods[$i]['price']= $_POST["price$i"];

// }

// echo "<pre>";
// print_r($prods);
// echo "<pre>";

return @$prods;
}