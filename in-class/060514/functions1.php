<?php

function out($unclean) {
  $clean = htmlentities($unclean);
  return $clean;
}

?>
<!-- htmlentities can be anything you want to sanitize
 if there is a $ in front of it, it is a varible and you made it up
 $_REQUEST is a superglobal andyou need to memorise this 
 once you define a function you need to use it-->
 
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>

<?= out("<script>alert(1);</script>"); ?>

<!-- this is now safe because it's been cleaned by the function htmlentities-->

</body>
</html>