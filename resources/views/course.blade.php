@extends('layouts.app')
@section('title', 'Course')

@section('content')

<div class="modal" id="tes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"">How to use our MODULE???</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
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
				<button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#tes" >Learn More
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
							Rp. 75.000
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
