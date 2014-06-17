<?php
// All Objects start with a class
//All class names start with a “Capital Letter”

class Card {
	public $suit = "spades";
	public $value = 1;
	
	function __construct($suit, $value) {
		$this->suit = $suit;
		$this->value = $value;
		}
	
	function say() {
	  echo $this->value . " of " . $this->suit;
	}
}
	//calling the constructor -Card- below, integer doesn't need quotes on line 19
	//you must pass in the values of the constructor
$card = new Card("clubs", 2);
//$card->suit = "clubs";
//$card->value = "2";

?>
<!doctype html>
<pre>
  <?php $card->say() ?>
</pre>