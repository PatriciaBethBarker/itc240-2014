<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>April 28 Page.php</title>



</head>
<body>

<h1>Sports!</h1>
<a href="?show=cover">Cover View</a>
<a href="?show=all">List View</a>

 <ul>
<?php

foreach ($activities as $sport) {
	if ($show == "cover") {
	include("cover.php");
	} else{
	include("book.php");
	}
}
//self closing tags, ie, list items, 
?>
 
 </ul>
<?php

?>






</body>
</html>