<!DOCTYPE html>
<html>
<head>

<title>Litterbox Olympics - Monitor the Fat Cat</title>
</head>

<body>

<!-- build an activity log for fatcat Neko -->
<!-- Store dated activity logs in the database containing A) a description of the activity, and B) the number of calories burned adn C) date of activity-->
<!-- Present a list of all activities to date, with the description, calorie count, and date for each. Sort in descending order by date -->
<!-- Return the total sum of all calories burned, and the highest number of calories burned in a single activity (MAX()) -->
<!-- Make sure that both input and outputs are safe, for security and use SQL's aggregate functions (SUM() and MAX()) correctly -->

<h1>Neko is a fat cat!</h1>

<p>Enter the activity, calories burned and date, the results will sort in descending order by date!</p>
<br>
	<form method="POST" action="../itc240-2014/assignment-06/enter.php">
    <input placeholder="activity description" name="activity">
    <input placeholder="calories burned" name="calories">
    <input placeholder="excercise date" name="date">
    <input placeholder="submit" type="Submit" />
    </form>
    

	<a href="http://itc240.no-ip.org/~pbarke01/itc240-2014/assignment-06/index.php/?sort=activity">Activity Description</a>
    <a href="http://itc240.no-ip.org/~pbarke01/itc240-2014/assignment-06/index.php/?sort=calories">Calories Burned</a>
    <a href="http://itc240.no-ip.org/~pbarke01/itc240-2014/assignment-06/index.php/?sort=exercise_on">Date</a>
<!--relative link in query-->
<!--make a connection to the database and call the password file from the folder-->

<?php
include("passwords.php");
$mysql = new mysqli(
	"localhost",
	"pbarke01",
	$mysql_password,
	"pbarke01"
);

	$column = "activity";
	$column = $_REQUEST["sort"];
	$column = $mysql->real_escape_string($column);
	
	$whitelist = [
		"activity" => true,
		"calories" => true,
		"date" => true
	];
	
	if (!isset($whitelist[$column])){
		$column = 'activity';
		}
	
	$prepared = $mysql->prepare("SELECT * FROM kitty ORDER BY $column DESC;");
//don't need to bind because there are no parameters...nothing to substitute
	$prepared->execute();
	$results = $prepared->get_result();
	//we work our way down the rows - not across columns
	foreach ($results as $row) {
	
?>
	<div> 
		<?= htmlentities($row["activity"]) ?>
		calories expended equals =  
        <?= htmlentities($row["calories"]) ?>

	</div>	
<?php
		}
	$sumQuery = $mysql->prepare('SELECT SUM(calories) AS sum FROM kitty;');	
	//dont need to bind, no parameters
	$sumQuery->execute();
	//results do not come back from the db until get_result - inserts and updates
	$sumResult = $sumQuery->get_result();
	//fetch the array of entered values
	$sum = $sumResult->fetch_array();
	//prepare and execute
	$maxQuery = $mysql->prepare('SELECT MAX(calories) AS calories FROM kitty;');	
	$maxQuery->execute();
	$maxResult = $maxQuery->get_result();
	$max = $maxResult->fetch_array();
	
	$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM kitty;');
	$count = $countResult->fetch_array();
?>

	<br>
			<div>
			The total sum of calories burned is:
			<?= $sum["sum"] ?>
			</div>

			<div>
			The maximum number of calories burned is:
			<?= $max["calories"] ?>
			</div>

			<div>
			Total Number of activities: 
			<?= $count["rows"] ?>
			</div>
<!--single quotes make sure no one can insert into the string above lines 72, 80, 85-->
<!--aggregate function-->



</body>
</html>