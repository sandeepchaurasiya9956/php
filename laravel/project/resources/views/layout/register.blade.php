@extends('layout.master')

@section('styles')
<style>
.a
{
height:60px;
}
.b
{
min-height:400px;
}
</style>
@endsection 

@section('main_content')
</head>
<body>
  <form action="{{url('register/save-user')}}" method="post">
    @csrf
<div class="container-fluid">
<div class="row a bg-light justify-content-evenly">
<div class="col-sm-2 a bg-warning"><h3>@TECHPILE</h3></div>
<div class="col-sm-9 a bg-light">
<!---start menu--->
<nav class="navbar navbar-expand-lg navbar-light my-0 py-0" id="menu">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home">Home</i></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">About</a>
        </li>
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
		  data-bs-toggle="dropdown" aria-expanded="false">
            Registration
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Classroom Training</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Online Training</a></li>
            
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Courses</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Certificate</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
		  data-bs-toggle="dropdown" aria-expanded="false">
            Training
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Summer Training</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Industrial Training</a></li>
            <li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Winter Training</a></li>
            <li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Syllabus Training</a></li>
            <li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#"></>Apprenticeship Training</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Placement</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Gallery</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
		  data-bs-toggle="dropdown" aria-expanded="false">
            Gallery
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Image Gallery</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Video Gallery</a></li>
            <li><hr class="dropdown-divider"></li>
           
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!---end menu--->
</div>
</div>
<h4 class="text-center">Register<b class="text-warning"> With Us</b></h4>
<div style="height:3px; width:90px; background:orange; margin-left:630px; margin-top:5px;"></div><br/>
<div class="row b bg-light  justify-content-center py-2">
<div class="col-sm-5 bg-light py-2">
<!--input group-->
Enroll No.:
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div>
Name :
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
  <input type="email" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div>
College Name :
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-graduation-cap"></i></span>
  <input type="email" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div>
 Year
<div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-window-maximize"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div>
  Email Id
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
  <input type="email" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div></br>
  <input type="button" value="Register Now" class="btn btn-warning"/>
  <!--end group-->
</div>
<div class="col-sm-5 bg-light py-2">
<!--input group-->
Today Is
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="date" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1">
  </div>
Apply For
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-email"></i></span>
  <input type="email" class="form-control" placeholder="Select Training Name" aria-label="Username"
  aria-describedby="basic-addon1"/>
  </div>
Course
<div class="input-group">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
  aria-describedby="basic-addon1"/>
  </div>
  Contact No.:
<div class="input-group">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
  <input type="text" class="form-control" placeholder="Please Enter No." aria-label="Username"
  aria-describedby="basic-addon1"/>
  </div>
Amount To Pay
<div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-inr"></i></span>
  <input type="text" class="form-control" placeholder="Enter Your Amount" aria-label="Username"
  aria-describedby="basic-addon1"/>
  </div>
  </div>
  <!--end group-->
 </div>
@endsection