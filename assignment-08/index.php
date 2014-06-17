<?php
include("passwords.php");
include("functions.php");
//the passwords.php has to be first to allow the access to the db

echo get_array($_REQUEST, "REQUEST METHOD");
echo get_array($_COOKIE, "sort");

update_tutorList();
$tutorList = get_tutorList();

  $column = "tutorName";
  $column = $_REQUEST["sort"];
  $column = $mysql->real_escape_string($column);
//  $prepared =$mysql->prepare("SELECT * FROM tutor ORDER BY '$column' DESC; ") ;
  
  
  $whitelist = [ 
    "stName" => true,
    "stID" => true,
    "tutorName" => true,
	"subjectName" => true,
    "stGender" => true,
    "tutorDate" => true,
    "tutorTime" => true,
  ];
//Your request object is an array  - isset 

	if (!isset($whitelist[$column])){
		$column = 'tutorName';
	}
//single quotes for safety

  $prepared =$mysql->prepare("SELECT * FROM tutorList ORDER BY $column DESC; ") ;
  $prepared->execute();
  $results = $prepared->get_result();
	//we work our way down the rows - not across columns
	foreach ($results as $row) {
?>
	<div> 
		<?= htmlentities($row["tutorDate"]) ?>
		tutorName from 
        <?= htmlentities($row["stName"]) ?>
	</div>	
<?php
		}
?>

<!-- decide here what we are selecting or counting or summing up -->
<!-- include student and tutor files somewhere here! -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment 8 - Conjunction Function Etc</title>
</head>

<body>
<!--Create table tutorList - stName, stID, tutorName, subjectName , stGender, tutorDate tutorTime  - security, htmlentites, whitelist-->
<!--Create and call 2 Functions; Function 1 - talk to the database tutorList and update tutorDate and stName  -->
<!--Function 2 - take one argument and return a resulting value; SELECT stName, stID, stGender FROM tutorList -->
<!-- ORDER BY stName, stGender -->
            
     

</body>
</html>