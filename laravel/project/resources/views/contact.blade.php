@extends('layout.master')

@section('styles')

@endsection

<link href="css/contact.css" rel="stylesheet" type="text/css"/>
@section('main_content')
<div class="row contact py-3 justify-content-evenly">
<h4 class="text-center contact-font">Contact <b class="text-warning"> Us</b></h4>
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
@endsection