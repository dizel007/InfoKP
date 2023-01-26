<?php

$id= $_GET['id']; // id KP

$stmt = $pdo->prepare("SELECT * FROM `reports` WHERE 	id_item = $id");
$stmt->execute([]);
$arr_with_all_changes = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($arr_with_all_changes);
echo "<pre>";

die('DIE reports_about_kp.php');
