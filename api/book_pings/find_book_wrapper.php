<?php
include("find_book.php");

$JSONin = stripslashes($_GET["callNumInput"]);
$JSONin = json_decode($JSONin,true);

echo json_encode(find_book($JSONin["call_number"]));

?>