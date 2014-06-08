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
	
function get_request($param){
  //
  if (isset($_REQUEST[$param])) {
  //exit early
	  return $_REQUEST[$param];
  }
  //if not found return false
  return false;
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