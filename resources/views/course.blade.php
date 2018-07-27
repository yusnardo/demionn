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
<div class="modal" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 style="margin-top: 10px;">Pembayaran melalui transfer Bank BCA</h3>
        <p>1. Pembayaran dapat dilakukan melalui ATM/Internet Banking/m-banking</p>
        {{-- <p>2. Mohon transfer hingga 3 digit terakhir (kode unik) agar proses verifikasi tidak terhambat</p> --}}
        <p>2. Proses verifikasi manual, harap lakukan konfirmasi setelah Anda melakukan pembayaran</p>
        <div class="va-detail">
        	<h4>Account Number</h4>
        	<h3 style="margin-top: 10px; font-weight: bold;">792 073 5414</h3>
        	<h4>Account Name</h4>
        	<h3 style="margin-top: 10px; font-weight: bold;">Yusnardo Tendio</h3>
        	<h4>Transfer Amount</h4>
        	<h3 style="margin-top: 10px; font-weight: bold;">RP. 75.000</h3>
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
				<input type="text" name="nominal" value="75.000" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary btn-block mb-2">Konfirmasi Pembayaran</button>
        </form>
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
				<div class="card">
					<img class="card-img-top" alt="Teknikal Analisi Saham : Beginners" src="img/card-1.png">
					<div class="card-body">
						<h5 class="card-title">Teknikal Analisi Saham : Beginners</h5>
						<p class="card-text">
							This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
						</p>
					</div>
					<div class="card-footer">
						<big class="font-weight-bold">
							@if(Auth::Check()) 
								@if($user_payment==true)
									<a href="/card-1" class="btn btn-primary">Open Module</a>
								@elseif($user_payment==false) 
									<a href="#payment_modal" data-toggle="modal" class="btn btn-primary">Rp. 75.000</a>
									<a href="#preview_modal" data-toggle="modal" class="btn btn-primary">Preview</a>
								@endif
							@else
								<a href="/register" class="btn btn-primary btn-lg mr-4" role="button" aria-pressed="true">Sign Up Now</a>
							@endif		
						</big>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" alt="Teknikal Analisi Saham : Beginners" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22239%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20239%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164a6f1baa6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164a6f1baa6%22%3E%3Crect%20width%3D%22239%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2288.7578125%22%20y%3D%2295.1%22%3E239x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
					<div class="card-body">
						<h5 class="card-title">Teknikal Analisi Saham : Beginners</h5>
						<p class="card-text">
							This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
						</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">
							Last updated 3 mins ago
						</small>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" alt="Teknikal Analisi Saham : Beginners" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22239%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20239%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164a6f1baa6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164a6f1baa6%22%3E%3Crect%20width%3D%22239%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2288.7578125%22%20y%3D%2295.1%22%3E239x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
					<div class="card-body">
						<h5 class="card-title">Teknikal Analisi Saham : Beginners</h5>
						<p class="card-text">
							This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
						</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">
							Last updated 3 mins ago
						</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
