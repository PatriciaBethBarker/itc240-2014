<?php

function out($unclean) {
  $clean = htmlentities($unclean);
  return $clean;
}

function groupon($price) {
  //subtract 1 from price
  $discount = $price - 1;
  //add $ and .99     NEVER put a space between the function and the parens
  //single quotes are safe
  $tomfoolery = '$' . $discount . '.99';
  return $tomfoolery;
}
	//change the name of the function to get_array on 17
	//now it has 2 arguments $array and $param
function get_array($array, $param){
  //if this was found in $array
  if (isset($array[$param])) {
  //exit early
	  return $array[$param];
  }
  //if not found return false
  return false;
}

$mysql = new mysqli("localhost", "pbarke01", $mysql_password, "pbarke01");

function update_calories($id, $calories) {
//we need to call the db if we want something that isnt in the function you must ask
// for permission to use a variable you didn't put in the function -> global $mysql
  global $mysql;
	//get $id to update the cupcake with $calories
  $prepared = $mysql->prepare('UPDATE cupcakes SET calories = ? WHERE id = ?');
  $prepared->bind_param("ii", $calories, $id);
  $prepared->execute();
  }
	//UPDATE "something" SET ...before WHERE in 33...call $calories before $id
	
	function get_cupcakes(){
	global $mysql;
	$prepared = $mysql->prepare('SELECT * FROM cupcakes');
	$prepared->execute();
	//no ? ....then it doesn't need to be bind_param
	return $prepared->get_result();	
		}
?>
<!-- the function takes price as it's input-->
 
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>

<?= out("<script>alert(1);</script>"); ?>
	<ul>
		<li>Pet Shampoo <?= groupon(7) ?>
		<li>Cheetos <?= groupon(1) ?>
		<li>Pack og 12,000 rubber bands <?= groupon(5) ?>
		<li>
	</ul>


</body>
</html>