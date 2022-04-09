@extends('layout.master')

@section('styles')
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
transition:all ease 1s;
color:red;

}
#menu
{
background:transparent;
}

</style>
@endsection

@section('main_content')
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
<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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

<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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
<div class="col-sm-3 py-2">
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

<div class="row gallery"></div>
<div class="row register"></div>
@endsection