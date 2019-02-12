<?php include_once 'func.php';
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<title>hms</title>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
<body>
		<!-- Its Nav searchbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#"><i class="far fa-hospital"></i>&nbsp;Global Hospital</a>
 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span></button>

<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout<span class="sr-only">(current)</span></a></li>
    </ul>
<form class="form-inline my-2 my-lg-0" action="msg.php" method="POST">
    <input class="form-control mr-sm-2" name="searchitm" type="text" placeholder="Search">
 		<button class="btn btn-primary border border-white my-2 my-sm-0" type="submit" name="searchBtn">Search</button>
    </form>
  </div>
</nav>
				<!-- END Its Nav searchbar -->

<div class="jumbotron" style="background: url('img/1.jpg') no-repeat; background-size: cover;height: 300px;">
<?php 
    $un = $_SESSION['un'];
      if (!$un) {
            header('location:index.php');
          //header('location:admin-panel.php');
      }
     /* else{

          if (isset($_GET['hello'])) {
   
        echo '<div style="text-align: center; font-size: 22px; margin-top: 0px;">
      <p class="btn btn-primary btn-xl border-light">Hello! '.$un.', Welcome to admin Panel.</p>
      </div>';
  }
         // echo 'Hello ! Mr. '.$un;
      }*/
?>
</div>
<div class="container-fluid">
	<div class="row mt-2">
  		<div class="col-4">
    		<div class="list-group" id="list-tab" role="tablist">
     			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appoinment</a>
     				 <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
      			<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Prescription</a>
     		<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Doctor's Section</a>
    </div>
  </div>
 <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
						
							<!-- AppoinmentSectionStart -->
		<div class="card">
			<div class="card-body">
				<h6 class="text-center">Create an Appoinment</h6>
<form class="form-group" action="func.php" method="POST">
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
									 <?php doctor_list(); ?> 
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
	</div>
						<!-- AppoinmentSectionEnd -->
  </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      					
      					<!-- PaymentSectionStart -->
      		<div class="card">
      			<div class="card-body">
      				<form class="form-group" action="func.php" method="POST">
      					<input type="text" name="" class="form-control" placeholder="Enter Contact"><br>
      					   <select name="status" class="form-control">
            						<option value="">Select One</option>
            						<option value="">Paid</option>
            						<option value="">Pay Later</option>
      					   </select><br>
      					<input type="submit" class="btn btn-primary" name="update_data" value="Update">
      				</form>
      			</div>   			
      		</div>
      					<!-- PaymentSectionEnd -->
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" action="func.php" method="POST">
                        <lebel class="text-xl-left">Name of Dr :</lebel>
                        <input type="text" name="drname" class="form-control"><br>
                        <input type="submit" name="addr" class="btn btn-primary" value="Add Doctor">
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
							
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>	
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
swal({
  position: 'top-center',
  type: 'success',
  title: 'Welcome to admin panel',
  showConfirmButton: false,
  timer: 1500
  })
});
/*	$(document).ready(function(){
		swal({
  title: 'Welcome!',
  text: 'Get well soon.',
  imageUrl: 'img/11.jpg',
  imageWidth: 330,
  imageHeight: 200,
  imageAlt: 'Custom image',
  animation: false
	})
}); */

</script>

</body>
</html>