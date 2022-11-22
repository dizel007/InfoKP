<?php
$stmt = $pdo->prepare("SELECT `email_count` FROM `reestrkp` WHERE `id` = ?");
$stmt->execute([$id]);
$arr_kp_ = $stmt->fetchAll(PDO::FETCH_ASSOC);

$new_email_count = $arr_kp_[0]["email_count"];
$new_email_count++;

$data_arr = [
  'email_count'=> $new_email_count,
  'id' => $id,
];

$sql = "UPDATE reestrkp SET email_count=:email_count WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data_arr);
