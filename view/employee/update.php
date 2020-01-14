<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>employee/update/">
	<input type="hidden" name="id" value="<?=$id?>"/>
	<!--  Bouw hier de rest van je formulier   -->
	<input type="text" name="name" placeholder="<?=$name?>" class="formINPUT" required>
	<input type="number" name="leeftijd" placeholder="<?=$age?>" class="formINPUT" required>

	<button type="submit" class="update">Update</button>
</form>
