<?php
if(isset($_REQUEST['Submit'])){
  include('dbConnection.php');
  date_default_timezone_set ("Europe/Kiev");
  $email = $_REQUEST['email'];
  $first_name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $likar = $_REQUEST['likar'];
  $workdays = $_REQUEST['workdays'];
  $sql = "INSERT INTO appointments(email, first_name, last_name, likar, workdays)
  VALUES('$email', '$first_name', '$last_name', '$likar', '$workdays')"; 

  if ($conn->query($sql) === FALSE)
    echo "Error: " . $sql . "<br>" . $conn->error;

  $conn->close();
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
					<li class="nav-item"><a class="nav-link" href="logout.php"><i class=" fas fa-sign-out-alt"></i>Logout</a></li>
				</ul>
			</div>
		</nav>
	
	 <div class="col-md-8  py-5" style="margin: auto;">
        <h2 class="text-center">Make an appointment</h2>
        <form action="" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" >
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label>First name</label>
            <input type="text" name="first_name" class="form-control"
                   placeholder="First_name">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="text" name="last_name" class="form-control"
                   placeholder="Last_name">
            <span class="help-block"></span>
          </div>
     
            <div class="form-group">
            <label>Select a doctor:</label>
            <select name="likar" class="form-control" id="likar">
            	<option value="">select doctor</option>
            	<?php
            	include('dbConnection.php'); 
            	$query=mysqli_query($conn,"SELECT * FROM likar");
            	while ($row=mysqli_fetch_array($query)) {
            		?>
            		<option value="<?php echo $row['id'];?>"><?php echo $row['firstname'].' '.$row['lastname'].' /'.$row['speciality'].' /'.$row['number'].' /'.$row['cabinet_number'];?></option>
            	<?php	
       }
       ?>
            </select>
          </div>
          <div class="form-group">
            <label>Day/appointents</label>
            <select name="workdays" class="form-control" id="workdays">
            	<option value="">select day</option>
            	<?php
            	include('dbConnection.php'); 
            	$query=mysqli_query($conn,"SELECT * FROM workdays");
            	while ($row=mysqli_fetch_array($query)) {
            		?>
            		<option value="<?php echo $row['id'];?>"><?php echo $row['day'].' -'.$row['start_time'].' -'.$row['end_time'];?></option>
            	<?php	
       }
       ?>
            </select>
          </div>
          <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
            <input type="hidden" name="project_name" value="Clinic_ShElL">
           
        </form>
      </div>
    </div>
  </div>
</div>
</body>
	</div>
</div>
</body>
</html>