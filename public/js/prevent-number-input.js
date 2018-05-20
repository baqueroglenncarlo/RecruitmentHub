$(document).ready(function(){
	function preventNumberInput(e){
		var keyCode = (e.keyCode ? e.keyCode : e.which);
		if(keyCode > 47 && keyCode < 58){
			e.preventDefault();
		}
	}

	$('#firstname').keypress(function(e){
		preventNumberInput(e);
	});

	$('#lastname').keypress(function(e){
		preventNumberInput(e);
	});
	$('#middlename').keypress(function(e){
		preventNumberInput(e);
	});
	$('#religion').keypress(function(e){
		preventNumberInput(e);
	});
	$('#university').keypress(function(e){
		preventNumberInput(e);
	});
	$('#degree').keypress(function(e){
		preventNumberInput(e);
	});
});