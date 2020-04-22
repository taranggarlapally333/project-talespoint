<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tales Point</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" >


<body>


	<nav class="navbar navbar-inverse fixed-top navbar-expand-md">

	   <div class="container-fluid">
	      <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo-white.png"></a>




	   <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#Cnav" aria-controls="Cnav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa fa-navicon" style="color:black; font-size:28px;"></i></span>
        </button>




        <div class="collapse navbar-collapse" id="Cnav">
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="index.php">Home</a></li>

	      <li>
	      <form action="search.php" method="POST" role="form" class="form-inline search-form">

	      <div class="form-group search-input-group"><input class="form-control form-control-lg" type="text" name="search-input" placeholder="Search...">


	      <select class="form-control search-select" name="search-by">
	      	<option value="title">By Title</option>
	      	<option value="author">By Author</option>
	      </select>


	      <button type="submit" name="submit" onclick="window.location.href='search.php'" class="btn btn-inverse search-submit" ><span class="glyphicon glyphicon-search"></span></button>
	     </div>
	     </form>
	     </li>


	      <li>
	      	<a href="#" class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown">WRITE<span class="caret"></span></a>
		    <ul class="dropdown-menu">
		      <li><a href="Swrite.php">New Story +</a></li>
		    </ul>
		   </li>


			<li><a href="explore.php?result=sci-fi">EXPLORE</a></li>

		    <li><a href="#" class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
	               <ul class="dropdown-menu">
					      <li><a href="profile.php">Profile</a></li>
					      <li><a href="profile.php#mylist">My list</a></li>
					      <li><a href="Settings.php#editsettings">Settings</a></li>
					      <li><a href="#">Report</a></li>
					      <li><a href="logout.php">Logout</a></li>
				   </ul>
			</li>
        </ul>
    </div>
    </div>
    </nav>
