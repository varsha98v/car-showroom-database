<?php
 session_start();
include("config.php");
 $link=connecttodb();
?>
<html>
    <head>
    <title>Orders Information</title>
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
    input[type=date]{
        padding: 5px 150px;
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
            <a href="#update" class="w3-bar-item w3-button" onclick="toggleFunction()">UPDATE</a>
            </div>
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="intmdt.php" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">BACK TO HOME</a>
            <a href="#home" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">FORM</a>
            <a href="#update" class="w3-bar-item w3-button w3-grey" onclick="toggleFunction()">UPDATE</a>
            </div>
        </div>
    <div class="bgimg-1 w3-display-container w3-opacity-min">
        <div class="w3-display-middle" style="white-space:nowrap;"></div>
        <div class="w3-display-bottommiddle"><span class="w3-xxlarge w3-text-white w3-wide">ORDERS DATABASE</span></div>
        </div>
        <div class="w3-content w3-container"><center>Please fill in the following details with care</center><br>
      <form method="post">

Customer Unique ID:<br><input type="text" name="cid" required/><br><br>
Vehicle Model Number:<br><input type="text" name="vid" required/><br><br>
Salesperson ID:<br><input type="text" name="sid" required/><br><br>
Sale Price:<br><input type="text" name="salprice" required/><br><br>
    Registration Date:<br><input type="date" name="regidate" required/><br><br>
Delivery Date:<br><input type="date" name="delidate" required/><br><br>
   
          <button value="submit" name="click">Submit</button>
   </form>
        </div>
        <div class="w3-container w3-padding-32 w3-black w3-center w3-wide" id="update">UPDATE ORDERS</div><br>
    <div class="w3-content w3-container"><form method="post">
        Enter the Customer ID of the Order to be updated:<br><input type="text" name="cusid" required/><br><br>
        Vehicle Model Number:<br><input type="text" name="vehid" required/><br><br>
        Enter the Sale Price:<br><input type="text" name="sprice" required/><br><br>
        Registration date:<br><input type="date" name="regdate" required/><br><br>
        Delivery date:<br><input type="date" name="deldate" required/><br><br>
        <button value="update" name="update">Update</button>
        </form>
        </div>
</body>
    <?php
   
    if(isset($_POST['click']))
{
 $vehid="";$salid="";$sprice="";$deldate="";$regdate="";$custid="";
    $custid=$_POST['cid'];    
    $vehid=$_POST['vid'];
    $salid=$_POST['sid'];
    $sprice=$_POST['salprice'];
    $regdate=$_POST['regidate'];    
    $deldate=$_POST['delidate'];
    
$sql="INSERT INTO Deal 

VALUES

('$custid','$vehid','$salid','$sprice','$regdate','$deldate')";


if (!mysqli_query($link,$sql))

  {

  die('Error: ' . mysql_error());

  }
$msg="1 record added";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
    if(isset($_POST['update']))
    {
        $uvid=$ucid=$upri=$ureg=$udel="";
        $ucid=$_POST['cusid'];
        $uvid=$_POST['vehid'];
        $upri=$_POST['sprice'];
        $ureg=$_POST['regdate'];
        $udel=$_POST['deldate'];
        $sql="UPDATE deal SET Vid='$uvid',Sale_price='$upri',Reg_date='$ureg',Del_date='$udel' WHERE Cid='$ucid'";
        if (!mysqli_query($link,$sql))

  {

  die('Invalid ID: ' . mysql_error());

  }
$msg="Updated Successfully";
echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
?>
    </html>