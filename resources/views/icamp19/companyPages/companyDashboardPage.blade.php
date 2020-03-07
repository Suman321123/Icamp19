@extends('icamp19.layout.mainLayout')
@section('member')
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/company/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/member/dashboard">
                <img src="{{asset('img/brand/blue.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <!-- <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/member/idcard">
                  <i class="ni ni-shop text-orange"></i>Icard Distribution
                </a>
              </li>
        </ul> -->
               <!-- Divider -->
               <hr class="my-3">
               <!-- Heading -->
               <h6 class="navbar-heading text-muted">Navigate</h6>
               <!-- Navigation -->
               <ul class="navbar-nav mb-md-3">
                 <li class="nav-item">
                   <a class="nav-link" href="#">
                     <i class="ni ni-spaceship"></i> Icamp home page
                   </a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="https://ecell.org.in/">
                     <i class="ni ni-support-16"></i> KIIT E-Cell
                   </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="https://ecell.org.in/">
                    <i class="ni ni-support-16"></i> About KIIT and KISS
                  </a>
                </li>
                 
               </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Profile</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
              
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ $company->Company_name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <!-- <a href="./pages/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./pages/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span> -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="/company/logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
        </div>
      </div>
    </div>
<br><br>
@if($company)
<?php
$count=1;
?>
<div class="table-responsive">
    <table class="table align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th>S.No</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">ICAMP ID</th>
                
                <th scope="col">Email Id</th>
                <th scope="col">Resume</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>  
                <td>
                {{ $count++ }}
                </td>
                <td>
                    {{ $d->candidates->name }}
                </td>
                <td>
                    {{ $d->candidates->icamp_id }}
                </td>
                <td>
                    {{ $d->candidates->email }}
                </td>
                <td>
                <a href="/company/downloadResume/{{ $d->candidates->resume }}">{{ $d->candidates->resume }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>            
@endif       
@endsection
