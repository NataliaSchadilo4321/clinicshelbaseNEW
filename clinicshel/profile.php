<?php
include('dbConnection.php'); 
session_start();
if($_SESSION ['is_login']){
	$email = $_SESSION['email'];
} else {
	echo "<script>location.href='login.php'</script>";
 }
 $sql = "SELECT email, first_name, last_name FROM register_db WHERE email = '$email'";
 $result = $conn->query($sql);
 if($result->num_rows ==1){
 	$row = $result->fetch_assoc();
 	$first_name = $row['first_name'];
 	$last_name = $row['last_name'];
 }
 
?>

<!DOCTYPE html>
<html lahng="en">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatibel" content="ie=edge">
	<link rel="stylesheet" href="../styles/bootstrap.css">
	<link rel="stylesheet"  href="../styles/all.css">
	<link rel="stylesheet"  href="../styles/custom.css">

		<title>Profile</title>

</head>
<body>
<nav class="navbar navbar-primary fixed-top bg-primary flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="profile.php">Clinic_ShElL</a></nav>
<div class="container-fluid" style="margin-top:40px;">
	<div class="row">
		<nav class="col-sm-2 bg-light sidebar py-5">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="profile.php"><i class=" fas fa-user"></i>Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="submit.php"><i class=" fab fa-accessible-icon"></i>Submit Request</a></li>
					<snap><li class="nav-item"><a class="nav-link" href="logout.php"><i class=" fas fa-sign-out-alt"></i>Logout</a></li></snap>
				</ul>
			</div>
		</nav>
		<div class="col-sm-6 mt-5">
		<form action="" method="POST" class="mx-5">
			<div class="form-group">
				<label for="email">Email</label> <input type="email" class="form-control" name="email" id="email" value="<?php echo $email?>" readonly>
			</div>
			<div class="form-group">
				<label for="first_name">First name</label><input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $first_name?>">
				</div>
				<div class="form-group">
				<label for="last_name">Last name</label><input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $last_name?>">
                 
		</form>	
		</div>
	</div>
</div>

</body>
</html>