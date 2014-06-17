<?php

/*
Accessing property operators:
array - [] - ex. $array["prop"];
Array def or loop - => - ex. foreach ($array as $key => $value) or ["key" => "value"]
Object - -> - ex. $obj->prop;
skiny arrow goes with Objects
fat arrow goes with Arrays (only used for defining array)
*/


//this is a way of organizing function that are available so we can call them in an organized way on our Tester Object - not a class as a data tool
class Tester {
  public $passed = 0;
  public $failed = 0;
  //test takes 2 arguments, if they are equal the test passed
  //in that case, $this->passed +=1
  //otherwise failed, etc
  //return wheter it passed
  function test($a,$b) {
	  if ($a ==$b) {
	  $this->passed = $this->passed + 1;
	  return true;  
	  } else {
	    $this->failed = $this->failed +1;
		return false;	  
		}
	  }
}


?>