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
	  if ($a == $b) {
	  $this->passed = $this->passed + 1;
	  return true;  
	  } else {
		echo "FAIL:  expected $a, got $b<br>";
	    $this->failed = $this->failed +1;
		return false;	  
		}
	}
}
//current total for a claculator should aways be ZERO
class Calculator {
	public $currentTotal = 0;
	
	function clear(){
		$this->currentTotal = 0;
	}
	function add($x) {
		//$this->currentTotal += $x;
		$this->currentTotal = $this->currentTotal + $x;
	}
	
	function sub($x) {
		//$this->currentTotal -= $x;		
		$this->currentTotal = $this->currentTotal - $x;
	}
	
	function mult($x) {
		$this->currentTotal*= $x;
	}
	
	function div($x) {
		$this->currentTotal /= $x;
	}
	
	function eq() {
		return $this->currentTotal;
	}
}
?>