<?php
	// maak een overzicht lijst van ALLE personen

?>
<h1>Overzicht van personen</h1>
<ul>
	<?php
	$employees = getAllEmployees();

	foreach ($employees as $key => $value) {
		print_r("<li>" . $value['name'] . " is " . $value['age'] . " jaar oud.</li>");
	}
	?>
	<a href="employee/edit/1">Wijzigen</a> <a href="employee/delete/3">Verwijderen</a>
</ul>