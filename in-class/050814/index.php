<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>

<?php
include("../../passwords.php");
//params: server, username, password, database - gitignore keeps it secret
//you want to keep things off your source code…so do not put them here
// create passwords.php
$mysql = new mysqlli(“localhost”, “pbarke01”,”$mysql_password”,”pbarke01”);
//skinny arrow is used for objects- using query is unsafe
//UNSAFE WAY do not use query with anything that is from the user
// DO NOT DO THIS BELOW......
//$mysql->query("INSERT INTO animals VALUES ($type);");
//prepared statements are safe
//send to DB for preparation and then we excute it
$result = $mysql->query("SELECT * FROM animals;");
//then excute
$query->execute();
//get the rows that resulted
$result = $query->get_result();
//$result is not an array but acts like one
//query and store in $result variable - not an array but acts like one
//loop through the rows and output them - $result calls the rows, not columns
foreach ($result as $row){
?>
    <li> <?= $row["type"] ?> has <?= $row["legs"] ?>
    legs. </li>
<?php
    	}
?>
</body>
</html>