<?php	
 	$username="username";
	$password="password";
	$database="expense";
		$name=$_POST['name'];
		$type=$_POST['type'];
		$payment_type=$_POST['payment_type'];
		$expense_type=$_POST['expense_type'];
		$amount=$_POST['amount']; 
		$total=$_POST['total']; 
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die ("Unable to select database");
	$query = "INSERT INTO expense VALUES('','$name','$type','$payment_type', '$expense_type','$amount', '$total')";
mysql_query($query);
mysql_close(); 
?>