<?php
// All Objects start with a class
//All class names start with a “Capital Letter”

class Card {
	public $suit = "spades";
	public $value = 1;
	
	function say() {
	  echo $this->value . " of " . $this->suit;
	}
}
	//calling the constructor -Card- below
$card = new Card();
$card->suit = "clubs";
$card->value = "2";

?>
<!doctype html>
<pre>
  <?php $card->say() ?>
</pre>