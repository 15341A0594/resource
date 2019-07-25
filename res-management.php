<?php
session_start();

if(!($_SESSION['auth']==true))
{
header('location:Login.html');
}

?>

<html>
<head>
<style>
body
{
background-image:url("index40.jpg");
background-repeat:no-repeat;
background-size:140%;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  border-radius:25px;
  width:100%;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 12px 26px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 12px 26px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
border-radius:25px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.button {
  background-color: #;
  color: white;
  padding: 10px 26px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px; 
  transition-duration: 1.5s;
  cursor: pointer;
  border-radius:25px;
  align:right;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
.button1:hover {
  background-color: #000000;
  color: white;
</style>
</head>
<body>
<left><h1 style="color:#541244"> Welcome to Resource Portal</h1></left>
<DIV style="position: absolute; top:75px; right:45px; ">
<img src=index27.png width=50 height=50 >
</div>
<div style="position: absolute; top:73px; right:100px;color:#0066cc ; ">
<h3><?php 
echo $_SESSION['auth'];
?></h3>
</div>
<div class="navbar">
  <a href="managerportal.html">Home</a>
  <a href="https://www.infinite.com/partners/" align='right'>Client</a>
  <a href="empstatus.php">Status</a>
<a href="request.html">Client Request</a>
<a href="client.php">Requirements</a>
  <div class="dropdown">
    <button class="dropbtn">Resource 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="resource.html">Update</a>
      <a href="record.php">View</a>
    </div>
  </div>
</div>
<div align=right>
<button class="button button1" onclick="window.location.href = 'logout.php';">Logout</button>
</div>
<DIV style="position: absolute; top:605px; right:65px; ">
<i><h2 style=color:#541244 >"When something is important enough, <br> you do it even if the odds are not in your favor."</h2></i>
</div>
<DIV style="position: absolute; top:657px; right:2px; ">
<i><h4 style=color:blue >- Elonmusk</h4></i>
</div>
</body>
</html>

