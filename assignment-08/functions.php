<?php
function out($unclean) {
  $clean = htmlentities($unclean);
  return $clean;
}

//clean the db

$mysql = new mysqli(
  "localhost", 
  "pbarke01", 
  $mysqli_password, 
  "pbarke01"
);

//call password file

function update_tutorDate($stName, $stID){
  global $mysql;
  $prepared = $mysql->prepare('UPDATE tutorList SET tutorDate = ?, WHERE stName =? ');
  $prepared->bind_param("", $tutorDate, $stName);
  $prepared->execute;
  
	
}
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Function file for Assignment 8</title>
</head>

<body>















	<ul>
		<li>
		<li>
		<li>
		<li>
	</ul>




</body>
</html>