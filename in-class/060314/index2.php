<?php

include("passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	$mysql_password,
	"pbarke01"
);
$cupcakeQuery = $mysql->prepare("SELECT * FROM cupcakes");
//no questionmarks therefore we don't have to bind
//anything left of the equals sign you have to make up/create
//you have to create the $mysql in line 4 to use it on line 10
$cupcakeQuery->execute();
$cupcakes = $cupcakeQuery->get_result();
$print_r($cupcakes);
//this makes sure the query works before we move on

?>
<!doctype html>
Something