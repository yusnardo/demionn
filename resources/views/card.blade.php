@extends('layouts.app')
@section('title', '')

@section('content')

<div class="row">
  	<div class="col-4">
    	<div class="list-group" id="list-tab" role="tablist">
    		@foreach ($users as $modul)
    			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
    				Home
    			</a>
    			<p>This is user {{ $user->id }}</p>
			@endforeach
      		<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      		<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      		<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      		<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    	</div>
  	</div>
  	<div class="col-8">
    	<div class="tab-content" id="nav-tabContent">
    		@foreach()
    			<div class="tab-pane show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
    				...
    			</div>
    		@endforeach
	      	<div class="tab-pane show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
	      	<div class="tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
	      	<div class="tab-pane" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
	      	<div class="tab-pane" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    	</div>
  	</div>
</div>

@endsection