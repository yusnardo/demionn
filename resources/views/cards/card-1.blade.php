@extends('layouts.app')
@section('title', '')

@section('content')

<div class="modal" id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
        <form>
        	{{ csrf_field() }}
			{{ method_field('patch') }}
			 <div class="form-group">
				<label for="formGroupExampleInput">Name Pengirim</label>
				<input type="text" name="name" class="form-control" placeholder="Nama Pengirim">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Nominal</label>
				<input type="text" name="email" value="75.000" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary btn-block mb-2">Konfirmasi Pembayaran</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 40px;">
	<div class="row">
	  	<div class="col-4">
	    	<div class="list-group" id="list-tab" role="tablist">
	      		<a class="list-group-item list-group-item-action active" id="course_1_modul_1" data-toggle="list" href="#course_1_modul_1_content" role="tab" aria-controls="modul_1">
	      			Modul - 1
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_2" data-toggle="list" href="#course_1_modul_2_content" role="tab" aria-controls="modul_2">
	      			Modul - 2
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_3" data-toggle="list" href="#course_1_modul_3_content" role="tab" aria-controls="modul_3">
	      			Modul - 3
	      		</a>
	      		<a class="list-group-item list-group-item-action disabled" id="course_1_modul_4" data-toggle="list" href="#course_1_modul_4_content" role="tab" aria-controls="modul_4">
	      			Modul - 4
	      		</a>
	      		<a class="list-group-item list-group-item-action disabled" id="course_1_modul_5" data-toggle="list" href="#course_1_modul_5_content" role="tab" aria-controls="modul_5">
	      			Modul - 5
	      		</a>
	      		<a class="list-group-item list-group-item-action disabled" id="course_1_modul_6" data-toggle="list" href="#course_1_modul_6_content" role="tab" aria-controls="modul_6">
	      			Modul - 6
	      		</a>
	      		<a class="list-group-item list-group-item-action disabled" id="course_1_modul_7" data-toggle="list" href="#course_1_modul_7_content" role="tab" aria-controls="modul_7">
	      			Modul - 7
	      		</a>
	      		<a class="list-group-item list-group-item-action disabled" id="course_1_modul_8" data-toggle="list" href="#course_1_modul_8_content" role="tab" aria-controls="modul_8">
	      			Modul - 8
	      		</a>
	    	</div>
	  	</div>
	  	<div class="col-8 account_page">
	    	<div class="tab-content" id="nav-tabContent">
		      	<div class="tab-pane show active" id="course_1_modul_1_content" role="tabpanel" aria-labelledby="course_1_modul_1">
		      		...
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_2_content" role="tabpanel" aria-labelledby="course_1_modul_2">
		      		...
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_3_content" role="tabpanel" aria-labelledby="course_1_modul_3">
		      		Do you want to read more?
		      		<button style="margin-top: 10px;" type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#payment" >Bayar Sekarang</button>
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_4_content" role="tabpanel" aria-labelledby="course_1_modul_4">
		      		aaaa
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_5_content" role="tabpanel" aria-labelledby="course_1_modul_5">
		      		...
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_6_content" role="tabpanel" aria-labelledby="course_1_modul_6">
		      		...
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_7_content" role="tabpanel" aria-labelledby="course_1_modul_7">
		      		...
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_8_content" role="tabpanel" aria-labelledby="course_1_modul_8">
		      		...
		      	</div>
	    	</div>
	  	</div>
	</div>
</div>


@endsection