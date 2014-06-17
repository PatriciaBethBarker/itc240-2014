<?php
include("passwords.php");
$mysql = new mysqli(
  "localhost", 
  "pbarke01", 
  $mysql_password, 
  "pbarke01"
  );


// All Objects start with a class
//All class names start with a "Capital Letter"
//this is our Bus before we know its armed
class Bus {
	public $armed = false;
	public $exploded = false; 
	public $speedatstart = 20;
//beginning speed is 20 - not armed - not above 50
//setSpeed() - A function that takes a single argument, which is the speed of the bus. 
//If speed is > than 50mph and the bomb has not previously been armed, this function will arm it. 
function setBusSpeed($speed) {
  $this->$speedatstart = $speed;
    if($speed>50){
		$this->$armed = true;
		echo "Holy CRAP!! What's that blinking light? It's Armed!!</br>";
		}
		
	if($speed>80) {
		echo "Is that St Peter! Jump that gap! </br>";
		}
		
	if($speed>50 && $this->$armed == true;) {
		$this->$exploded = true;
		echo "BOOM!!!!! BANG!! BADABOOM!! Explosion! </br>";
		}
	}

//exploded - A property that also starts out as false, and is set to true if the bomb is armed and the bus goes less than 50mph. 


function getBusSpeed() {
  return $this->$speedatstart;
	}
//getSpeed() - A function that returns the current speed of the bus. 

function triggerBomb() {
  $this->$exploded = true;
  echo "BOOM!!!!! BANG!! BADABOOM!!";
	}
//trigger() - A function that can be called by a bitter madman that immediately explodes the bomb. 

}
?>


