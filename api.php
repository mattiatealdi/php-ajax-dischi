<?php 


include __DIR__ . '/data/db.php';


header('Content-Type: application/json');

$db = json_encode($database);

echo $db;

?>