<?php
include("auth.php");

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body style="background:url(images/gym_bg.jpg);">



	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
  <a class="navbar-brand" href="home.php">Fitness Gym</a>
  <a href="pendingrequestsystem-master/request.php" class=" nav nav-link">request</a>
  <a href="logout.php" class=" nav nav-link">log out</a>
</div>
</nav>



<div class="row mt-3">
  <div class="col-2">
    <div id="accordion">
    <div class="list-group">
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
        <i class="fas fa-user-alt"></i>GYM</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_gym" class="text-light">ADD GYM</a>
          </div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_gym" class="text-light">VIEW GYMS</a></div>
        </div>

      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
          <i class="fas fa-user-graduate"></i>PAYMENT DEPARTMENT
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=add_payment" class="text-light">ADD PAYMENT AREA</a>
        </div>
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=manage_payment" class="text-light">VIEW PAYMENT AREAS</a>
        </div>
        
      </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
        <i class="fas fa-book"></i>MEMBERS</a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_member" class="text-light">ADD MEMBER</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_member" class="text-light">VIEW MEMBERS</a></div>
        </div>

         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
        <i class="fas fa-users"></i>TRAINERS</a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_trainer" class="text-light">ADD TRAINER</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_trainer" class="text-light">VIEW TRAINERS</a></div>
        </div>
    </div>
</div>
 
  </div>

  <div class="col-10">
   <?php

@$info=$_GET['info'];
if ($info!=="") {
             if ($info=="add_gym") {
             include('add/add_gym.php');
                }
             else if($info=="add_payment")
             {
             include('add/add_payment.php');
             }
             elseif ($info=="manage_payment") {
               include ('manage/manage_payment.php');

             }elseif ($info=="add_member") {
               include ('add/add_member.php');
             }elseif ($info=="manage_member") {
               include ('manage/manage_member.php');
             }elseif ($info=="add_trainer") {
               include ('add/add_trainer.php');
             }elseif ($info=="manage_trainer") {
               include ('manage/manage_trainer.php');
             }elseif ($info=="manage_gym") {
               include ('manage/manage_gym.php');
             }elseif ($info=="update_payment") {
               include ('update/update_payment.php');
             }elseif ($info=="delete_payment") {
               include ('delete/delete_payment.php');
             }elseif ($info=="update_gym") {
               include ('update/update_gym.php');
             }elseif ($info=="delete_gym") {
               include ('delete/delete_gym.php');
             }elseif ($info=="update_member") {
               include ('update/update_member.php');
             }elseif ($info=="delete_member") {
               include ('delete/delete_member.php');
             }elseif ($info=="update_trainer") {
               include ('update/update_trainer.php');
             }elseif ($info=="delete_trainer") {
               include ('delete/delete_trainer.php');
             }elseif ($info=="change_password") {
               include ('change_password.php');
             }elseif ($info=="gym_search") {
               include ('searchbar/gym_search.php');
             }elseif ($info=="member_search") {
               include ('searchbar/member_search.php');
             }elseif ($info=="payment_search") {
               include ('searchbar/payment_search.php');
             }elseif ($info=="trainer_search") {
               include ('searchbar/trainer_search.php');
             }
                      }

?>
  </div>
</div>



</body>
</html>