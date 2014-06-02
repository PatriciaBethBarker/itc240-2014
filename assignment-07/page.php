<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>No Eating in the Library Page.php</title>

</head>
<body>

<h1>Library - Book Listings</h1>
<a href="?show=cover">Cover View</a>
<a href="?show=all">List View</a>

 <ul>
<?php

foreach ($books as $sfbook) {
	if ($show == "cover") {
		
		include("cover.php");
	} else{
		include("book.php");
	}
}

?>

 </ul>
 
<?php

?>

</body>
</html>