<?php
//the php must be the first code a the page or the cookie will not work
//key of this cookie= cookie and value= world, key-value pair
//values of cookies are always text
//lots of cookies can be sent at o nce - cookie strinbg - with key-value pairs - only sends back the path  http://itc240.no-ip.org/~pbarke01/itc240-2014/
//2 types - session and non-session cookies
//name of cookie and value we want to set in that cookie
/*setcookie(
	"itc240", //path
	"is super awesome",//value
	time() + 60 * 60 * 24 * 10,//expires (number!) seconds, minutes, hours, days 365.25, years  time is a number...no quotes
	"/"  //path  .....clear a cookie with the same path used to create it.

);*/

	function make_cookie($name, $value) { //all function have parentheis, the arguement - this is where we put the argument of the function here. Declare like a varible
		setcookie($name, $value, time() + 60 * 60* 24 * 30, "/"); //this is a block of code inside the fucntion
}

	function delete_cookie($name) {
		setcookie($name, "", 10, "/"); //the value is in the past here 1970...therefore you dont have to call it
		}
//	make_cookie("type", "chocolate_chip");
	make_cookie("user_id", "12345612345");  //these are the things that change
	make_cookie("tracking_id", "abdesfardt");
	make_cookie("hello", "world");
	
	delete_cookie("itc240");  //you called the first cookie made - line 9
	
	$sample = [
		"hello" => "world",
		"cookie" =>"fortune"
	];
	
	$list = [1, 2, 3, 4];
	
	$options = [
		"last_name_first" => true, //the fat arrows name them inside the array
		"show_photos" => true, //this varible contains three options...although its named options
		"favorite" => "Dad"
	];
	
	make_cookie("options", json_encode($options)); //frozen and stored in the code
	
	if (isset($_COOKIE["options"])) {
		$from_cookie = json_decode($_COOKIE["options"], true); //echo this out below - it turns back into an array when we decode it
		
		}
?>
<!DOCTYPE html>
<html>
<body>
<pre>
   <!--can't use short from php in the first call - line 42 AND 43 are an echo of php-->
	<?php print_r($_COOKIE); ?>  
    <?= json_encode($sample); ?>
    <?= json_encode($list); ?>
    <!-- encode makes an array a string , decode makes a string an array --> 
    <?php print_r($from_cookie); ?>
</pre>
</body>
</html>