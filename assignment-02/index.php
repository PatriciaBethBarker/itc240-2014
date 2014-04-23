<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>ITC 240 Mad Lib Story</title>
</head>

<body>
<h1>A Rabbit named John</h1>

		<div>
<p>John was a funny Rabbit.  I want to tell you a cute story about him, so let's begin by asking you to provide the essential parts to the tail!  OOPS!  I meant tale....</p>

<p>Here are the questions I have for you! Please fill in my form.</p>

			<div id="pieces">
            <!-- my form begins here-->
<?php

	$method=$_SERVER["REQUEST_METHOD"];
	//echo $method;

	if ($method == "GET") {
?>

	<form method="post">
 
 	<div>   
<!-- <input value="noun" name="first_noun">-->
    <input name="color" placeholder="enter a color">
    <label for="color">Enter a color</label>
  	</div>
	<div>    
<!--	<input value="verb" name="verb">-->
	<input name="verb" placeholder="enter a pesent tense verb">
	<label for="verb">Enter a verb</label>
  	</div>
	<div>
<!--	<input value="adjective" name="adjective">-->
	<input name="adjective" placeholder="enter an adjective">
	<label for="adjective">Enter an adjective</label>    
	</div>
	<div>
<!--	<input value="number" name="first_number">-->
	<input name="number_first" placeholder="enter first number">
	<label for="number">Enter a number between 0 and 2</label>
	</div>
    <div>
<!--	<input value="number" name="second_number">-->
	<input name="number_second" placeholder="enter second number">
	<label for="number">Enter a number between 4 and 9</label>
	</div>

    
	<button>Create a Mad Lib!</button>
	</form>


<p>Hit the button and the story will be created below!  Hop to it!</p>

<?php 
	} else {
?>
<?php //print_r($_REQUEST); ?>

			</div>
            
            <!--here is the end of the form-->
            
            <!--the tale starts here-->
            
            	<div>

<div>
		
    	<pre>
        <form>
        
        <b> Here's the Story</b>
        
John is a <?= htmlentities($_REQUEST["first_noun"]) ?> Rabbit.
    
He loves to <?= htmlentities($_REQUEST["verb"]) ?> every time he wakes up in the morning.
    
John is a rabbit with <?= htmlentities($_REQUEST["adjective"]) ?> , that's for sure!
    
John the Rabbit likes to jump.  How high can he jump?  That's right he jumps <?= htmlentities($_REQUEST["number_first"]) ?> feet into the air.  

<?php
	$number = $_REQUEST["number_first"];
	if ($number_first == 1){
?>
John the Rabbit can jump high!
<?php
}
?>
 
<?php  
}  
?>

You know, rabbits do not live too long.  

John is <?= $numbers=($_REQUEST ["number_second"]) ?> years old.

<?php
	$number = $_REQUEST["number_second"];
	if ($number_second == 4){
?>
John is younger than he looks.
<!--	<a href="index.php">GET</a>-->
<?php	
}
?>  
		</form>  
        </pre>
        
</div>
            	</div>
            <!--the tale ends here-->
		</div>
</body>
</html>