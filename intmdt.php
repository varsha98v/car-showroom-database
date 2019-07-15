<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}
/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #123;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;
    margin: 0;
    }
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    margin-left: 260px;
    padding-left: 20px;
            background-image: : url("https://www.setaswall.com/wp-content/uploads/2017/04/Audi-Wallpaper-1-2560x1600.jpg");
        min-height: 100%;
          background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    
</style>
    <title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
<i class="fa fa-audi"></i>
<div class="sidenav">
  <a href="customer.php" action="customer.php"><i class="fa fa-group"></i> Customer Information</a>
  <a href="vehicle.php" action="vehicle.php"><i class="fa fa-car"></i> Vehicle Information</a>
  <a href="test.php" action="test.php"><i class="fa fa-id-card-o"></i> Salesperson Information</a>
  <a href="deal.php"><i class="fa fa-handshake-o"></i> Orders</a>
    <a href="homepage.html" action="homepage.html"><i class="fa fa-home"></i> Logout</a>
</div>

<div class=" w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div>
</div>
    <div class="w3-content w3-section w3-display-container" style=" max-width:2500px ">
  <img class="mySlides" src="https://images7.alphacoders.com/412/412668.jpg" style="background-attachment: fixed; width:100%">
  <img class="mySlides" src="https://photobest1.com/wp-content/uploads/2017/02/top-10-Audi-Logo-Wallpaper-HD-free-02.jpg" style="background-attachment: fixed; width:100%">
  <img class="mySlides" src="http://www.hdcarwallpapers.com/walls/adv1_audi_r8_v10-HD.jpg" style="width:100%; background-size: cover;">
  
  <img class="mySlides" src="https://www.pixelstalk.net/wp-content/uploads/2016/03/Photo-audi-logo-wallpaper-hd-desktop-background.jpg" style="width:100%; background-size: cover;">
  <img class="mySlides" src="https://cdn.wallpapersafari.com/60/63/U4vcki.jpg" style="width:100%; background-size: cover;">
  <img class="mySlides" src="https://www.planwallpaper.com/static/images/Audi-Cars-Wallpapers-HD-26.jpg" style="width:100%; background-size: cover;">
  
  <img class="mySlides" src="http://www.technocrazed.com/wp-content/uploads/2015/12/Audi-Wallpaper-42.jpg" style="width:100%; background-size: cover;">
  <img class="mySlides" src="http://www.carlogos.org/logo/Audi-logo-640x480.jpg" style="width:100%; background-size: cover;">
  <img class="mySlides" src="http://i1.wp.com/desktopwalls.net/wp-content/uploads/2015/09/Audi%20Prologue%204K%20Ultra%20HD%20Desktop%20Wallpaper.jpg?resize=960%2C540&ssl=1" style="width:100%">
  <img class="mySlides" src="https://wallpapercave.com/wp/wp1958168.jpg" style="width:100%; background-size: cover;">
</div>
    <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
      <a href="vsales.php" class="w3-bar-item w3-button"><i class="fa fa-id-card"></i> View Salespersons</a>
    <a href="vcust.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-group"></i> View Customers</a>
    <a href="vcar.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-car"></i> View Vehicles</a>
     <a href="vdeal.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-handshake-o"></i> View Orders</a> 
    <a href="vlogs.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> View logs</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="vsales.php" class="w3-bar-item w3-button" onclick="toggleFunction()">View Salespersons</a>
    <a href="vcust.php" class="w3-bar-item w3-button" onclick="toggleFunction()">View Customers</a>
    <a href="vcar.php" class="w3-bar-item w3-button" onclick="toggleFunction()">View Vehicles</a>
       <a href="vdeal.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> View Orders</a>
      <a href="vlogs.php" class="w3-bar-item w3-button" onclick="toggleFunction()">View logs</a>
  </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
  



</body>
</html>