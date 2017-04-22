<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );
$a = array();
$i = 0;

// [{"Team":"1","nameShort":"Yammy","nameLong":"Ingredients are Yammy","baseURL":"http:\/\/www.cs.colostate.edu\/~yammy\/project3\/"}]

$a [$i++] = array('Team' => '1', 'nameShort' => 'Kale', 'nameLong' => 'Kale fucking sucks', 'baseURL' => 'http://www.cs.colostate.edu/~bpowley/project3/');
// $a [$i++] = array('Team' => '2', 'nameShort' => 'Yammy', 'nameLong' => 'Ingredients Are Yammy', 'baseURL' => 'http://www.cs.colostate.edu/~yammy/project3/');

echo json_encode ( $a );
?>
