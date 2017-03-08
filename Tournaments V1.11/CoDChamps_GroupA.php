<?php
?>

<!DOCTYPE html>
<html>
<title>Group A</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
table,th,td {border:2px black solid}
</style>
<body>
<!-- Navbar -->
<ul class="w3-navbar w3-purple w3-top w3-left-align w3-large" style="z-index:4;">
  <li class="w3-opennav w3-right w3-hide-large">
    <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </li>
  <li class="w3-hide-small"><a href="Tournaments.html" class="w3-hover-white">Home</a></li>
  <li class="w3-hide-small"><a href="eSports.php" class="w3-white">eSports</a></li>
  <li class="w3-hide-small"><a href="Autosports.php" class="w3-hover-white">Autosports</a></li>
  <li class="w3-hide-small"><a href="Individual_Sports.php" class="w3-hover-white">Individual Sports</a></li>
  <li class="w3-hide-small"><a href="Team_Sports.php" class="w3-hover-white">Team Sports</a></li>
  <li class="w3-hide-small"><a href="Chat_Discussions.php" class="w3-hover-white">Chatbox and Discussion Room</a></li>
  <li class="w3-hide-small"><a href="Contact_me.html" class="w3-hover-white">Contact Me</a></li>
  <li class="w3-right"><a class="w3-padding-16 w3-hover-white" href="#"><i class="fa fa-search"></i></a></li>
</ul>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-red w3-animate-left" style="z-index:3;width:250px;margin-top:0px;" id="mySidenav">
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

  <article class="w3-container" style="margin-top:50px">
    <div class="w3-row-padding">
        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Group A</h3>
        </div>

        <div class="w3-padding-16">
            This is Group A of the Call of Duty World League Championships. Group A consists of the following 4 teams:
            <ul>
                <li><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</li>
                <li><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</li>
                <li><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</li>
                <li><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</li>
            </ul>
        </div>
    </div>
  </article>

  <article class="w3-container">
    <div class="w3-row-padding">
        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Overview</h3>
        </div>

        <div class="w3-padding-16">
            <div class="w3-half w3-center w3-container w3-padding-20">
                <table>
                    <tr>
                        <th></th>
                        <th>Team</th>
                        <th>W</th>
                        <th>L</th>
                        <th>W%</th>
                        <th>MW</th>
                        <th>ML</th>
                        <th>M%</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0.00%</td>
                    </tr>
                </table>
            </div>

            <div class="w3-half w3-center w3-container w3-padding-20">
                <table>
                    <tr>
                        <th>Round #1</th>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                    </tr>
                </table>
                
                <br>

                <table>
                    <tr>
                        <th>Round #2</th>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                    </tr>
                </table>
                
                <br>

                <table>
                    <tr>
                        <th>Round #3</th>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce vs.<img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </article>

  <article class="w3-container">
    <div class="w3-row-padding">
        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Results</h3>
        </div>

        <div class="w3-padding-16">
            <div class="w3-third w3-center w3-container w3-padding-20">
                <h5>Round #1</h5>
                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                        <td></td>
                    </tr>
                </table>

                <br>

                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <div class="w3-third w3-center w3-container w3-padding-20">
                <h5>Round #2</h5>
                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                        <td></td>
                    </tr>
                </table>

                <br>

                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <div class="w3-third w3-center w3-container w3-padding-20">
                <h5>Round #3</h5>
                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                        <td></td>
                    </tr>
                </table>

                <br>

                <table>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/ac/Logo_std2.png">Livin the Dream</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </article>

  <article class="w3-container">
    <div class="w3-row-padding">
        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Group A --> Knockout Stage</h3>
        </div>

        <div class="w3-padding-16">
            <div class="w3-half w3-center w3-container w3-padding-20">
                <h4>Advance to Knockout Stage</h4>
                <table>
                    <tr>
                        <td>1st Group A</td>
                    </tr>
                    <tr>
                        <td>2nd Group A</td>
                    </tr>
                </table>
            </div>
            <div class="w3-half w3-center w3-container w3-padding-20">
                <h4>Eliminated</h4>
                <table>
                    <tr>
                        <td>3rd Group A</td>
                    </tr>
                    <tr>
                        <td>4th Group A</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </article>

  <br>
  <br>

  <footer id="myFooter">
    <div class="w3-container w3-aqua w3-padding-10">
      <center>
        <h4>Latest News</h4>
        <marquee width="25%" behavior="scroll" direction="left">
          <p>
            Call of Duty World League Championships will be held in Los Angeles on September 1-4. 2016
            [{(=-=-=))}]
            Wings Gaming wins Dota2 The International 2016
            [{(=-=-=)}]
            Black Forest Games signs the roster of Revoltables
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
</script>

</body>
</html>