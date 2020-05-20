<?php 
include('dbConnection.php');
session_start();
if(!isset($_SESSION['login'])){
if(isset($_REQUEST['email'])){
$email= mysqli_real_escape_string($conn, trim($_REQUEST['email']));
$password=  mysqli_real_escape_string($conn,trim($_REQUEST['password']));
$sql= "SELECT email, password FROM register_db WHERE email = '".$email."' AND password = 
'".$password."' limit 1";
$result = $conn->query($sql);
if($result->num_rows==1){
  $_SESSION['is_login']=true;
  $_SESSION['email'] = $email;
echo "<script> location.href='profile.php';</script>";
 }else{
  $remsg= '<div class="alert">Enter valid email and password</div>';
 }
}
}else{
  exit;
  echo '<div class="alert alert-warning mt-2">Enter valid email and password</div>';

}
 ?>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?
	family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext"
        rel="stylesheet">
  <title>Log in</title>
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
          <span><a class="nav__link" href="profile.php"></a></span>
          <span><a class="nav__link" href="admin.php">Admin</a></span>

        </nav>
      </div>
    </div>
  </header>
  <div class="intro">
    <div class="container">
      <div class="col-md-7" style="margin: auto;">
         <h2 class="text-center">Log in</h2>
        <form action="" method="post">
          <div class="form-group" style="line-height: 2">
            <label>Email</label>
            <input type="text" name="email" class="form-control"
                   placeholder="Email">
            <span class="help-block"></span>
          </div>
        
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"
                  placeholder="Password">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login" name="Login">
            <input type="reset" class="btn btn-default" value="Reset">
          </div>

          <p>No personal profile?  <a href="register.php">Sign up!</a></p>
        </form>

      </div>
    </div>
  </div>
</div>
</body>