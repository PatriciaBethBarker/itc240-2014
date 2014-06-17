<?php
include("passwords.php");
$mysql = new mysqli("localhost", "pbarke01", $mysql_password, "pbarke01");
include("bus.php");
//include the password file first to get access to the db - inlcude bus.php
// All Objects start with a class
//All class names start with a "Capital Letter"
//call the Object Bus -  beginning speed is 20

  $objBus = new Bus();
  $objBus->setBusSpeed(20);
  //test the result of speed - display 
    echo "Speed is set at " . $objBus->getBusSpeed() . " miles an hour </br>";
  $objBus->setBusSpeed(80);
    echo "Speed is set at " . $objBus->getBusSpeed() . " miles an hour </br>";
  //now explode
	
	//now reset speed - bomb explodes!!
  $objBus->setBusSpeed(30);
  
  
  //Manually set exploded value = false, check its value, and then call trigger() and check to see that the bus (now emptied, thanks to a clever camera hack) explodes again
  
  $objBus->exploded
  
  
  
?>