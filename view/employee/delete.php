<script>


	$( document ).ready(function() {
		showMessage("<?=$data['name']?> is verwijderd!", "darkgreen", false);

		setTimeout(function(){
			$("form").one().submit();
		}, 1500);
	});
	
</script>

<form name="delete" method="post" action="<?=URL?>employee/destroy/3">
	<input type="hidden" name="id" value="<?=$id?>"/>
</form>
