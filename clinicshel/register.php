<?php 
if(isset($_REQUEST['Submit'])){
  include('dbConnection.php');
  date_default_timezone_set ("Europe/Kiev");
  $email = $_REQUEST['email'];
  $first_name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $password = $_REQUEST['password'];
  $confirm_password = $_REQUEST['confirm_password'];
  $sql = "INSERT INTO register_db(email, first_name, last_name, password, confirm_password)
  VALUES('$email', '$first_name', '$last_name', '$password', '$confirm_password')"; 

  if ($conn->query($sql) === FALSE)
    echo "Error: " . $sql . "<br>" . $conn->error;

  $conn->close();
}
 ?>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?
  family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext"
        rel="stylesheet">
  <title>Sign Up</title>
</head>
<body>
<div class="body-wrapper">
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">MeD</div>
        <nav class="nav">
          <span><a class="nav__link" href="index.html">Clinic_ShELl</a></span>
          <span><a class="nav__link" href="about_us.html">About us</a></span>
          <span><a class="nav__link" href="contacts.html">Contacts</a></span>
          <span><a class="nav__link" href="login.php">Log in</a></span>
          <span><a class="nav__link" href="register.php">Sign Up</a></span>
          <span><a class="nav__link" href="admin.php">Admin</a></span>
        </nav>
      </div>
    </div>
  </header>
  <div class="intro">
    <div class="container">

      <div class="col-md-8" style="margin: auto;">
        <h2 class="text-center">Sign Up</h2>
        <form action="" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
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
            <label>Password</label>
            <input type="password" name="password" class="form-control"
                   placeholder="Password">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control"
                   placeholder="Confirm_password">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
          </div>
          <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
