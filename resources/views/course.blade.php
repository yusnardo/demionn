@extends('layouts.app')
@section('title', 'Course')

@section('content')

<div class="modal" id="learnmore_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"">How to use our MODULE???</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        OBOSSSSSSSS PAP OBOSSSSS
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="preview_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"">How to use our MODULE???</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        OBOSSSSSSSS PAP OBOSSSSS
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="body-head">
	<div class="container">
		<div class="row">

			<div class="jumbotron">
				<h1 class="display-4">
					Course
				</h1>
				<p class="lead">
					You can choose the module and read it. The more you read, the more knowledge you will have.
				</p>
				<p>
					You can click Learn More to read how to use our module.
				</p>
				<button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#learnmore_modal" >Learn More
				</button>
			</div>
		</div>
	</div>
</div>
	


<div class="body-filter">
	<div class="container">
		<div class="row">
			<div class="row u-mt--30 u-mb-30">
				<div class="col-sm-12">
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="body-body">
	<div class="container">
		<div class="row">
			<div class="card-deck">
				@foreach($course as $course)
					<div class="modal" id="payment_modal-{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="payment_label" aria-hidden="true">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<h3 class="modal-title" id="exampleModalLongTitle"">Payment</h3>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
					      		</div>
					      		<div class="modal-body">
							        <h3 style="margin-top: 10px;">Pembayaran melalui transfer Bank BCA</h3>
							        <p>1. Pembayaran dapat dilakukan melalui ATM/Internet Banking/m-banking</p>
							        <p>2. Proses verifikasi manual, harap lakukan konfirmasi setelah Anda melakukan pembayaran</p>
							        <div class="va-detail">
							        	<h4>Account Number</h4>
							        	<h3 style="margin-top: 10px; font-weight: bold;">792 073 5414</h3>
							        	<h4>Account Name</h4>
							        	<h3 style="margin-top: 10px; font-weight: bold;">Yusnardo Tendio</h3>
							        	<h4>Transfer Amount</h4>
							        	<h3 style="margin-top: 10px; font-weight: bold;">Rp. {{ $course->price }}.000</h3>
							        </div>
							        <form action="{{ url('course/order') }}" method="post">
							        	{{ csrf_field() }}
										{{ method_field('patch') }}
											<div class="form-group">
												<label for="formGroupExampleInput">Name Pengirim</label>
												<input type="text" name="sender_name" class="form-control" placeholder="Nama Pengirim">
											</div>
											<div class="form-group">
												<label for="formGroupExampleInput">Nominal</label>
												<input type="text" name="course_price" value="{{ $course->price * 1000 }}" class="form-control">
											</div>
											<div class="form-group">
												<input type="text" name="course_name" value="{{ $course->course_name }}" class="form-control hidden">
											</div>
											<div class="form-group">
												<input type="text" name="course_title" value="{{ $course->course_title }}" class="form-control hidden">
											</div>
											<div class="form-group">
												<input type="text" name="course_description" value="{{ $course->course_description }}" class="form-control hidden">
											</div>
											<div class="form-group">
												<input type="text" name="course_link" value="{{ $course->course_link }}" class="form-control hidden">
											</div>
											<button type="submit" class="btn btn-primary btn-block mb-2">Konfirmasi Pembayaran</button>
							        </form>
					      		</div>
					    	</div>
					  	</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<img class="card-img-top" alt={{ $course->course_title }} src={{ $course->course_img_link }}>
							<div class="card-body">
								<h5 class="card-title">{{ $course->course_title }}</h5>
								<p class="card-text">
									{{ $course->course_description}}
								</p>
							</div>
							<div class="card-footer">
								<big class="font-weight-bold">
									@if(Auth::Check()) 
										@if($user_payment=='true' && $course->course_title==$course_title)
											<a href={{ $course->course_link }} class="btn btn-primary">Open Module</a>
										@else
											<a href="#payment_modal-{{ $course->id }}" data-toggle="modal" class="btn btn-primary" data-price="{{ $course->price }}">
												Rp. {{ $course->price }}.000</a>
											<a href="#preview_modal" data-toggle="modal" class="btn btn-primary">Preview</a>
										@endif
									@else
										<a href="/register" class="btn btn-primary btn-lg mr-4" role="button" aria-pressed="true">Sign Up Now</a>
									@endif		
								</big>
							</div>
						</div>
					</div>
					
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection
