<?php

	function make_cookie($name, $value) { //all function have parentheis, - this is where we put the argument of the function here. Declare like a varible
		setcookie($name, $value, time() +5400, "/", no-ip.org); // declare an end time 1.5 hours, search all, url
		}
	
	function delete_cookie($name) {
		setcookie($name, "", 10, "/"); //the value is in the past here 1970...therefore you dont have to call it
		}	
		
//// set the cookies
//		make_cookie("title", "The Map of the Sky");  //this is a block of code inside the function
//		make_cookie("author", "Félix J. Palma");
//		make_cookie("cover", "Map.jpeg");
//		make_cookie("description", "Mesmerizing novel casting H.G. Wells in a leading role");
//		
		$sample [
			"title" => "The Map of the Sky",
			"author" => "Félix J. Palma",
			"cover" => "Map.jpeg",
			"description" => "Mesmerizing novel casting H.G. Wells in a leading role"
		];
		
		$list = [1, 2, 3, 4];
		
		$options = [
			"title" => "The Map of the Sky",
			"author" => "Félix J. Palma",
			"cover" => "Map.jpeg",
			"description" => "Mesmerizing novel casting H.G. Wells in a leading role"
		];

	make_cookie("options", json_encode($options)); 

//// after the page reloads, print them out
// if (isset($_COOKIE['cookie'])) {
//    foreach ($_COOKIE['cookie'] as $name => $value) {
//        $name = htmlspecialchars($name);
//        $value = htmlspecialchars($value);
//        echo "$name : $value <br />\n";
//    }
// }

	if (isset($_COOKIE["options"])) {
		$from_cookie = json_decode($_COOKIE["options"], true); //echo this out below - it turns back into an array when we decode it
		
		}

?> 



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>No Eating in the Library</title>
<style>


</style>

</head>

<body>
<!-- store and retrieve data from the user's browser using cookies — in this case, a library listings page -->
<!-- Your page will show a list of books available for checkout, with the cover, title, and author name for each -->
<!-- The page will have controls to choose between three sets of options, which will be remembered even if I close my browser and re-open it  -->
<!-- A choice between 2 "views" 1.  A "cover" view with the book art, title, author name and a checkout button - AND/OR  -->
<!-- 2.  or a "listing" view with art, title, author name, checkout button and a short description-->
<!-- 3. Preferred sorting, either by title or by author name  -->
<!-- 4. One of two page themes (such as dark and light, or small and large print)  -->
<!--  Browser -> server -> Fill out the form -> Now the browser sets a cookie – for future things the browser sends the cookie back  -->

<h2>Library Listings</h2>

<p>Choose a background color for the webpage!</p>

<?php
	if (isset($_POST['submitted'])){  //if the form is submitted
		$newbgColor=$_POST['bgColor'];
			setcookie("bgColor",$newbgColor,time()+5400, "/", no-ip.org );
	}
									//if first time on page
	if ((!isset($_COOKIE['bgColor']) )) {
		$bgColor = "Green";
	}
	
	else{
		$bgColor = $_COOKIE['bgColor'];

	}
?>


<body bgcolor= "<?php echo $bgColor ?>" >
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">  
<select name=bgColor placeholder=Body Color>
<option value ="Red">Red</option>
<option value ="Blue">Blue</option>
<option value ="Yellow">Yellow</option>
<option value ="White">White</option>
</select>
<input type ="hidden" name="submitted" value="true"></br>
<input type="submit" value="Submit">
</form>

<!--echo statements check the value of the double quoted name variable -->

<!-- create an array of books with key-value pairs title, author, image, description-->
<?php

	$books = [
		["sfbook" => "The Map of the Sky", "title" => "Félix J. Palma", "author" => "Map.jpeg", "cover" => "Mesmerizing novel casting H.G. Wells in a leading role", "description" ],
		["sfbook" => "Conquest", "title" => "John Connolly", "author" => "Conquest.jpg", "cover" => "Earth has been invaded by the Illyri", "description" ],
		["sfbook" => "Antiagon Fire", "title" => "Leland Exton Modesitt, Jr", "author" => "Antiagon.jpeg", "cover" => "Tyrannical Rex Kharst, confronts a powerful order of women", "description" ],
		["sfbook" => "City of Dragons", "title" => "Robin Hobb", "author" => "Dragons.jpeg", "cover" => "Dragons embark on a dangerous journey to the ancient, mythical homeland of Kelsingera", "description" ],
	];
	
	$show = "all";  //begin with all, then overwrite
		if (isset($_REQUEST["show"])){
			$show = $_REQUEST["show"];
			}
			
	shuffle($books);  //list books?
	
	include("page.php");
?>

<pre>
   <!--do not use short from php in the first call -->
	<?php print_r($_COOKIE); ?>  
   	 	<?= json_encode($sample); ?>
    	<?= json_encode($list); ?>
    <!-- encode makes an array a string , decode makes a string an array --> 
    
    <?php print_r($from_cookie); ?>
</pre>

<!--inside of the array, name lists of books - load business logic first, then includes - add an image in the array for each -->
</body>
</html>