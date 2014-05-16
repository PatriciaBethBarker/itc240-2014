<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>April 24 in class</title>



</head>
<body>
<?php
//we are going to put key value pair inside the array
	$books = [
 	["title" => "Dune", "author" => "Frank Herbert"],
 	["title" => "Anna Karenina", "author" => "Tolstoy"],
	["title" => "Snow Crash", "author" => "Stephenson"],
	];
	
	$books[] = ["title" => "M is for Murder", "author" => "Grafton"];

$show = "all"; //default - we start with all , them overwrite it
if (isset($_REQUEST["show"])){
	$show = $_REQUEST["show"];
	}
	
	shuffle($books);

include("page.php");
?>

<!--inside of the array, we have named lists - load business logic first, then includes - you could add an image in the array for each -->





</body>
</html>