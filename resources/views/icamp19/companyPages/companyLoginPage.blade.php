@extends('icamp19.layout.mainLayout')
@section('login')
<div class="main-content bg-default">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <img src="{{asset('img/brand/white.png')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="{{asset('img/brand/blue.png')}}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/register">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/login">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Company Login</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              

            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Sign in with credentials</small>
              </div>
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-inner--text"><strong>{{ session('error') }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif 
                {!! Form::open( ['action' => 'companyController@login', 'method' => 'POST','enctype' => 'multipart/form-data','id' => 'myForm'] ) !!}
                    <div class="form-group input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                      
                        <input type="text" id="name" name="name" class="form-control form-control-alternative"  placeholder="Company ID" required>
                      
                    </div>
                        @if(($errors)->has('name')) 
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                               <span class="alert-inner--text">
                               @foreach ($errors->get('email') as $error)
                                   <div>{{$error}}</div>
                               @endforeach
                               </span>
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                          </div>
                        @endif
                    <div class="form-group input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Enter your password', 'id'=>'password', 'name'=>'password'])!!}
                        @if(($errors)->has('password')) 
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <span class="alert-inner--text">
                              @foreach ($errors->get('password') as $error)
                                <li>{{$error}}</li>
                              @endforeach
                              </span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4" name="submit" id="submit">Login</button>
                    </div> 
                {!! Form::hidden('_method','POST') !!}
                {!! Form::close() !!}
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="/getForgetPasswordPage" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="/register" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection