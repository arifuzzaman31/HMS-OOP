<?php include_once 'func.php';?>		
<!DOCTYPE html>
<html>
<head>
	<title>Search_item</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron"></div>
	<div class="container">
		<div class="card" style="background-color:#3498DB; color:#ffffff;">
			<div class="card-body">	
					<div class="text-center"><h3>Search_Result</h3></div>
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
						      <th>Doctor</th>
						      <th>Payment</th>
						    </tr>
						  </thead>
						  <tbody>
		<?php
 		if (isset($_POST['searchBtn'])) {
 			/*$searchq = $_POST['searchitm'];
 			$searchq = preg_replace("#[^0-9a-z]#i", " ", $searchq);
 			$srchqry = $db->query(" SELECT * FROM doctorapp WHERE fname LIKE '%{$searchq}%' OR lname LIKE '%{$searchq}%' OR email LIKE '%{$searchq}%' OR contact LIKE '%{$searchq}%' ");
 			$srchqry->execute();
 				if ($srchqry->rowCount() > 0) {
 					while ($row = $srchqry->fetch(PDO::FETCH_ASSOC)) {


 					$html="<div><tr><td>'.$row['id'].'</td><td>$row['fname']></td><td>$row['lname']</td><td>$row['email']</td><td>$row['contact']</td><td>$row['docapp']</td><td>$row['payment']</td></tr></div>";
					
								 <tr>
								      <td><?= $row['id']; ?></td>
								      <td><?= $row['fname']; ?></td>
								      <td><?= $row['lname']; ?></td>
								      <td><?= $row['email']; ?></td>
								      <td><?= $row['contact']; ?></td>
								      <td><?= $row['docapp']; ?></td>
								      <td><?= $row['payment']; ?></td>
								</tr>
					
 					}
 					$mgs="Hurre! data found";
 						return $mgs;
header('location:msg.php?found');
 					
 				}
 				else{ header('location:msg.php?nofnd');
 						//echo "Here No data like: {$searchq}";
 					 	} */	
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
