<?php 
include_once 'func.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<title>massage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
<body class="bg-primary">
	<div class="container-fluid">
		<?php
			if (isset($_GET['admin'])) { 

				?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-danger">Your Username Or Password incurrect.<br>Please try again.</p>

			<a href="index.php" class="btn btn-primary btn-sm border-light">Try again!</a>
			</div>
			
		<?php
			}
		?>


		<?php
			if(isset($_GET['booking'])) { ?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">Your Appoinment has been booked.<br>Thank You.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>
			<?php
		}
		 ?>

		<!--  <?php 
	// if (isset($_GET['hello'])) {
		?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">Welcome to admin Panel.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Get the panel</a>
			</div>
			<?php
	//}

?> -->
<?php 
	if (isset($_GET['session'])) {
		?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">You have Logout.</p>

			<a href="index.php" class="btn btn-primary btn-sm border-light">Return to Home</a>
			</div>
			<?php
	}

?>
		 <?php
			if (isset($_POST['searchBtn'])) { ?>

			<div class="container mt-4 text-white">
				<div class="text-center"><h3>Search_Result</h3></div>
					<div class="card-body">
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

			<?php
			$searchq = $_POST['searchitm'];
 			$searchq = preg_replace("#[^0-9a-z]#i", " ", $searchq);
 			$srchqry = $db->query(" SELECT * FROM doctorapp WHERE fname LIKE '%{$searchq}%' OR lname LIKE '%{$searchq}%' OR email LIKE '%{$searchq}%' OR contact LIKE '%{$searchq}%' ");
 			$srchqry->execute();
 				if ($srchqry->rowCount() > 0) {
 					while ($row = $srchqry->fetch(PDO::FETCH_ASSOC)) { ?>
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
 					
 				}
 				else{ header('location:msg.php?nofnd');
 						//echo "Here No data like: {$searchq}";
 					}
		}

		?>
		</tbody>
	</table>
	
</div>

		<?php
		if (isset($_GET['nofnd'])) {
			  ?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">Here no data like this<br>Try another.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>

			<?php
		}
		?>
	<?php
			if (isset($_GET['scsupdate'])) {
				?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">Your Payment status has been updated.<br>Thank You.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>
			<?php
				}
			?>
			<?php if (isset($_GET['nsupdate'])) {
				?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-danger">Your Payment status has not been updated.<br>Try again.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>
			<?php
				} 
			?>
<?php
		if (isset($_GET['drnamesc'])) {
			
			?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-white">Doctor name successfully added.<br>Try again.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>
			<?php
		}
		if (isset($_GET['drnameerr'])) {
			
			?>
				<div style="text-align: center; font-size: 22px; margin-top: 100px;">
			<p class="text-center text-danger">Name not added.<br>Try again.</p>

			<a href="admin-panel.php" class="btn btn-primary btn-sm border-light">Return to admin-panel</a>
			</div>
			<?php
		}
 ?>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
