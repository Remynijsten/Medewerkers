function showMessage(message, color, fade){
    var el = document.createElement("DIV");
	el.className = "errors";
	el.style.opacity = "1";
	el.style.background = color;
	el.innerHTML = message;
	$(el).insertAfter(".navmenu");

	if (fade == true){
		setTimeout(function(){
			$(".errors").fadeTo("slow", 0);
		}, 2000);

		setTimeout(function(){
			$(".errors").remove();
		}, 2200);
	}
}

$(".addEmployee input").on("change input", function(){
	if ($(this).val().length > 10){
		showMessage("Je kan maximaal 10 karakters invoeren", "darkred", true);
		$(this).val("");
	}
	if ($(this).val().includes("<") || $(this).val().includes(">") || $(this).val().includes('"') || $(this).val().includes("(") || $(this).val().includes(")")){
		showMessage("geen HTML karakters toegestaan!", "darkred", true);
		$(this).val("");
	}
});