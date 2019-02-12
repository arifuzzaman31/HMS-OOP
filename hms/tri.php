<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Search_item</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo.png" height="30"> LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav ml-auto mr-3"> 
<li class="nav-item">
<a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item"><a class="nav-link" href="">Documentation</a></li>
<li class="nav-item"><a class="nav-link" href="">Facility</a></li>
<li class="nav-item"><a class="nav-link" href="">Contact</a></li>
    </ul>
  </div>
</nav>
	<div class="container">
		<div class="card" style="background-color:#3498DB; color:#ffffff; margin-top: 20px;">
			<div class="card-body">	
					<div class="text-center"><h3>Search_Result</h3></div>
			</div>
			</div>
			<div class="card-body" style="background-color:#3498DB; color:#ffffff; ">

					<table class="table table-hover">
						  <thead>
						    <tr>
						      <th>id</th>
						      <th>First-name</th>
						      <th>Last-name</th>
						      <th>Email</th>
						      <th>Contact</th>
						      <th>Doctor</th>
						      <th>Payment</th>
						    </tr>
						  </thead>
						  <tbody>		    
						  </tbody>
					</table>
				
			</div>
		</div>	
	</div>	
</div>

<div class="container">
<div class="row mt-2">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

<form class="form-group" action="" method="POST">

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="row">First-name:</th>
      <th colspan="2"><input type="text" class="form-control" name="fname" placeholder="Enter First-Name"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Last-name:</th>
      <td colspan="2"><input type="text" class="form-control" name="lname" placeholder="Enter Last-name"></td>

    </tr>
    <tr>
      <th scope="row">Email:</th>
      <td colspan="2"><input type="text" class="form-control" name="email" placeholder="Enter Email"></td>
    </tr>
    <tr>
      <th scope="row">Contact:</th>
      <td colspan="2"><input type="text" class="form-control" name="contact" placeholder="Enter Contact number"></td>
    </tr>
    <tr>
      <th scope="row">Doctor:</th>
      <td colspan="2"><select class="form-control" name="docapp">
									<option>Select one</option>
									<option>Dr Farid</option>
									<option>Dr Reza</option>
									<option>Dr Sultana</option>
									<option>Dr Kanto</option>
								</select></td>
    </tr>
    <tr>
      <th scope="row">Payment:</th>
      <td colspan="2"><select class="form-control" name="payment">
									<option>Select one</option>
									<option>Paid</option>
									<option>Paid Latter</option>
								</select></td>
    </tr>
  </tbody>
</table>
 <input type="submit" class="btn btn-primary" name="pat_sub" value="Enter Appoinment">
							
						</form>


      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>