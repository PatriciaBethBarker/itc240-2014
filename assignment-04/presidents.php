<!DOCTYPE html>
<html>
<head>

<title> Array</title>


</head>

<body>

<h1>Presidents</h1>

<p>I have a database of US Presidents, with their names, party, religion, state, and inauguration date</p>
<!--basic HTML code which invokes a PHP script-->
<!--create a db w/ rows and 5 columns, create a page that lists out the contents of that database in a table.-->
<!--presidents - name, party, religion, state, inaugruration date-->
<!--make the table headers "sortable" - by clicking on a link in the header, the page should reload with the table sorted by that column-->
<!--Doing this with ORDER BY in the database is not hard, but do it in a secure way-->
 <?php
include("passwords.php");

$mysql = new mysqlli("localhost", "pbarke01",$mysql_password,"pbarke01");

$result = $mysql->query('SELECT * FROM presidents ORDER BY name ASC, type ASC;');

?>	

	<form action="insert.php" method="post">
		Name: <input type="text" name="name" />
		Party: <input type="text" name="party" />
		Religion: <input type="text" name="religion" />
		State: <input type="text" name="state" />
		Inauguration Date: <input type="date" name="inauguration" />
	<input type="Submit" /></form>
    
<?php
$query="SELECT * FROM presidents";$result=mysql_query($query);
$query->execute();
$result = $query->get_result();
?>

<table width="400" border="1">
  <caption>
    Presidents
  </caption>
<?php
	foreach($result as $row) {
?>
  <tr>  
    <td> <?= $row["name"] ?> </td>
    <td> <?= $row["party"] ?> </td>
    <td> <?= $row["religion"] ?> </td>
    <td> <?= $row["state"] ?> </td>
    <td> <?= $row["inauguration"] ?> </td>
  </tr>

<?php
}
?>

  </table>


</body>

</html>
