<?php include 'connection.php';

$uid=$_SESSION['user_id'];
extract($_GET);
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="user_viewroutes.php">View Routes</a>
	<a href="user_applyforpass.php">Apply For Pass</a>
	<a href="user_renewpass.php">Renew Pass</a>
	<a href="user_feedback.php">Feedback</a>
	<a href="user_searchbus.php">Search Bus</a>
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
          <li class="active"><a href="user_home.php">Home</a></li>
           <li><a href="user_searchbus.php">Search Bus</a></li>
          <li><a class="drop" href="#">Passes</a>
            <ul>
             
              <li><a href="user_applyforpass.php">Apply For Pass</a></li>
              <li><a href="user_renewpass.php">Renew Pass</a></li>
             
             
            </ul>
          </li>
          <li><a class="drop" href="#">View </a>
            <ul>
               <li><a href="user_viewroutes.php">View Routes</a></li>
             
              <li><a href="user_viewmybookings.php">View My Bookings</a></li>
             
             
            </ul>
          </li>
           <li><a href="user_feedback.php"> Feedback</a></li>
          <li><a href="public_login.php">Logout</a></li>
          
        </ul>
      </nav>
    </header>
  </div>
