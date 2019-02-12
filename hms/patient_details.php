 <?php include_once 'func.php';?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pateint_Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('img/3.jpg'); background-size: cover; height: 300px;"></div>
	<div class="container">
		<div class="card" style="background-color:#3498DB; color:#ffffff;">
			<div class="card-body">
				<div class="row">
					<div class="col-md-1"><a href="admin-panel.php"  class="btn btn-light">Go Back</a></div>
						<div class="col-md-4"><h3>Patients Details</h3></div>
							<div class="col-md-2"></div>
						<div class="col-md-4">
							<form action="msg.php" method="POST">
								<input type="text" name="searchitm" class="form-control" placeholder="Search">
								</div>
								<div class="col-md-1"><input type="submit" name="searchBtn" class="btn btn-light" value="Search"></div>
							</form>
					</div>
				</div>
			</div>
			<div class="card-body" style="background-color:#3498DB; color:#ffffff;">

					<table class="table table-hover">
						  <thead>
						    <tr>
						      <th>id</th>
						      <th>First-name</th>
						      <th>Last-name</th>
						      <th>Email</th>
						      <th>Contact</th>
						      <th>Go To</th>
						      <th>Payment</th>
						    </tr>
						  </thead>
						  <tbody>
						  			
						  		<?php
						  			$q=$db->query(" SELECT * FROM doctorapp ");

						  			while ($row=$q->fetch(PDO::FETCH_ASSOC)) {
						  				 
						  				?>
											  	<tr>
											      <td><?= $row['id']; ?></td>
											      <td><?= $row['fname']; ?></td>
											      <td><?= $row['lname']; ?></td>
											      <td><?= $row['email']; ?></td>
											      <td><?= $row['contact']; ?></td>
											      <td><?= $row['docapp']; ?></td>
											      <td><?= $row['payment']; ?></td>
											    </tr>
						  				<?php
						  			}
						  		?>
						    
						  </tbody>
					</table>
				
			</div>
		</div>	
	</div>	
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>