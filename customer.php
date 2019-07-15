<?php
session_start();
include("config.php");
?>
<html>
<head>
<title>Customer Information</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6{font-family: "Lato", sans-serif;}
body,html{
font-size: 20px;
height:100%;
color: #777;
line-height:1.8;
background-color: white;
}
    .bgimg-1{
        background-image: url('https://hdqwalls.com/wallpapers/audi-pic.jpg');
        min-height: 400px;
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    input[type=email]{
       padding: 5px 300px;
        border: 2px solid grey; 
    }
    input[type=text]{
        padding: 5px 300px;
        border: 2px solid grey;
    }
    input[type=textarea]{
        padding: 5px 300px;
        border: 2px solid grey;
    }
    button{
        background-color: cadetblue;
        color: azure;
        display: inline-block;
        border-radius: 5px;
        padding: 12px 150px;
    }
    button:hover{
        background-color: skyblue;
    }
    input[type=text]:focus{
        border: 2px solid #101010;
    }
    .myNavbar{
        color: cornflowerblue;
    }
    .w3-wide{letter-spacing: 10px;}
    </style>
    </head>
    <body>
        <div class="w3-top">
            <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-block w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="intmdt.php" class="w3-bar-item w3-button" onclick="toggleFunction()">BACK TO HOME</a>    
            <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">FORM</a>
            <a href="#delete" class="w3-bar-item w3-button" onclick="toggleFunction()">DELETE</a>
            <a href="#update" class="w3-bar-item w3-button" onclick="toggleFunction()">UPDATE</a>
            </div>
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="intmdt.php" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">BACK TO HOME</a>
            <a href="#home" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">FORM</a>
            <a href="#delete" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">DELETE</a>
            <a href="#update" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">UPDATE</a>
            </div>
        </div>
    <div class="bgimg-1 w3-display-container w3-opacity-min">
        <div class="w3-display-middle" style="white-space:nowrap;"></div>
        <div class="w3-display-bottommiddle"><span class="w3-xxlarge w3-text-white w3-wide">CUSTOMER DATABASE</span></div>
        </div>
        <div class="w3-content w3-container"><center>Please fill in the following details with care</center><br>
            <form method="post">

    Social Security Number:<br> <input type="text" name="cid" required/><br><br>
    First Name: <br><input type="text" name="cfname" required/><br><br>
    Last Name:  <br><input type="text" name="clname" required/><br><br>
    Address:  <br> <input type="textarea" name="address" required/><br><br>
    Email-id: <br> <input type="email" name="cemailid" required/><br><br>
    Phone Number:<br> <input type="text" name="cphno" required/><br><br>   
    <button value="submit" name="click">submit</button></form></div>
      <div class="w3-container w3-padding-32 w3-black w3-center w3-wide" id="delete">DELETE CUSTOMER</div><br>
        <div class="w3-content w3-container"><form method="post">
        Enter the Customer ID:<br><input type="text" name="did" required/><br><br>
            <button name="del" value="delete">delete</button></form></div>
        <div class="w3-container w3-padding-32 w3-black w3-center w3-wide" id="update">UPDATE CUSTOMER DATABSE</div><br>
        <div class="w3-content w3-container"><form method="post">
            Enter the customer Id to be updated:<br><input type="text" name="cusid" required/><br><br>
            First Name: <br><input type="text" name="cusfname" required/><br><br>
    Last Name:  <br><input type="text" name="cuslname" required/><br><br>
    Address:  <br> <input type="textarea" name="cusaddress" required/><br><br>
    Email-id: <br> <input type="email" name="cusemailid" required/><br><br>
    Phone Number:<br> <input type="text" name="cusphno" required/><br><br>   
    <button value="update" name="update">Update</button></form></div>
        <script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

    </body>
    <?php 
    
$link=connecttodb();
if(isset($_POST['click']))
{
 $id="";$cfn="";$cln="";$cadd="";$cmail="";$cph="";
 if(!filter_var($_POST["cemailid"],FILTER_VALIDATE_EMAIL)){
          $erm="Invalid mail format";
          echo "<script type='text/javascript'>alert('$erm');</script>";
    }
  else{
    $id=$_POST['cid'];
    $cfn=$_POST['cfname'];
    $cln=$_POST['clname'];
    $cadd=$_POST['address'];
    $cmail=$_POST['cemailid'];
    $cph=$_POST['cphno'];
    
$sql="INSERT INTO Customer 

VALUES

('$id','$cfn','$cln','$cadd','$cmail','$cph')";


if (!mysqli_query($link,$sql))

  {

  die('This entry already exists: ' . mysql_error());

  }
$msg="1 record added";
echo "<script type='text/javascript'>alert('$msg');</script>";
    
}
}
        if(isset($_POST['del']))
    {
        $link=connecttodb();
        $dcid="";
        $dcid=$_POST['did'];
        $sql="DELETE FROM customer where Cid='$dcid'";
        if (!mysqli_query($link,$sql))

  {

  die('Invalid ID: ' . mysql_error());

  }
$msg="Entry Deleted";
echo "<script type='text/javascript'>alert('$msg');</script>";
    
    }
    if(isset($_POST['update']))
    {
        $link=connecttodb();
        $ucid="";$ucfname="";$uclname="";$ucadd="";$ucmail="";$ucph="";
        if(!filter_var($_POST["cusemailid"],FILTER_VALIDATE_EMAIL)){
          $erm="Invalid mail format";
          echo "<script type='text/javascript'>alert('$erm');</script>";
    }
        else
        {
            $ucid=$_POST['cusid'];
    $ucfname=$_POST['cusfname'];
    $uclname=$_POST['cuslname'];
    $ucadd=$_POST['cusaddress'];
    $ucmail=$_POST['cusemailid'];
    $ucph=$_POST['cusphno'];
            $sql="UPDATE customer SET C_fname='$ucfname',C_lname='$uclname',Address='$ucadd',C_emailid='$ucmail',C_phno='$ucph' WHERE Cid='$ucid'";
            if (!mysqli_query($link,$sql))

  {

  die('Invalid ID: ' . mysql_error());

  }
$msg="Updated successfully";
echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    }
?>
</html>