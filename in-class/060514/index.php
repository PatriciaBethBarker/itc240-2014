<?php
include("passwords.php");
include("functions.php");
//the passwords.php has to be first to allow the access to the db

//library.com?view=list || ?view=cover
//wrong way:
//$view = $_REQUEST["view"];
//right way:
//$view = get_request("view");
//echo $view;

//print_r($_COOKIE);    to test the function

echo get_array($_REQUEST, "REQUEST METHOD");
echo get_array($_COOKIE, "sort");

update_calories(1, 1000);
$cupcakes = get_cupcakes();

?>
<!-- function f_name(the argument goes here) { 
	//split $num_of_stars into pieces
	//place these in a template
    return "<img...>";  the return is the last thing in the function you do
    unless you are intending to leave the function early
} -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>