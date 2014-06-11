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
  $prepared->bind_param("ss", $tutorDate, $stName);
  $prepared->execute;
  
	
}
?>
