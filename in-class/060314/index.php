<?php
//changing the "sort" with $name
function get_option($name, $default) {
	//start with the default value, 
  $value = $default;
	//then if there is a cookie witht this name, use it's value
  if (isset($_COOKIE[$name])){
    $value = $_COOKIE[$name];
	}
  if (isset($_REQUEST[$name])){
    $value = $_REQUEST[$name];
    setcookie($name, $value, time() +60 * 5, "/");
	}
  return $value;
	}
include("passwords.php");
$mysql = new mysqli(
  "localhost",
  "pbarke01",
  $mysql_password,
  "pbarke01"
);
//original - no sort to make sure it works
//$cupcakeQuery = $mysql->prepare("SELECT * FROM cupcakes");
//no questionmarks therefore we don't have to bind
//anything left of the equals sign you have to make up/create
//you have to create the $mysql in line 4 to use it on line 10
$sort = "calories";
//if you have a sort cookie, use it
//if(isset($_COOKIE["sort"])){
//  $sort = $_COOKIE["sort"];
//	}
////if you specify sort in the URL, use it instead
//if (isset($_REQUEST["sort"])){
//	$sort = $_REQUEST["sort"];
//	setcookie("sort", $sort, time() +60 * 5, "/");
//	}
//sort should be limited - whitelist it - only the values that we will allow - lock them down
//only allow certian column names
$sort = get_option("sort", "calories");
$theme = get_option("theme", "light");

$sortWhitelist = [
  "flavor" => true,
  "calories" => true
];
//if the value of sort(the id)is not set in $sortWhitelist, then default to calories - line 15
if (!isset($sortWhitelist[$sort])) {
  $sort = "calories";
	}
	
$cupcakeQuery = $mysql->prepare("SELECT * FROM cupcakes ORDER BY $sort DESC;");
//we want to sort calories so we switch out SELECT FROM with $sort a variable
$cupcakeQuery->execute();
$cupcakes = $cupcakeQuery->get_result();
//$print_r($cupcakes);
//this makes sure the query works before we move on

?>
<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th><a href="?sort=flavor">Flavor
			<th><a href="?sort=calories">Calories
			<th><a href="?sort=image">Image
	<tbody>
<?php
foreach ($cupcakes as $cake){ ?>
		<tr>
			<td><?= htmlentities($cake["flavor"]) ?>
            <td><?= htmlentities($cake["calories"]) ?>
            <td><img src="<?= htmlentities($cake["image"]) ?>"
            	>
<?php
}
?>

</table>

</body>

</html>