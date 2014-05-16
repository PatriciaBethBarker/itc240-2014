<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>April 24 in class Page.php</title>



</head>
<body>

<h1>Books!</h1>
<a href="?show=cover">Cover View</a>
<a href="?show=all">List View</a>
 <pre>
 <ul>
<?php

foreach ($books as $book) {
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
//print_r($books);
// you cant use the shortcut for php here because its inside an array
?>
 </pre>





</body>
</html>