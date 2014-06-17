<?php
// All Objects start with a class
//All class names start with a "Capital Letter"
//this is our Tutor 
class Tutordate {
	public $stName;
	public $stID;
	public $tutorName;
	public $subjectName;
	public $stGender;
	public $tutorDate;
	public $tutorTime;
//from this connection prepare a query
function load($conn, $tutorDate) {
	$query = $conn->prepare('SELECT * FROM tutorList WHERE tutorDate = ? LIMIT 1');
	$query->bind_param("d", $tutorDate);
	$query->execute();
	$result = $query->get_result();
	$row = $result->fetch_array();
	$this->stName = $row["stName"];
	$this->stID = $row["stID"];
	$this->tutorName = $row["tutorName"];
	$this->subjectName = $row["subjectName"];
	$this->tutorDate = $row["tutorDate"];
	}
	
	function save($conn) {
	  //this is a new tutorDate, there would be no id, we insert
	  $query = $conn->prepare('UPDATE tutorList SET stName=?, stID=?, tutorName=?, subjectName=? WHERE tutorDate =?');	
	  $query->bind_param("ssssd", $this->stName, $this->stID, $this->tutorName, $this->subjectName, $this->tutorDate);
	  $query->execute();
	}
}
	//you need the tutorDate if you want to update it
	//we are going to make this update
	
	$schedule = new Tutordate();
	$schedule->tutorDate = "2014-06-23";
	
	//allow access to the db
include("passwords.php");
$mysql = new mysqli(
  "localhost", 
  "pbarke01", 
  $mysql_password, 
  "pbarke01"
  );

$tutorList = new Tutordate();
$tutorList->load($mysql, 1); 

  //change the tutorDate - 
$schedule->tutorDate = "2014-06-23";	
	
	//the next line of code below changes the DB to match the Object
	//must have a save function
$schedule->stName= "Kim";
$schedule->tutorDate = "2014-06-23";

	//the line below saves all the changes above made to the DB at once
$schedule->save($mysql);


	
?>

<!doctype html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Edit TutorDate</title>
    </head>
        	<body>
        		<form method="POST" action="index.php">
                	<input name="stName" value="<?= htmlentities($stName->name) ?>">
                    <input name="tutorDate" value="<?= htmlentities($tutorDate->tutorDate) ?>">
                    <input type="submit">
                </form>
        	</body>
        </html>
