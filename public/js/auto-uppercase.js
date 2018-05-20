$(document).ready(function(){
	$('#firstname').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#lastname').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#middlename').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#religion').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#religion').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#address').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#university').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#location').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
	$('#degree').keyup(function(e){
		var str = $(this).val();
		var array = str.split(' ');
		var newArray = [];

		for(var i = 0; i < array.length; i++){
			newArray.push(array[i].charAt(0).toUpperCase() + array[i].slice(1));
		}
		this.value = newArray.join(' ');
	});
});