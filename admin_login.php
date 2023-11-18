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

?><!DOCTYPE html>
<html>
<head>
	<title>Fitness Gym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
        }

        .navbar-brand {
            font-size: 24px;
            color: #fff;
            text-decoration: none;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        h2 {
            color: black;
            text-align: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .form-control {
            width: 300px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #343a40;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #23272b;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h3>Fitness Gym</h3></a>
        </div>
    </nav>
    <hr>
    <h2>To be used by admin only.</h2>
    <hr>
    <form class="form" action="" method="post">
        <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="USERNAME" required> <br/>
        <input type="password" class="form-control mb-2 mr-sm-2" name="pwd" placeholder="PASSWORD" required> 
        <button type="submit" class="btn btn-outline-light mb-2" name="login_user">Login</button>
    </form>
</body>
</html>
</html>