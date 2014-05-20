<!DOCTYPE html>
<html>
<head>

<title>Guestbook - Prepared Query</title>
</head>

  <body>
     <form action="edit.php" method="POST">
     <input name="name" placeholder="Your name">
     <textarea name="comment"></textarea>
     <input type="submit">
     </form>

<!-- when you get data in the form...do this -->

  </body>
</html>
<?php
include("passwords.php");
//connect to teh DB
$mysql = new mysqli("localhost", "pbarke01", $mysql_password, "pbarke01");

//only act on POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//prepare the query - single quotes will make the query always predicatlble-locked, no escaping, no special charachters - double quotes allows substitution
	//you have two strings - name and comment - when I prepare a query I bind to the values in the query not to the mysql variable
	$query = 'INSERT INTO guestbook (name, comment, posted_on) VALUES (?,?, now());';
	$prepared = $mysql->prepare($query);
	$prepared->bind_param("ss", $_REQUEST["name"], $_REQUEST["comment"]);
	$prepared->execute();
	}
	
?>

