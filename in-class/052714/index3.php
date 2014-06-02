<?php
//the php must be the first code a the page or the cookie will not work
//key of this cookie cookie a and value is world
//values of cookies are always text
	$name = "";
	
//lots of cookies can be sent at o nce - cookie strinbg - with key-value pairs - only sends back the path
//header ("Set-Cookie: hello=world");  let's do abetter code for this...
//debugging..here the cookie changed it....so 


	if (isset($_COOKIE["your_name"])) {
		$name = $_COOKIE["your_name"];
	}
	if (isset($_REQUEST["name"])) {
		setcookie(
		"your_name", 
		$_REQUEST["name"],
		time() + 5 * 60,
		"/",
		no-ip.org
		);
		$name = $_REQUEST["name"];
	}


//echo statements check the value of the double quoted name variable 


	
//if you leave off the method in the form it becomes a GET


?>
<!DOCTYPE html>
<html>

<form action="index.php">
	<input 
    	placeholder="First Name" name="name" 
		value="<?= $name ?>" 
    >
</form>

<pre>
<?php
	print_r($_COOKIE);
	echo time();
?>
</pre>