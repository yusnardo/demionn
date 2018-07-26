<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Demion - @yield('title')</title>
    <meta name="author" content="Yusnardo Tendio">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/master.css" rel="stylesheet">
    <link href="/sass/app.scss" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm bg-red">
            <div id="navbarnav" class="collapse navbar-collapse">
                <div class="container">
                    <div class="row">
                        <ul class="nav navbar-nav navbar-left"> 
                            @if(Auth::Check())         
                                <a class="nav-item" href="/course" title="Demion">
                                    <img class="img-responsive" href="/course" src="https://image.ibb.co/f9Xmby/logo.png" alt="Demion" style="width:80px;height:50px;">
                                </a>
                                <a class="nav-link nav-item" href="/course">Course</a>  
                                <a class="nav-link nav-item" href="/dasbor">Dasbor</a>       
                            @else
                                <a class="nav-item" href="/" title="Demion">
                                    <img class="img-responsive" href="/" src="https://image.ibb.co/f9Xmby/logo.png" alt="Demion" style="width:80px;height:50px;">
                                </a>
                                <a class="nav-link nav-item" href="/course">Course</a>       
                            @endif
                            
                            <!-- <li class="nav-item">
                                <span class="nav-link">Blog</span>
                            </li> -->
                        </ul>
                        <ul class="nav navbar-nav ml-auto push-left">
                            @if(Auth::Check())         
                                <div class="dropdown mt-3">
                                  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->email }}
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/profile/{user}">Profile</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                  </div>
                                </div>
                            @else
                                <a class="nav-link" href="/login">Login</a>
                                <a class="nav-link" href="/register">Register</a>         
                            @endif
                        </ul>
                    </div>            
                </div>       
            </div>
        </div>
        <div class="body-content">
            <div class="container">
                @include('layouts.partials._alert')
            </div>
            @yield('content')
        </div>

        <div class="fc-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 fc-copyright__text">
                        <h4>Payment Method</h4>
                        <ul class="list-inline">
                            @for ($i = 1; $i <= 3; $i++)
                                <li>
                                    <img src="/img/pm-{{$i}}.png" class="img-responsive css-class" alt="alt text"  style="width: 60px;">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-sm-6 fc-copyright__text">
                        <h4></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline u-mt--10">
                            <li>
                                <span>Demion is website that is engaged in education. We're committed to building the best learning experience inside and out. Formal education is outdated. So our platform will be the best place for you.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-inline u-mt--10">
                            <li>
                                <span>© 2018. All Rights Reserved. Made with</span>
                            </li>
                            <li>
                                <i class="fa fa-heart icon-heart"></i> 
                            </li>          
                            <li>
                                by Demion
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  

    </div>
    <!-- Scripts -->
    <script src="js/app.js/"></script>
    <script src="public/js/bootstrap.js/"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
