<?php

  foreach ($results AS $row) {
	  
?>	  

<div id="tutorListing">

	<ul>
    	<li> Student Name: <?= htmlentities($row["stName"]) ?>  </li>
        <li> StudentID: <?= htmlentities($row["stID"]) ?>  </li>
        <li> Tutor Name: <?= htmlentities($row["tutorName"]) ?>  </li>
        <li> Subject Name: <?= htmlentities($row["subjectName"]) ?>  </li>
        <li> Student Gender: <?= htmlentities($row["stGender"]) ?>  </li>
        <li> Tutor Date: <?= htmlentities($row["tutorDate"]) ?> </li>
        <li> TutorTimes: <?= htmlentities($row["tutorTime"]) ?>  </li>
    </ul>

</div>

<?php

  }

?>

