<?php
session_start();
include("config.php");
?>
<html>
<head><title>Vehicles Information</title>
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
    input[type=text],select{
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
        <div class="w3-display-bottommiddle"><span class="w3-xxlarge w3-text-white w3-wide">VEHICLE DATABASE</span></div>
        </div>
        <div class="w3-content w3-container" id="home"><center>Please fill in the following details with care</center><br>
<form method="post">
Vehicle Model Number:<br><input type="text" name="vid" required/>
     <br><br>
Vehicle Name:<br><input type="text" name="vname" required/><br><br>
Vehicle Colour:<br><input type="text" name="vcolor" required/><br><br>
Price:<br><input type="text" name="vprice" required/><br><br>
    Location ID:<br><select name="locid" required>
    <option value="1">Vittal Mallya Road</option>
    <option value="2">Hosur Main Road</option>
  </select><br><br>
    <button value="submit" name="submit">Submit</button>
            </form></div>
   <div class="w3-container w3-padding-32 w3-black w3-center w3-wide" id="delete">REMOVE VEHICLE</div><br>
        <div class="w3-content w3-container"><form method="post">
        Enter the Vehicle Model Number:<br><input type="text" name="did" required/><br><br>
            <button name="del" value="delete">Delete</button></form></div> 
        <div class="w3-container w3-padding-32 w3-black w3-center w3-wide" id="update">UPDATE VEHICLE DATABASE</div><br>
        <div class="w3-content w3-container"><form method="post">
            Enter the Model Number of the Vehicle to be updated:<br><input type="text" name="vehid" required/>
     <br><br>
Vehicle Name:<br><input type="text" name="vehname" required/><br><br>
Vehicle Colour:<br><input type="text" name="vehcolor" required/><br><br>
Price:<br><input type="text" name="vehprice" required/><br><br>
    Location ID:<br><select name="vehlocid" required>
    <option value="1">Vittal Mallya Road</option>
    <option value="2">Hosur Main Road</option>
  </select><br><br>
    <button value="update" name="update">Update</button>
            </form></div>
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
if(isset($_POST['submit']))
{
 $id="";$vn="";$vcol="";$lid="";$vpri="";
    $id=$_POST['vid'];
    $vn=$_POST['vname'];
    $vcol=$_POST['vcolor'];
    $lid=$_POST['locid'];
    $vpri=$_POST['vprice'];
    
$sql="INSERT INTO Vehicle 

VALUES

('$id','$vn','$vcol','$vpri','$lid')";


if (!mysqli_query($link,$sql))

  {

  die('This Entry Already Exists: ' . mysql_error());

  }
$msg="1 record added";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
if(isset($_POST['del']))
{
    $dvid="";
    $dvid=$_POST['did'];
    $sql="DELETE FROM vehicle WHERE Vid='$dvid'";
    if (!mysqli_query($link,$sql))

  {

  die('Invalid ID: ' . mysql_error());

  }
$msg="Entry deleted";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
if(isset($_POST['update']))
{
    $uvid="";$uvn="";$uvcol="";$uvloc="";$uvpri="";
    $uvid=$_POST['vehid'];
    $uvn=$_POST['vehname'];
    $uvcol=$_POST['vehcolor'];
    $uvpri=$_POST['vehprice'];
    $uvloc=$_POST['vehlocid'];
    $sql="UPDATE vehicle SET Vname='$uvn',Colour='$uvcol',Price='$uvpri',Loc_id='$uvloc' WHERE Vid='$uvid'";
    if (!mysqli_query($link,$sql))

  {

  die('Invalid ID: ' . mysql_error());

  }
$msg="Updated Successfully";
echo "<script type='text/javascript'>alert('$msg');</script>";
}

    ?>
    
</html> 