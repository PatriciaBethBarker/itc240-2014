<?php
include("passwords.php");

//connect to DB
$mysql = new mysqli("localhost","pbarke01",
$mysql_password, "pbarke01");

?>
<!doctype html>
<html>
<body>
<a href="edit.php"> Click here to comment</a>
<div class="comments">
<?php
//using single quotes in the string query keeps it safe from hacking
//$select = 'SELECT * FROM guestbook;';

//here you are selecting coulmns manually - they are derived colomns - we filtered our colomns into parts - echoing onth and year separately
$select = 'SELECT name, comment, MONTH(posted_on) AS month, YEAR(posted_on) AS year, DAY(posted_on) as day FROM guestbook';
$prepared = $mysql->prepare($select);
//php will substitue values in a double quote
//bind - nothing to bind here
//send query to be executed
$prepared->execute();
//give methe resulting rows
$comments = $prepared->get_result();

foreach ($comments as $comment){
?>
<b><?= $comment["name"] ?></b>
-
posted on:  <?= $comment["month"] ?>/<?= $comment["year"] ?>/<?= $comment["day"] ?>
<pre>
<?= $comment["comment"] ?>
</pre>
<?php
	}
?>

</div>
</body>


</html>