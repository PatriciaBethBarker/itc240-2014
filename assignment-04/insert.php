<?php	
 	$username="username";
	$password="password";
	$database="presidents";
		$name=$_POST['name'];
		$party=$_POST['party'];
		$religion=$_POST['religion'];
		$state=$_POST['state'];
		$inauguration=$_POST['inauguration']; 
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die ("Unable to select database");
	$query = "INSERT INTO presidents VALUES(''.'$name','$party','$religion', '$state','inauguration')";
mysql_query($query);
mysql_close(); 
?>