<html>
<head>
<style>
.top1 .fa
{
border:1px soild white;
height:22px;
width:20px;
padding-top:.70%;
background:white;
color:#ffc107;
border:1px solid white;
border-radius:2px;
}
.top1 .fa:hover
{
transform:rotate(360deg);
transition:all ease 1s;
}
#menu ul li a:hover
{
//background:green;
//border-radius:5px;
transition:all ease 1s;
color:red;
//border:1px soild navy;
}
#menu
{
background:transparent;
}

</style>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
<div class="container-fluid">
<div class="row top1 bg-danger text-center text-light fw-bold py-2">
<div class="col-sm-4">
<i class="fa fa-phone fa-spin"></i><a href="tel:91-8545031690" style="color:#481801;">8545031690</a>
<i class="fa fa-envelope"></i> reeteshkumarsingh83@gmail.com
</div>
<div class="col-sm-4">AN ISO CHOCOLATE CERTIFIED</div>
<div class="col-sm-4">
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-whatsapp"></i>
<i class="fa fa-instagram"></i>
</div>
</div>
<div class="row header bg-light">
<div class="col-sm-3 logo text-center fs-3">
<span class="pt-1">Chocolate<b class="text-warning"> Hub <i class="fa fa-gift"></i></b></span>
</div>
<div class="col-sm-9 menu">
<!--- satar menu-->
<nav class="navbar navbar-expand-lg navbar-light my-0 py-0 float-end" id="menu">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i> Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"> <i class="fa fa-home"></i> Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"> <i class="fa fa-home"></i> Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa fa-home"></i>Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gallery
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Image Gallery</a></li>
            <li><a class="dropdown-item" href="#">Video Gallery</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!--- end menu-->
</div>
</div>
<div class="row slider">
<!---start slider----->
<div id="carouselExampleCaptions" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/m.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/b2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/b3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---end slider----->
</div>
<!---start bootstrap card--->
<div class="row latestproduct justify-content-around py-3">
<h1 style="text-align:center;">Our <b class="text-warning"> Products</b></h1>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<div class="col-sm-2 py-2">
<div class="card">
<img src="image/6.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">product1</h5>
<p class="card-text">product1 of chocolate<br/>
<span class="btn btn-warning">
<b>price:</b><s>1599/-</s>999</span>
</p>
<a href="#" class="btn btn-outline-warning">cart<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Buy Now<i class="fa fa-card"></i></a>
</div>
</div>
</div>
<!---end bootstrap card--->
</div>

<div class="container-fluid">
<div class="row"></div>
</div>

<div class="row intro bg-success text-light justify-content-evenly py-3 bg-opacity-10">
<h4 class="text-center text-dark">About <b class="text-warning"> Us</b></h4>
<h1 style="text-align:center">Hii</h1>
</div>
<div class="row contact py-3 justify-content-evenly">
<h4 class="text-center">Contact <b class="text-warning"> Us</b></h4>
<div class="col-sm-4 frm bg-warning bg-opacity-25 p-4">
<!---input group-->
<form method="post">
Name
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
Email
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-male"></i></span>
  <input type="text" class="form-control" placeholder="Enter the email " aria-label="Username" aria-describedby="basic-addon1">
</div>
Password
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  <input type="text" class="form-control" placeholder="Enter the password" aria-label="Username" aria-describedby="basic-addon1">
</div>
Message
<div class="input-group">
  <span class="input-group-text"><i class="fa fa-envelope"></i>With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div><br/>
<input type="submit" value="Save" class="btn btn-success"/>
</form>
<!---end input group-->

</div>
<div class="col-sm-6 gmap">
<!---google map--->
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3680442.891515932!2d81.10305538767511!3d25.731477326784887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCrop%20grower!5e0!3m2!1sen!2sin!4v1641640527935!5m2!1sen!2sin" 
width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!---end google map--->
</div>
</div>
<div class="row gallery"></div>
<div class="row register"></div>
<div class="row ufooter"></div>
<div class="row bfooter"></div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>