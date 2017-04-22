<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );
$a = array ();
$i = 0;

// {"name":"Carrot","short":"What's Up Doc","unit":"bunch","cost":"1.99"}

$a [$i++] = array ('name' => 'Carrot', 'short' => 'What\'s Up Doc', 'unit' => 'bunch', 'cost' => '1.99');
$a [$i++] = array ('name' => 'Lettuce', 'short' => 'Leafy Leafs', 'unit' => 'head', 'cost' => '0.99');
$a [$i++] = array ('name' => 'Fennel', 'short' => 'WTF is fennel', 'unit' => 'bit', 'cost' => '2.99');

echo json_encode ( $a );

?>
