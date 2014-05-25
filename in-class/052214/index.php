<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<h1>What you eat:</h1>

	<form method="POST" action="../052014/inclass 052014/edit.php">
    <input placeholder="type" name="type">
    <input placeholder="calories" name="type">
    <input placeholder="submit" type="Submit" />
    </form>
	<a href="?sort=type">Type</a>
    <a href="?sort=id">ID</a>
    <a href="?sort=calories">Calories</a>
<!--relative link in query-->
<!--make a connection to the database-->

<?php
include("passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	$mysql_password,
	"pbarke01"
);

	$column = "calories";
	$column = $_REQUEST["sort"];
	$column = $mysql->real_escape_string($column);
	
	$whitelist = [
		"calories" => true,
		"id" => true,
		"type" => true
	];
	
	if (!isset($whitelist[$column])){
		$column = 'calories';
		}
	
	$prepared = $mysql->prepare("SELECT * FROM tracker_food ORDER BY $column DESC;");
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
	$sumQuery = $mysql->prepare('SELECT SUM(calories) AS sum FROM tracker_food;');	
	//dont need to bind, no parameters
	$sumQuery->execute();
	//results do not come back from the db until get_result - inserts and updates
	$sumResult = $sumQuery->get_result();
	
	$sum = $sumResult->fetch_array();
	
	$maxQuery = $mysql->prepare('SELECT MAX(calories) AS calories FROM tracker_food;');	
	$maxQuery->execute();
	$maxResult = $maxQuery->get_result();
	$max = $maxResult->fetch_array();
	
	$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM tracker_food;');
	$count = $countResult->fetch_array();
?>

	<br>
			<div>
			Your total calories input is:
			<?= $sum["sum"] ?>
			</div>

			<div>
			Your highest input is:
			<?= $max["calories"] ?>
			</div>

			<div>
			Total Number of meals: 
			<?= $count["rows"] ?>
			</div>
<!--single quotes make sure no one can insert into the string above -->
<!--aggregate function-->
			<div> Your total calorie input is:
			<?= $sum ["sum"] ?>
			</div>


</body>
</html>