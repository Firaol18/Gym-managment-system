<?php
session_start();
require('db.php');

$username="";
$errors = array(); 


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


  if (count($errors) == 0) {
    $query = "SELECT * FROM login WHERE uname='$username' AND pwd='$pwd'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $username;
      header("location:home.php");
    }else {
      array_push($errors, "<div class='alert alert-warning'><b>Wrong username/password combination</b></div>");

    }
  }
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>Fitness Gym</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
    .background {
  position: fixed;
  z-index: -1000;
  width: 100%;
  height: 100%;
  overflow: hidden;
  top: 0;
  left: 0;
}

.form {
  width: 30%;
  margin-left: 35%;
  margin-top: 7%;
}

hr {
  background-color: white;
}

.navbar {
  background-color: transparent;
}

/* Additional Styles */
body {
  margin: 0;
  padding: 0;
}

.navbar-brand {
  color: white;
  margin-right: 20px;
}

.nav-link {
  color: white;
}
 img {
      width: 400px;
      height: auto;
    }


h2 {
  color: white;
  text-align: center;
}

.form-control {
  margin-bottom: 10px;
}

.btn {
  color: red;
  margin-top: 10px;
}

.col {
  text-align: center;
  margin-top: 30px;
}

.col h2 {
  margin-bottom: 10px;
}

.col p {
  margin-bottom: 5px;
}

.col span {
  font-weight: bold;
}

.footer {
  background-color: #343a40;
  color: white;
  padding: 20px;
  text-align: center;
}

.socials ion-icon {
  color: white;
  font-size: 24px;
  margin-right: 10px;
}
  </style>
  
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><h3>Fitness Gym</h3></a>
   <a href="admin_login.php">adminonly</a>
   <a href="pendingrequestsystem-master/signin.php">signin</a>
   <a href="pendingrequestsystem-master/signup.php">signup</a>
</div>
</nav>


  <img src="images/gym2_bg.jpg" alt="Image 2">
  <img src="images/gym3_bg.jpg" alt="Image 3">
  
  <img src="images/gym7_bg.jpg" alt="Image 7">
  <img src="images/gym8_bg.jpg" alt="Image 8">
  <img src="images/gym9_bg.jpg" alt="Image 9">
  <img src="images/gym10_bg.jpg" alt="Image 10">
  <img src="images/gym12_bg.jpg" alt="Image 12">
  <img src="images/gym13_bg.jpg" alt="Image 13">
  <img src="images/gym14_bg.jpg" alt="Image 14">
<div class="col">
        <h2 style="color:black; text-align:center;"> <a href="#">Contact details</a></h2>
        <span><p>email</p></span>
        <span>fitnessgym@gmail.com</span>
        <br />
        <br />
        <span><p>phone</p></span>
        <span>+251920443110</span>
        <br />
        <br />

        <span><p>Address</p></span>
        <span>
          Adama <br />
          
        </span>
      </div>
    </div>
  </section>
  <!-- contact section ends -->

  <!-- footer section starts -->
<section class="footer" id="footer">
    <div class="socials">
      <ion-icon name="logo-google"></ion-icon>
      <ion-icon name="logo-twitter"></ion-icon>
      <ion-icon name="logo-youtube"></ion-icon>
      <ion-icon name="logo-linkedin"></ion-icon>
    </div>
    <p>&copy; copyright 2023 <br> desinged and developed by Firaol Desalegn</p>
  </section>
  <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>

</body>
</html>