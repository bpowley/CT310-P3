<?php
header('Content-Type: text/json');
header("Access-Control-Allow-Origin: *");

$a = array ('status' => 'closed');

echo json_encode($a);

?>
