<ul class="nav nav-pills" role="tablist">
	<li class="nav-item col-md-4">
		<a href="#info" class="nav-link active" role="tab" data-toggle="tab" id="jh-info" aria-controls="info">Basic Info</a>
	</li>
	<li class="nav-item col-md-4">
		<a href="#education" class="nav-link" role="tab" data-toggle="tab" id="jh-education" aria-controls="education">Education & Experience</a>
	</li>
</ul>

<div class="tab-content text-dark">
	<div role="tabpanel" class="tab-pane fade show active text-dark" aria-labelledby="jh-info" id="info">
		<div class="row">
			<div class="form-group col-md-4">
				<label>Firstname</label>
				<input type="text" name="firstname" id="firstname" class="form-control" required>
			</div>
			<div class="form-group col-md-4">
				<label>Lastname</label>
				<input type="text" name="lastname" id="lastname" class="form-control" required>
			</div>
			<div class="form-group col-md-4">
				<label>Middlename (Optional)</label>
				<input type="text" name="middlename" id="middlename" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Gender</label>
				<select class="form-control">
					<option value="Female">Female</option>
					<option value="Male">Male</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label>Status</label>
					<select class="form-control">
						<option value="Married">Married</option>
						<option value="Single">Single</option>
						<option value="Widow">Widow</option>
					</select>
			</div>
			<div class="form-group col-md-4">
				<label>Religion</label>
				<input type="text" name="religion" id="religion" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Contact Number</label>
				<input type="text" name="contact" id="contact" class="form-control">
			</div>
			<div class="form-group col-md-8">
				<label>Address</label>
				<input type="text" name="address" id="adress" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Email</label>
				<input type="email" name="username" id="username-id" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Password</label>
				<input type="password" name="password" id="password-id" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Confirm Password</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
			</div>
		</div>
	</div>	
	<div role="tabpanel" class="tab-pane fade show text-dark" aria-labelledby="jh-education" id="education">
		<hr>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="jh" id="undergraduate" class="form-check-input" value="Undergraduate">Undergraduate
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="jh" id="degreeholder" class="form-check-input" value="Degree Holder">Degree Holder
			</label>
		</div>
		<hr id="hr">
		<!-- <div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="jh" id="freshgrad" class="form-check-input" value="Fresh Graduate">I'm a Fresh Graduate
			</label>
		</div> -->

		<div class="row" id="education-info">
			
			<div class="form-group col-md-6" id="div-university">
				<label>University</label>
				<input type="text" name="university" id="university" class="form-control" required>
			</div>
			<div class="form-group col-md-2" id="div-yrstart">
				<label>Year Start</label>
				<input type="text" name="yrstart" id="yrstart" class="form-control" required>
			</div>
			<div class="form-group col-md-2" id="div-yrend">
				<label>Year Grad.</label>
				<input type="text" name="yrend" id="yrend" class="form-control" required>
			</div>
			<div class="form-group col-md-6" id="div-location">
				<label>Location</label>
				<input type="text" name="location" id="location" class="form-control" required>
			</div>
			<div class="form-group col-md-6" id="div-degree">
				<label>Degree</label>
				<input type="text" name="degree" id="degree" class="form-control" required>
			</div>
		</div>
		<hr>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="jh-exp" id="exp" class="form-check-input" value="Experience">Experience
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="jh-exp" id="no-exp" class="form-check-input" value="Firsttime">No Experience
			</label>
		</div>
		<button type="button" id="addnew" class="btn btn-outline-success">+</button>
		<hr>
		<div class="row" id="company-details">
			<div class="col-md-8 form-group" id="div-company-name">
				<label>Company name</label>
				<input type="text" name="company-name1" class="form-control" id="company-name" required>
			</div>
			<div class="col-md-4 form-group" id="div-position">
				<label>Position</label>
				<input type="text" name="position1" class="form-control" id="position" required>
			</div>
			<div class="col-md-8 form-group" id="div-year">
				<label>Company location</label>
				<input type="text" name="company-location1" class="form-control" id="company-location" required>
			</div>
			<div class="col-md-2 form-group" id="div-year">
				<label>Start</label>
				<input type="text" name="yr-job-start1" class="form-control" id="yr-job-start" required>
			</div>
			<div class="col-md-2 form-group" id="div-year">
				<label>End</label>
				<input type="text" name="yr-job-retirement1" class="form-control" id="yr-job-retirement" required>
			</div>
		</div>
		</div>
	</div>						
</div>