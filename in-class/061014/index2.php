<?php

class Card {
	public $suit;
	public $value;
	
	function say() {
	  echo $this->value . " of " . $this->suit;
		}
	}
	
$card = new Card();
$card->suit = "clubs";
$card->value = "2";

?>
<!doctype html>
<pre>
  <?php $card->say() ?>
</pre>