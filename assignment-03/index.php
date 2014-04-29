<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>April 28 index.php</title>



</head>
<body>
<?php
//we are going to put key value pair inside the array
	$activities = [
 	["sports" => "Golf", "equipment" => "clubs", "price" => "$ 200"],
 	["sports" => "Baseball", "equipment" => "bat", "price" => "$ 30"],
	["sports" => "Track", "equipment" => "shoes", "price" => "$ 40"],
	["sports" => "Sailing", "equipment" => "boat", "price" => "$ 2000"],
	["sports" => "Football", "equipment" => "helmet", "price" => "$ 80"],
	];
	
//	$activities[] = ["sports" => "Vollyball", "equipment" => "net"];

$show = "all"; //default - we start with all , then overwrite it
if (isset($_REQUEST["show"])){
	$show = $_REQUEST["show"];
	}
	
	shuffle($activities);

include("page.php");
?>

<!--inside of the array, we have named lists - load business logic first, then includes - you could add an image in the array for each -->





</body>
</html>