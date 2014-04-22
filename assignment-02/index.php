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
	echo $method;

	if ($method == "GET") {
?>

	<form method="post">
 
 	<div>   
 	<input value="Noun" name="first_noun">
    <input name="color" placeholder="enter a color">
    <label for="color">Enter a color</label>
  	</div>
	<div>    
	<input value="Verb" name="verb">
	<input name="verb" placeholder="enter a verb">
	<label for="verb">Enter a verb</label>
  	</div>
	<div>
	<input value="Adjective" name="adjective">
	<input name="adjective" placeholder="enter an adjective">
	<label for="adjective">Enter an adjective</label>    
	</div>
	<div>
	<input value="Number" name="first_number">
	<input name="number" placeholder="enter a number">
	<label for="number">Enter a number</label>
	</div>
    <div>
	<input value="Number" name="second_number">
	<input name="number" placeholder="enter a number">
	<label for="number">Enter an other number</label>
	</div>

    
	<button>POST</button>
	</form>


<p>Hit the POST button and the story will be created below!  Hop to it!</p>
			</div>
            
            <!--here is the end of the form-->
            
            <!--the tale starts here-->
            
            	<div>
<pre>
<?php
	} else {
?> 
		
<?php print_r($_REQUEST); ?>
    
    John is a: <?= $_REQUEST["first_noun"]?>

<?php
	$number = $_REQUEST["number"];
	$post_jumping = $number - 2;
	if ($post_jumping >= 2){
?>

	John the Rabbit can jump <?= $post_jumping ?> high!
    
<?php
    } else {
?>

	John the Rabbit Jumps very high!
    
<?php  
}  

/*	if (isset($_REQUEST["is_awesome"])){
	echo "Also, you are wonderful.";
}*/
?>
    </pre>
	<a href="itc240_assignmentStory.php">GET</a>
<?php	
}
?>            

            
            	</div>
            <!--the tale ends here-->
            
		</div>
</body>
</html>