<div class="modal fade text-dark" tabindex="-1" role="dialog" aria-labeledby="registration_modal_label" aria-hidden="true" id="registration_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="registration_modal_label">Sign Up</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<ul class="nav nav-tabs row" role="tablist">
					<li class="nav-item col-md-6">
						<a class="nav-link active" href="#jobhunter" role="tab" data-toggle="tab" id="job-hunter" aria-controls="jobhunter">Job Hunter</a>
					</li>
					<li class="nav-item col-md-6">
						<a class="nav-link" href="#employer" role="tab" data-toggle="tab">Employer</a>
					</li>
				</ul>

				<div class="tab-content text-dark">
					<div role="tabpanel" class="tab-pane fade show active text-dark" aria-labelledby="job-hunter" id="jobhunter">
						<form method="post" id="jobhunter_registration">
							{{ csrf_field() }}
							
							@include('Tabs.registration')
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade text-dark" id="employer">
						zxczx
					</div>
				</div>
			</div>
		</div>
	</div>
</div>