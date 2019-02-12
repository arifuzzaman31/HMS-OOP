<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
try {
	$db = new PDO('mysql:host=localhost;dbname=hmsdb','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch (Exception $e) {
	echo $e->getMessage();
}
?>
<?php
				if (isset($_POST['subBtn'])) {
					
					$un = $_POST['uname'];
					$pass = $_POST['password'];
						$stmt = $db->prepare(" SELECT * FROM logintb where username='$un' && pass='$pass' ");
							$stmt->execute();
								$result = $stmt->fetchAll(PDO::FETCH_OBJ);
							if ($result) {
								$_SESSION['un'] = $un;
								//$_SESSION['pass'] = $pass;
								//header('location:admin-panel.php?hello');

						 header('location:admin-panel.php');
						}
					else{
						header('location:msg.php?admin');
								//echo "<script>alert('Error Login')</script>";
								//echo "<script>window.open.('msg.php')</script>";	
						}
				}

			?>


<?php
		if (isset($_POST['update_data'])){
				if (!empty($_POST)) {
					$contact = $_POST['contact'];
						$payment = $_POST['payment'];
					$stmt = $db->prepare(" SELECT contact FROM doctorapp ");
					$stmt->execute();

					if($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){

						$number = $row['contact'];
							if ($contact !== $number) {
								
								header('location:msg.php?nsupdate');
							}
							else{

					$stmt = $db->prepare(" UPDATE doctorapp SET payment='$payment' where contact='$contact' ");
						$stmt->execute();
							header('location:msg.php?scsupdate');

							}
					}
				}

		}
?>
<?php 
	function doctor_list(){

	global $db;
	$stmt = $db->prepare(" SELECT * FROM doctb ");
        $stmt->execute();
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
              <option><?= $row['name'];?></option>;
      <?php     
      }
		}	
 ?>
<?php
		if (isset($_POST['addr'])) {
			
			if (!empty($_POST)) {
				$drname = $_POST['drname'];
					$stmt = $db->prepare(" INSERT INTO doctb (name) VALUE('$drname') ");
						$stmt->execute();
					header('location:msg.php?drnamesc');
			}
			else{
				header('location:msg.php?drnameerr');
			}
		}
?>
<?php
ob_start();
				if (isset($_POST['pat_sub'])) {
					
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$contact = $_POST['contact'];
					$docapp = $_POST['docapp'];
					$payment = $_POST['payment'];

	$stmt = $db->prepare(" INSERT INTO doctorapp (fname,lname,email,contact,docapp,payment) VALUE ('$fname','$lname','$email','$contact','$docapp','$payment')");
	$result = $stmt->execute();

					if ($result) {
						
						header('location:msg.php?booking');
					}
				}
				ob_end_flush();

?>
