@extends('layouts.app')
@section('title', 'Profile')

@section('content')

<div class="profile-header">
	<div class="container">
		<div class="col-lg-8 col-md-8">
			<h1>{{ Auth::user()->name }}</h1>
		</div>
		<div class="col-lg-4 col-md-4">
			<h3 class="push-left">4 Course</h3>
		</div>
	</div>
</div>


<div class="profile_body">
	<div class="container">
		<div class="tab-content profile_body_content" id="pills-tabContent">
			<div class="col-lg-3 col-md-3 menu_profile" >
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link nav_custom active" id="v-pills-bi-tab" data-toggle="pill" href="#v-pills-bi" role="tab" aria-controls="v-pills-home" aria-selected="true">
						Basic Information
					</a>
					<a class="nav-link nav_custom" id="v-pills-cp-tab" data-toggle="pill" href="#v-pills-cp" role="tab" aria-controls="v-pills-cp" aria-selected="false">
						Change Password
					</a>
					<a class="nav-link nav_custom disabled" id="v-pills-mail-tab" data-toggle="pill" href="#v-pills-mail" role="tab" aria-controls="v-pills-mail" aria-selected="false" style="cursor: not-allowed;">
						Mail Settings
					</a>
				</div>
			</div>

			<div class="col-lg-8 col-md-8 account_page">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane show active" id="v-pills-bi" role="tabpanel" aria-labelledby="v-pills-bi-tab">
						<form>
							 <div class="form-group">
								<label for="formGroupExampleInput">Name</label>
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">Email</label>
								<input type="text" placeholder="{{ Auth::user()->email }}" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">Nickname</label>
								<input type="text" class="form-control" placeholder="Nickname">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">About me</label>
								<textarea type="text" class="form-control" placeholder="About me"></textarea>
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">GitHub</label>
								<input type="text" class="form-control" placeholder="GitHub">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">Linkedln</label>
								<input type="text" class="form-control" placeholder="Linkedln">
							</div>
							<button type="submit" class="btn btn-primary mb-2">Submit</button>
						</form>
					</div>
					<div class="tab-pane" id="v-pills-cp" role="tabpanel" aria-labelledby="v-pills-cp-tab">
						<div class="form-group">
							<label for="formGroupExampleInput">Current Password</label>
							<input type="text" class="form-control" placeholder="Current Password">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">New Password</label>
							<input type="text" class="form-control" placeholder="New Password">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">Confirmation</label>
							<input type="text" class="form-control" placeholder="Confirmation">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Change Password</button>
					</div>
					<div class="tab-pane disabled" id="v-pills-mail" role="tabpanel" aria-labelledby="v-pills-mail-tab">
						...
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>

@endsection