<?php
include("../itc240-2014/assignment-06/passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	$mysql_password,
	"pbarke01"	
);

$query = 'INSERT INTO kitty (activity, calories, exercise_on)VALUES (?,?, now());';
$prepared = $mysql->prepare($query);
$prepared->bind-param(
	"is",
	$_REQUEST["activity"],
	$_REQUEST["calories"]
	);
	$prepared->execute();
	
	header("Location: index.php");