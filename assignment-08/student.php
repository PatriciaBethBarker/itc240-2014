<?php

  foreach ($result AS $row) {
	  
?>	  

<div id="stListing">

	<ul>
    	<li> Student Name: <?= htmlentities($row["stName"]) ?> </li>
        <li> Tutor Date: <?= htmlentities($row["tutorDate"]) ?> </li>
    </ul>

</div>

<?php

  }

?>