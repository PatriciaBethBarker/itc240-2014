<!DOCTYPE html>
<html>
<head>

<style>

</style>

<title>Query a database and render expense totals by month</title>


</head>

<body>

<h1>Expense</h1>

<p>I have built a database for a small business owner who wants to track receipts each month in order to write them off as a business expense.</p>
<!--basic HTML code which invokes a PHP script-->
<!--create a db w/ rows and 6 columns, create a form where the user can enter a new expense entry that will be stored as a row in the database.-->
<!--expense - name, type, payment_type, expense_date, amount, total-->
<!--create a view that renders all receipts in a given month (would like it selectable – current month) -->
<!--Write prepared queries for at least SELECT and INSERT-->
<!--Doing this with ORDER BY in the database is not hard, but do it in a secure way-->
<!--alllow edit of existing receipts and query a total for each month's expenses at the bottom of the receipt list-->

 <?php
include("/passwords.php");

$mysql = new mysqlli("localhost", "pbarke01",$mysql_password,"pbarke01");

$result = $mysql->query('SELECT * FROM expense ORDER BY expense_date ASC;');

?>	

	<form action="insert.php" method="post">
		Name: <input type="text" name="name" />
		Expense Type: <input type="text" name="type" />
		Payment Type: <input type="text" name="payment_type" />
		Expense Date: <input type="date" name="expense_date" />
		Amount: <input type="decimal" name="amount" />
        Total: <input type-"decimal" name="total" />
	<input type="Submit" /></form>
    
<?php
$query="SELECT * FROM expense";$result=mysql_query($query);
$query->execute();
$result = $query->get_result();
?>

<table width="600" border="1">
  <th>
    Expense
  </th>
<?php
	foreach($result as $row) {
?>
  <tr>  
    <td> <?= $row["name"] ?> </td>
    <td> <?= $row["type"] ?> </td>
    <td> <?= $row["payment_type"] ?> </td>
    <td> <?= $row["expense_date"] ?> </td>
    <td> <?= $row["amount"] ?> </td>
    <td> <?= $row["total"] ?> </td>
  </tr>

<?php
}
?>

  </table>


</body>

</html>