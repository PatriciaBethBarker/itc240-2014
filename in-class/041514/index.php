<?php


$variable = "text"; //you can set varibles here, but superglobals tell us more anbout the page
/*
Superglobals:
$_SERVER – tells us about server specific information
$_COOKIE - all the cookies that are assigned to the browser
$_REQUEST – URL parameters or form submission
$_FILES - files that are uploaded
*/

//print_r($_REQUEST);
//print_r($_SERVER); 

$name = htmlentities($_REQUEST["name"]);  //making a variable that is echoed down below
if ($name == "Patricia") {  //this is a test of equality - a condition
$name = "The incredible Patricia"; //change the value of the varible
}

//SANITIZATION:
//htmlentities()  this sanititzes the input typed by user

if (isset($REQUEST["last_name"])) {
	$last_name = $_REQUEST["last_name"];
	} else {
	$last_name = "";
	}
?>
<doctype>
<html>
	<body>

Hello, 
<?php echo $name; ?>
<?= htmlentities($last_name); ?>! 

<form method="post">
	<input name="comment">
	<input type="hidden" value="123" name="nonce">
	<button>Submit</button>
</form>
<?php

if (isset($_REQUEST["comment"])) {
	echo $_REQUEST["comment"];
}

?>

	</body>
</html>