<?php
include ("classes.php");
$page_tester = new Tester ();
$page_tester->test (2,2);
//$page_tester->test (1,2);

$page_tester->test($page_tester->passed, 1);


$calc = new Calculator();
$page_tester->test($calc->currentTotal, 0);

$calc->clear();
$page_tester->test($calc->currentTotal, 0);

$calc->add(5);
$page_tester->test($calc->currentTotal, 5);

$calc->sub(2);
$page_tester->test($calc->currentTotal, 3);

$calc->clear();
$calc->add(2);
$calc->mult(3);
$page_tester->test($calc->currentTotal, 6);

$calc->div(3);
$page_tester->test($calc->currentTotal,2);

?>


<p><?= $page_tester->passed; ?></p>
<p><?= $page_tester->failed; ?></p>
