<?php
// All Objects start with a class
//All class names start with a “Capital Letter”
//this is our band deom block
class Band {
	public $name;
	public $genre;
	public $num_members;
	public $hit_song;
	public $id;
//from this connection prepare a query
function load($conn, $id) {
	$query = $conn->prepare('SELECT * FROM bands WHERE id = ? LIMIT 1');
	$query->bind_param("i", $id);
	$query->execute();
	$result = $query->get_result();
	$row = $result->fetch_array();
	$this->name = $row["name"];
	$this->genre = $row["genre"];
	$this->num_members = $row["num_members"];
	$this->hit_song = $row["hit_song"];
	$this->id = $row["id"];
	}
	
	function save($conn) {
	  //if this was a new band, there would be no id, we would insert
	  $query = $conn->prepare('UPDATE bands SET name=?, genre=?, num_members=?, hit_song=? WHERE id =?');	
	  $query->bind_param("ssisi", $this->name, $this->genre, $this->num_members, $this->hit_song, $this->id);
	  $query->execute();
	}
}
	//you need the id if you want to update it
	//we are going to make this update
	
	$the_who = new Band();
	$the_who->name = "The Who";
	
include("./passwords.php");
$mysql = new mysqli("localhost", "pbarke01", $mysql_password, "pbarke01");

$weezer = new Band();
$weezer->load($mysql, 1); 

  //change the name, hit song, genre or anything below - Undone only changed the Object in the browser
$weezer->hit_song = "Undone (The Sweater Song)";	
	//the next line of code on line below changes the DB to match the Object...must have a save function
	
$weezer->name= "Band formerly known as Weezer";
$weezer->num_members = 1;
	//the line below saves all the changes above made to the DB at once
$weezer->save($mysql);


	
?>
<!doctype html>
<!--  the print_r will tell us if it's an Object -->
<pre>
  <?php print_r($weezer); ?>
</pre>