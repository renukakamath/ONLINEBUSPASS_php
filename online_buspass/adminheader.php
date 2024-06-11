<?php include 'connection.php' ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin_manageplace.php">Manage Place</a>
	<a href="admin_managebus.php">Manage Bus</a>
	<a href="admin_manageroutes.php">Manage Routes</a>
	<a href="admin_viewusers.php"> view Users</a>
	
	<a href="admin_viewpassreq.php">View Pass Request</a>
	<a href="admin_viewrenpass.php">View Renewal pass</a>
	<a href="admin_viewfeedback.php">View Feedback</a>
	<a href="admin_viewpass.php"> View expired Pass</a>
	<a href="public_login.php">Logout</a> -->
	 <!DOCTYPE html>
<!--
Template Name: Basend
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>online bus pass</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/3.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="#">Bus Pass</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="admin_home.php">Home</a></li>
          <li><a class="drop" href="#">Manage</a>
            <ul>
              <li><a href="admin_manageplace.php">Places</a></li>
              <li><a href="admin_managebus.php"> Buses</a></li>
              <li><a href="admin_manageroutes.php"> Routes</a></li>
             
            </ul>
          </li>
          <li><a class="drop" href="#">Views</a>
            <ul>
              <li><a href="admin_viewusers.php">Users</a></li>
              <li><a class="" href="admin_viewpassreq.php">Pass Request</a>
         
                  <li><a href="admin_viewrenpass.php">Renewal pass</a></li>
                  <li><a href="admin_viewfeedback.php"> Feedback</a></li>
                  <li><a href="admin_viewpass.php">expired Pass</a></li>
                    <li><a href="admin_viewbookingseat.php">Booking seat</a></li>
                    <li><a href="admin_viewbooking.php">View Booking</a></li>
             
            </ul>
          </li>
          <li><a href="public_login.php">Logout</a></li>
          
        </ul>
      </nav>
    </header>
  </div>



