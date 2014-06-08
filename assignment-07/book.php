<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book list in the Library</title>


</head>

<body>
<!-- A choice between 2 "views" -->
<!-- 1.  A "cover" view with the book cover art, title, author name and a checkout button -->
<!-- 2.  A "listing" view with book cover art, title, author name, a short description and a checkout button -->

<h2>Listing Views</h2>
	<ul>
		<li><strong><?= $sfbook["cover"] ?></strong>
		<li><em><?= $sfbook["description"] ?></em>