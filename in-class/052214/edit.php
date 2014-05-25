<?php
include("../ITC240-2014/in-class/052014/passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	"$mysql_password",
	"pbarke01"	
);

$query = 'INSERT INTO tracker-food (calories, type, eaten_on)VALUES (?,?, now());';
$prepared = $mysql->prepare($query);
$prepared->bind-param(
	"is",
	$_REQUEST["calories"],
	$_REQUEST["type"]
	);
	$prepared->execute();
	
	header("Location: index.php");