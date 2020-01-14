<h1>Voeg een medewerker toe</h1>
<form class="addEmployee" name="create" method="post" action="<?=URL?>employee/store">

	<input name="naam" type="text" class="formINPUT" placeholder="Naam" required>
	<input name="leeftijd" type="number" class="formINPUT" placeholder="Leeftijd" required>



	<button class="submit">Voeg Toe</button>

</form>