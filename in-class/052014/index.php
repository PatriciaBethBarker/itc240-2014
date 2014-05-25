<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<h1>What you eat:</h1>

	<form method="POST" action="edit.php">
    <input placeholder="type" name="type">
    <input placeholder="calories" name="type">
    <input placeholder="submit" type="Submit" />
    </form>


<!--make a connection to the database-->

<?php
include("../ITC240-2014/in-class/052014/passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	$mysql_password,
	"pbarke01"
);

	$prepared = $mysql->prepare('SELECT * FROM tracker_food');
//don't need to bind because there are no parameters...nothing to substitute
	$prepared->execute();
	$results = $prepared->get_result();
	//we work our way down the rows - not across columns
	foreach ($results as $row) {
	
?>
	<div> 
		<?= htmlentities($row["calories"]) ?>
		calories from 
        <?= htmlentities($row["type"]) ?>
	</div>	
<?php
		}
	$sumquery = $mysql->prepare('SELECT SUM(calories) AS sum FROM tracker_food;');	
	//dont need to bind, no parameters
	$sumQuery->execute();
	//results do not come back from the db until get_result - inserts and updates
	$sumResult = $sumQuery->get_result();
	
	$sum = $sumResult->fetch_array();
		
?>

<!--single quotes make sure no one can insert into the string above -->
<!--aggregate function-->
<div> Your total calorie input is:
<?= $sum["sum"] ?>
</div>


</body>
</html>