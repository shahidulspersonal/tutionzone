<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#job {
  top: 20px;
  background-color: #04AA6D;
}

#account {
  top: 80px;
  background-color: #2196F3;
}

#payment {
  top: 140px;
  background-color: #A569BD;
}

#message {
  top: 200px;
  background-color: #555
}

#logout {
  top: 260px;
  background-color: #f44336;
}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="#" id="job">Job Board</a>
  <a href="updateTprofile.php" id="account">Account</a>
  <a href="#" id="payment">Payment</a>
  <a href="#" id="message">Message</a>
  <a href="index.php" id="logout">Logout</a>
</div>

<div style="margin-left:80px;">
  <h2>JOB BOARD</h2>

</div>

</body>
</html>
