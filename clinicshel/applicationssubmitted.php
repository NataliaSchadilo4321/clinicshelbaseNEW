<?php
session_start();
 include'dbConnection.php';

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

		<title>Applications submitted</title>

</head> 
<body>
<nav class="navbar navbar-primary fixed-top bg-primary flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminprofile.php">Clinic_ShElL</a></nav>
<div class="container-fluid" style="margin-top:40px;">
	<div class="row">
		<nav class="col-sm-2 bg-light sidebar py-5">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="adminprofile.php"><i class=" fas fa-user"></i>Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="applicationssubmitted.php"><i class=" fab fa-accessible-icon"></i>Applications submitted</a></li>
					<li class="nav-item"><a class="nav-link" href="index.html"><i class=" fas fa-sign-out-alt"></i>Logout</a></li>
				</ul>

				
			
    <style type="text/css">
      table {
        width: 300%;
        color:#0000FF;
        font-family: 'Monserrat', sans-serif;
        font-size: 15px;
        margin-left: 400px;
        margin-top: 10px;
        line-height: 2;
        text-align: center;

      }

      th {
        background-color: #0000FF;
        color: white;
      }

      tr:nth-child(even) {background-color: #00FFFF}
    </style>
  </head>
  <body>
   
      <?php
      $sql = "SELECT * FROM appointments";
      $result = $conn-> query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
        	?>
        	 <table>
      <tr>
        <th>Id pacients</th>
        <th>Email</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Id likar</th>
        <th>Id workdays</th>
      </tr>
        	<?php
          echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"]. "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["idlikar"] . "</td><td>" .  $row["idworkdays"] . "</td></tr>";
        }
      }
      else { ?><div class="no-records"><h>Not found appointments<h/></div><?php
      }
      $conn-> close();
      ?>
    </table>
    <?php if(isset($regmsg)){ echo $regmsg;}?>
  </body>
		</html>