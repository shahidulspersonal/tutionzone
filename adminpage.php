<?php

$conn = mysqli_connect('localhost','root','','project') or die('connection failed');
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
};

if(isset($_GET['Logout'])){
   unset($user_id);
   session_destroy();
   header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar .side-header{
      margin-left: 30px;
      margin-bottom: 8px;
      color: #fff;
  }

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}
.active {
  background-color: green;
  color: white;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">

  <div class="side-header">
      <img src="uploaded_img/admin1.jpg" width="120" height="120" >
      <h5 style="margin-top:10px;">Hello, Admin</h5>
  </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>



  <div class="sidenav">
    <a href="#"><i class="fa fa-dashboard" style="font-size:24px"></i> DASHBOARD</a>
    <a href="#"><span class="glyphicon glyphicon-user"></span> ACCOUNT</a>
    <a href="#"> <i class="fa fa-telegram" style="font-size:24px"></i> JOB POST</a>
    <button class="dropdown-btn">TUTOR
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="viewtutor">View Tutor</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
    <button class="dropdown-btn">STUDENT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
    <a href="#"> <i class="fa fa-fw fa-envelope"></i> MESSAGES</a>
  </div>


</div>

<div id="main">


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">

        <button class="openbtn" onclick="openNav()">☰</button>

      </div>
      <a class="navbar-brand" href="#">TUTION ZONE</a>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>

      <a href="index.php" class="btn btn-danger navbar-btn" role="button">Logout</a>

    </ul>
    </div>
  </nav>

  <script>

  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
  </script>


  <h2>Admin Dashboard</h2>

  <br>
</br>
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">TOTAL TUTORS</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">TOTAL STUDENTS</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">APPLIED JOBS</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


</body>
</html>
