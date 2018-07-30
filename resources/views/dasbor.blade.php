@extends('layouts.app')
@section('title', 'Dasbor')

@section('content')
<div class="dasbor-header">
	<div class="container">
		<div class="col-lg-8 col-md-8">
			<h1>{{ Auth::user()->name }}</h1>
		</div>
		<div class="col-lg-4 col-md-4">
			<h3 class="push-left">{{ count($dasbor) }} Course</h3>
		</div>
	</div>
</div>

<div class="dasbor-body">
	<div class="container">
		<div class="row">	
			@foreach($dasbor as $dasbors)
				@if($dasbors->isPaid == 'true')
					<div class="col-lg-6" style="margin-top: 20px;">
						<div class="card">
						  	<div class="card-header">
						    	<h3>{{ $dasbors->course_title }}</h3>
						  	</div>
						  	<div class="card-body">
							    <p class="card-text">{{ $dasbors->course_description }}</p>
							    <a href={{ $dasbors->course_link }} class="btn btn-primary">Open Module</a>
						  	</div>
						</div>
					</div>
				@else

				@endif
			@endforeach
			@if(count($dasbor)==0)
				<div class="container" style="text-align: center;">
					<h1>anda ga punya apa2 bang</h1>
					<a href="/course" class="btn lilac btn-lg btn-custom" role="button" aria-pressed="true">View Course</a>
				</div>	
			@endif			
		</div>
	</div>	
</div>

@endsection