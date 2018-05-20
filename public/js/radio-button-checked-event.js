$(document).ready(function(){
	var counter = 1;	

	$('#undergraduate').click(function(){
		$('#education-info').fadeOut();
		$('#hr').hide();
	});

	$('#degreeholder').click(function(){
		$('#education-info').fadeIn();
		$('#hr').show();
	});

	$('#exp').click(function(){
		$('#company-details').fadeIn();
		$('#addnew').show();
	});
	$('#no-exp').click(function(){
		$('#company-details').fadeOut();
		$('#addnew').hide();
	});

	$('#addnew').click(function(){ 
		alert(counter+=1);
		var addnew=	'<div class="col-md-8 form-group" id="div-company-name">' +
						'<label>Company name</label>' +
						'<input type="text" name="company-name'+counter+'" class="form-control" id="company-name" required>' +
					'</div>' +
					'<div class="col-md-4 form-group" id="div-position">' +
						'<label>Position</label>' +
						'<input type="text" name="position'+counter+'" class="form-control" id="position" required>' +
					'</div>' +
					'<div class="col-md-8 form-group" id="div-year">' +
						'<label>Company location</label>' +
						'<input type="text" name="company-location'+counter+'" class="form-control" id="company-location" required>' +
					'</div>' +
					'<div class="col-md-2 form-group" id="div-year">' +
						'<label>Start</label>' +
						'<input type="text" name="yr-job-start'+counter+'" class="form-control" id="yr-job-start" required>' +
					'</div>' +
					'<div class="col-md-2 form-group" id="div-year">' +
						'<label>End</label>' +
						'<input type="text" name="yr-job-retirement'+counter+'" class="form-control" id="yr-job-retirement" required>' +
					'</div>';

		$('#company-details').append(addnew);
	});
});

