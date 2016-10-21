<!DOCTYPE html>
<html>
<head>
<title> NokDok </title>


</head>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/default.css" rel="stylesheet">
  </head>

  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php if(strpos($_SERVER['REQUEST_URI'], "hospital_list.php")) { ?>
              <li class="active"><a href="hospital_list.php">Hospital List</a></li>
            <?php } else {  ?>
              <li ><a href="hospital_list.php">Hospital List</a></li>
            <?php } ?>
            <?php if(strpos($_SERVER['REQUEST_URI'], "doctor_max_time.php")) { ?>
              <li class="active"><a href="hospital_list.php">Doctor with max time in hospital</a></li>
            <?php } else {  ?>
              <li><a href="doctor_max_time.php">Doctor with max time in hospital</a></li>
            <?php } ?>
            <?php if(strpos($_SERVER['REQUEST_URI'], "doctor_hosp_mulvisit.php")) { ?>
              <li class="active"><a href="doctor_hosp_mulvisit.php">Doctor visiting hospital Multiple Times</a></li>
            <?php } else {  ?>
              <li><a href="doctor_hosp_mulvisit.php">Doctor visiting hospital Multiple Times</a></li>
            <?php } ?>
            <?php if(strpos($_SERVER['REQUEST_URI'], "hospital_list_maxDoc.php")) { ?>
              <li class="active"><a href="hospital_list_maxDoc.php">Hospital With Max Doctors</a></li>
            <?php } else {  ?>
              <li><a href="hospital_list_maxDoc.php">Hospital With Max Doctors</a></li>
            <?php } ?>
            <?php if(strpos($_SERVER['REQUEST_URI'], "doctor_list.php")) { ?>
              <li class="active"><a href="doctor_list.php">Doctor List</a></li>
            <?php } else {  ?>
              <li><a href="doctor_list.php">Doctor List</a></li>
            <?php } ?>
          </ul>
        </div>

  
