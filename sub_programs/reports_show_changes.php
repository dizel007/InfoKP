<?php
@$author = $_GET['author'];
@$date_start = $_GET['date_start'];
@$date_end = $_GET['date_end'];
@$what_change = $_GET['what_change'];

$stmt = $pdo->prepare("SELECT * FROM `reports` WHERE `author`=:author AND `date_change`>=:date_start AND `date_change`=:date_end AND `what_change`=:what_change");
$stmt->execute(array('author' => $author,
                      'date_start' => $date_start,
                      'date_end' => $date_end,
                      'what_change' => $what_change,
)
);
$arr_select_changes = $stmt->fetchAll(PDO::FETCH_ASSOC);


$smarty->assign ('arr_select_changes', $arr_select_changes);
$smarty->display('reports/reports_show_changes.tpl');

echo "<pre>";
print_r($arr_select_changes);
echo "<pre>";