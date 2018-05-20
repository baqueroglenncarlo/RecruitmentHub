<div class="modal fade text-dark" id="login_modal" tabindex="-1" role="dialog" aria-labeledby="login_modal_label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="login_modal_label">Sign In</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="login_form">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" required>
					</div>
					<button type="submit" id="submit" class="btn btn-outline-success">Sign In</button>
					<a href="#" class="btn btn-link" data-toggle="modal" data-target="#registration_modal" data-dismiss="modal">Sign Up</a>
				</form>
			</div>
		</div>
	</div>
</div>