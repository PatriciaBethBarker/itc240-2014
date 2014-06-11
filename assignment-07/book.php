<!-- A choice between 2 "views" -->
<!-- 1.  A "cover" view with the book cover art, title, author name and a checkout button -->
<!-- 2.  A "listing" view with book cover art, title, author name, a short description and a checkout button -->
<!-- this is the part that repeats, it doesn't need the html-->
		<li><img src="<?= $sfbook["cover"] ?>"></strong>
		<li><em><?= $sfbook["description"] ?></em>