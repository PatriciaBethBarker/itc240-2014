<?php
function out($unclean) {
  $clean = htmlentities($unclean);
  return $clean;
}

//clean the db

$mysql = new mysqli(
  "localhost", 
  "pbarke01", 
  $mysql_password, 
  "pbarke01"
);

//call password file
//we need to call the db if we want something that isnt in the function you must ask
//talk to the database tutorList and update tutorDate and stName
// for permission to use a variable you didn't put in the function -> global $mysql
function update_tutorDate($stName, $stID){
  global $mysql;
  $prepared = $mysql->prepare('UPDATE tutorList SET tutorDate = ?, WHERE stName =? ');
  $prepared->bind_param("ss", $tutorDate, $stName);
  $prepared->execute;
  
	
}
?>


