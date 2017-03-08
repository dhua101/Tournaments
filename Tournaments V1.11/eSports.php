<?php
?>

<!DOCTYPE html>
<html>
<title>Tournaments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-yellow.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script type="text/javascript" src="Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
table,th,td {border:2px black solid}
.w3-gold {background-color:#daa520 !important}
.champ {background-image: url(http://now-here-this.timeout.com/wp-content/uploads/2012/07/confetti2.gif)}
.codxp {background-image: url(https://c5.staticflickr.com/9/8527/29200996420_1359c5b5cc_h.jpg)}
.lolworld {background-image: url(https://www.rockpapershotgun.com/images/15/oct/semi1.jpg)}

  .w3-next {
      background-color: #b3b3ff;
  }

  .w3-now {
      background-color: #80ff80;
  }

  .w3-past {
      background-color: #ff9999;
  }

  table, th, td {
    border: 1px solid black;
    text-align: center;
  }
  
  .carousel-image img {
    animation-delay: 8s;
  }
</style>
<body>
<!-- Navbar -->
<ul class="w3-navbar w3-theme-d2 w3-top w3-left-align w3-large" style="z-index:4;">
  <li class="w3-opennav w3-right w3-hide-large">
    <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </li>
  <li class="w3-hide-small"><a href="tournaments.html" class="w3-hover-white">Home</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-white">eSports</a></li>
  <li class="w3-hide-small"><a href="Autosports.php" class="w3-hover-white">Autosports</a></li>
  <li class="w3-hide-small"><a href="Individual_Sports.php" class="w3-hover-white">Individual Sports</a></li>
  <li class="w3-hide-small"><a href="Team_Sports.php" class="w3-hover-white">Team Sports</a></li>
  <li class="w3-hide-small"><a href="Chat_Discussions.php" class="w3-hover-white">Chatbox and Discussion Room</a></li>
  <li class="w3-hide-small"><a href="Contact_me.html" class="w3-hover-white">Contact Me</a></li>
  <li class="w3-right"><a class="w3-padding-16 w3-hover-white" href="#"><i class="fa fa-search"></i></a></li>
</ul>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l2 w3-animate-left" style="z-index:3;width:250px;margin-top:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-large w3-padding-large w3-hover-yellow w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-container">
    <p class="w3-large"><b>Popular</b></p>
    <a href="CoDChamps.php" style="font-size:12px">[{(=-=-= -->)}]CoD World League Championships</a>
    <p class="w3-large"><b>Trending</b></p>
    <a href="CoDChamps.php" style="font-size:12px">[{(=-=-= -->)}]CoD World League Championships</a>
    <p class="w3-large"><b>Tournaments</b></p>
    <a href="CoDChamps.php" style="font-size:12px">[{(=-=-= -->)}]CoD World League Championships</a>
    <p class="w3-large"><b>Organizations</b></p>
    [{(=-=-= -->)}]MLG
    <br>
    [{(=-=-= -->)}]NBA
    <br>
    [{(=-=-= -->)}]NHL    
  </div>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <!-- <div class="w3-row w3-padding-64">
    <div class="w3-container">
        <p>Website Process:</p>
        <div class="w3-progress-container">
            <div class="w3-progressbar w3-blue" style="width:32%"></div>
        </div>
    </div>
  </div> -->

  <br>
  <br>

  <div class="w3-padding-32 w3-container">
    <div class="w3-accodion w3-light-grey">
        <button onclick="comptourney('CoD')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Call of Duty eSports
        </button>
        <div id="CoD" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
                <div class="w3-container w3-left-align w3-half">
                    <p>Sept 1-4, 2016</p>
                </div>
                <div class="w3-container w3-right-align w3-half">
                    <p><a href="CoDChamps.php">Call of Duty World League Championship</a></p>
                </div>
            </div>
        </div>
        <button onclick="comptourney('Halo')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Halo eSports
        </button>
        <div id="Halo" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('LoL')" class="w3-btn-block w3-theme-l1 w3-left-align">
            League of Legends eSports
        </button>
        <div id="LoL" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('Smite')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Smite eSports
        </button>
        <div id="Smite" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('RL')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Rocket League eSports
        </button>
        <div id="RL" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('Dota2')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Dota 2 eSports
        </button>
        <div id="Dota2" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('SCII')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Starcraft II eSports
        </button>
        <div id="SCII" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('CSGO')" class="w3-btn-block w3-theme-l1 w3-left-align">
            CS:GO eSports
        </button>
        <div id="CSGO" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('Hearthstone')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Hearthstone eSports
        </button>
        <div id="Hearthstone" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('Smash')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Smash eSports
        </button>
        <div id="Smash" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('HoS')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Heroes of Storm eSports
        </button>
        <div id="HoS" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
        <button onclick="comptourney('Overwatch')" class="w3-btn-block w3-theme-l1 w3-left-align">
            Overwatch eSports
        </button>
        <div id="Overwatch" class="w3-accordion-content w3-container">
            <div class="w3-container w3-border w3-next w3-center">
                Upcoming
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-now w3-center">
                Current
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
            <div class="w3-container w3-border w3-past w3-center">
                Past
            </div>
            <div class="w3-panel w3-border w3-center">
            </div>
        </div>
    </div>
  </div>

  <br>
  <br>

  <footer id="myFooter">
    <div class="w3-container w3-padding-10">
      <center>
        <h4>Latest News</h4>
        <marquee width="25%" behavior="scroll" direction="left">
          <p>
          </p>
        </marquee>
      </center>
    </div>

    <div class="w3-container w3-green">
      <p></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}

// show and hide events and competitions and tournaments
function comptourney(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>