<?php
$podA = [
    "EnVyUs",
    "FaZe",
    "Ground Zero",
    "Team infused",
    "Lumionsity Gaming",
    "Millenium",
    "OpTic Gaming",
    "Rise Nation"
];

$podB = [
    "Team Allegiance",
    "compLexity Gaming",
    "Team eLevate",
    "HyperGames",
    "Team KaLiBeR",
    "Mindfreak",
    "Team Orbit ANZ",
    "Splyce"
];

$podC = [
    "Apotheon eSports",
    "Cloud9",
    "Epsilon eSports",
    "FAB Games eSports",
    "Lethal Gaming",
    "Livin the Dream",
    "Most Wanted eSports",
    "Pnda Gaming"
];

$podD = [
    "Black Forest Games",
    "Chiefs eSports",
    "Giants Gaming",
    "Team-LDLC",
    "PuLse Gaming",
    "Supremacy",
    "Tainted Minds",
    "Team Vitality"
];

$groupA = [
    "Millenium",
    "Splyce",
    "Livin the Dream",
    "Black Forest Games"
];

$groupB = [
    "Rise Nation",
    "HyperGames",
    "Apotheon eSports",
    "Supremacy"
];

$groupC = [
    "Lumionsity Gaming",
    "Mindfreak",
    "FAB Games eSports",
    "Chiefs eSports"
];

$groupD = [
    "Ground Zero",
    "Team Allegiance",
    "Epsilon eSports",
    "PuLse Gaming"
];

$groupE = [
    "FaZe",
    "Team eLevate",
    "Most Wanted eSports",
    "Giants Gaming"
];

$groupF = [
    "Team infused",
    "Team KaLiBeR",
    "Lethal Gaming",
    "Tainted Minds"
];

$groupG = [
    "EnVyUs",
    "Team Orbit ANZ",
    "Cloud9",
    "Team Vitality"
];

$groupH = [
    "OpTic Gaming",
    "compLexity Gaming",
    "Pnda Gaming",
    "Team-LDLC"
];
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
  <li class="w3-hide-small"><a href="Tournaments.html" class="w3-hover-white">Home</a></li>
  <li class="w3-hide-small"><a href="eSports.php" class="w3-hover-white">eSports</a></li>
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

  <article class="w3-container w3-padding-64">
    <div class="w3-container w3-twothird">
        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Call of Duty World League Championships</h3>
        </div>

        <p><b>Call of Duty World League Championships</b> is the final Call of Duty tournament of the year and is the biggest tournament of the year. It will be held at The Forum in Ingelwood, California from September 1-4 2016.</p>

        <br>

        <div class="w3-border-bottom w3-border-dark-grey">
            <h3>Overview</h3>
        </div>

        <p><b>Teams competing: 32 Teams</b></p>
        <ul>
            <li>Top 6 NA (Championship Points)</li>
            <li>Top 4 EU (Championship Points)</li>
            <li>Top 2 ANZ (Championship Points)</li>
            <li>Top 10 NA (Qualifiers)</li>
            <li>Top 8 EU (Qualifiers)</li>
            <li>Top 2 ANZ (Qualifiers)</li>
        </ul>

        <h4><b>Format</b></h4>
        <p><b>Two Stages: Group Stage and Knockout Stage</b></p>

        <h5><b>Group Stage Draw</b></h5>
        <p>32 teams competing in 8 groups of 4</p>
        <ul>
            <li>1 from Pod A</li>
            <p>Pod A:</p>
            <ul>
                <li>Top 6 NA</li>
                <li>Top 2 EU</li>
            </ul>
            <br>
            <li>1 from Pod B</li>
            <p>Pod B:</p>
            <ul>
                <li>Next Top 4 NA</li>
                <li>Next Top 2 EU</li>
                <li>Top 2 ANZ</li>
            </ul>
            <br>
            <li>1 from Pod C</li>
            <p>Pod C:</p>
            <ul>
                <li>Final 6 NA</li>
                <li>5th/6h Ranked EU teams</li>
            </ul>
            <br>
            <li>1 from Pod D</li>
            <p>Pod D: Rest of the Teams</p>
            <ul>
                <li>Final 6 EU</li>
                <li>Final 2 ANZ</li>
            </ul>
        </ul>

        <h5><b>Group Stage</b></h5>
        <ul>
            <li>Each Match: best of 5 Series</li>
            <li>Advance to Knockout Stage: Top 2 from each group</li>
            <li>Eliminated from Group Stage: Bottom 2 from each group</li>
        </ul>

        <h5><b>Knockout Stage</b></h5>
        <ul>
            <li>Double Elimination</li>
            <li>Each Match: best of 5 Series</li>
        </ul>

        <h5><b>Game Types and Maps</b></h5>
        <p>Each series will be played in 4 game modes</p>
        <table>
            <tr>
                <td></td>
                <td>Breach</td>
                <td>Evac</td>
                <td>Fringe</td>
                <td>Hunted</td>
                <td>Infection</td>
                <td>Redwood</td>
                <td>Stronghold</td>
            </tr>
            <tr>
                <td>Hardpoint</td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
            </tr>
            <tr>
                <td>Search and Destroy</td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
            </tr>
            <tr>
                <td>Uplink</td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Capture the Flag</td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td><i class="fa fa-check w3-text-theme"></i></td>
            </tr>
        </table>

        <h5><b>Prize Pool</b></h5>
        <p>$2,000,000 USD will be distributed to the teams</p>
        <table>
            <tr>
                <th>Place</th>
                <th>Prize (USD)</th>
                <th>Team</th>
            </tr>
            <tr class="w3-gold">
                <td><i class="fa fa-trophy">1st</i></td>
                <td>$800,000</td>
                <td>EnVyUs</td>
            </tr>
            <tr class="w3-silver">
                <td><i class="fa fa-trophy">2nd</i></td>
                <td>$250,000</td>
                <td>Splyce</td>
            </tr>
            <tr class="w3-bronze">
                <td><i class="fa fa-trophy">3rd</i></td>
                <td>$150,000</td>
                <td>Team eLevate</td>
            </tr>
            <tr>
                <td>4th</td>
                <td>$120,000</td>
                <td>FAB Games eSports</td>
            </tr>
            <tr>
                <td>5th-6th</td>
                <td>$70,000</td>
            </tr>
            <tr>
                <td>7th-8th</td>
                <td>$50,000</td>
            </tr>
            <tr>
                <td>9th-12th</td>
                <td>$30,000</td>
            </tr>
            <tr>
                <td>13th-16th</td>
                <td>$20,000</td>
            </tr>
            <tr>
                <td>17th-24th</td>
                <td rowspan="2">$15,000</td>
            </tr>
            <tr>
                <td>25th-32nd</td>
            </tr>
        </table>
    </div>
    
    <div class="w3-container w3-third w3-border w3-border-black">
        <div class="w3-padding-15 w3-center">
            <h6>CoD World League Championships</h6>
            <img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/f/fc/2016_Call_of_Duty_World_League_Championship.png/300px-2016_Call_of_Duty_World_League_Championship.png" style="width:100%">
        </div>

        <div class="w3-container">
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Organizer</b>
                </div>
                <div class="w3-half">
                    Activision
                    <br>
                    MLG
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Sponsor</b>
                </div>
                <div class="w3-half">
                    Playstation
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Location</b>
                </div>
                <div class="w3-half">
                    <img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/5/55/USA.png">Inglewood, California
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Event Type</b>
                </div>
                <div class="w3-half">
                    LAN
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Platform</b>
                </div>
                <div class="w3-half">
                    PlayStation 4
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Game</b>
                </div>
                <div class="w3-half">
                    Call of Duty: Black Ops III
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Teams Participating</b>
                </div>
                <div class="w3-half">
                    32
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Prize Pool</b>
                </div>
                <div class="w3-half">
                    $2,000,000+
                </div>
            </div>
            <div class="w3-padding-30 w3-container">
                <div class="w3-half">
                    <b>Date</b>
                </div>
                <div class="w3-half">
                    September 1, 2016 - September 4, 2016
                </div>
            </div>
        </div>
    </article>

    <br>
    <br>
    
    <div class="w3-container">
        <div class="w3-row-padding">
            <div class="w3-border-bottom w3-border-dark-grey">
                <h3>Qualified Teams</h3>
            </div>

            <div class="w3-padding-16">
                <div class="w3-container w3-border w3-border-black w3-padding-medium w3-center">
                    Championship Points

                    <br>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>NA</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>Europe</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>ANZ</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        Ground Zero
                        <br>
                        FaZe
                        <br>
                        Luminosity Gaming
                        <br>
                        OpTic Gaming
                        <br>
                        Rise Nation
                        <br>
                        EnVyUs
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        HyperGames
                        <br>
                        Millenium
                        <br>
                        Splyce
                        <br>
                        Team infused
                        <br>
                        <br>
                        <br>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        Mindfreak
                        <br>
                        Team Orbit ANZ
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

                <br>

                <div class="w3-container w3-border w3-border-black w3-padding-medium w3-center">
                    Qualifiers

                    <br>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>NA</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>Europe</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        <b>ANZ</b>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        Pnda Gaming
                        <br>
                        Team Allegiance
                        <br>
                        compLexity Gaming
                        <br>
                        Team KaLiBeR
                        <br>
                        Team eLevate
                        <br>
                        Most Wanted
                        <br>
                        Cloud9
                        <br>
                        Apotheon eSports
                        <br>
                        Lethal Gaming
                        <br>
                        Livin the Dream
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        PuLse Gaming
                        <br>
                        Epsilon eSports
                        <br>
                        FAB Games eSports
                        <br>
                        Giants Gaming
                        <br>
                        Black Forest Games
                        <br>
                        Supremacy
                        <br>
                        Team-LDLC
                        <br>
                        Team Vitality
                        <br>
                        <br>
                        <br>
                    </div>

                    <div class="w3-container w3-border w3-border-black w3-third w3-center">
                        Tainted Minds
                        <br>
                        Chiefs eSports Club
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <br>

        <div class="w3-row-padding">
            <div class="w3-border-bottom w3-border-dark-grey">
                <h3>Pods</h3>
            </div>

            <div class="w3-padding-16">
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <h4>Pod A</h4>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <h4>Pod B</h4>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <h4>Pod C</h4>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <h4>Pod D</h4>
                </div>

                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($podA as $teamsA) {
                        echo $teamsA;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($podB as $teamsB) {
                        echo $teamsB;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($podC as $teamsC) {
                        echo $teamsC;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-medium w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($podD as $teamsD) {
                        echo $teamsD;
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="w3-row-padding">
            <div class="w3-border-bottom w3-border-dark-grey">
                <h3>Group Stage Draw</h3>
            </div>

            <div class="w3-padding-16">
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group A</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group B</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group C</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group D</h4>
                </div>

                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupA as $drawA) {
                        echo $drawA;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupB as $drawB) {
                        echo $drawB;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupC as $drawC) {
                        echo $drawC;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupD as $drawD) {
                        echo $drawD;
                        echo "<br>";
                    }
                    ?>
                </div>

                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group E</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group F</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group G</h4>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <h4>Group H</h4>
                </div>

                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupE as $drawE) {
                        echo $drawE;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupF as $drawF) {
                        echo $drawF;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupG as $drawG) {
                        echo $drawG;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class="w3-container w3-padding-16 w3-center w3-quarter w3-border w3-border-black">
                    <?php
                    foreach ($groupH as $drawH) {
                        echo $drawH;
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="w3-row-padding">
            <div class="w3-border-bottom w3-border-dark-grey">
                <h3>Group Stage</h3>
            </div>

            <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group A</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3e/SPYlogo_std.png">Splyce</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/thumb/a/a0/Milllogo_std.png/50px-Milllogo_std.png">Millenium</td>
                    <td>2</td>
                    <td>1</td>
                    <td>7</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/b/b7/EUnitedlogo_std.png">eUnited</td>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>6</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/36/BFGlogo_std.png">Black Forest Games</td>
                    <td>0</td>
                    <td>3</td>
                    <td>1</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>

                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group B</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/e/e8/Riselogo_std.png">Rise Nation</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/b/bc/HGlogo_std.png">HyperGames</td>
                    <td>2</td>
                    <td>1</td>
                    <td>7</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/2/23/AESlogo_std.png">Apotheon eSports</td>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>7</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/e/e5/Sylogo_std.png">Supremacy</td>
                    <td>0</td>
                    <td>3</td>
                    <td>1</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="w3-row-padding">
                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group C</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/4/4e/FabElogo_std.png">FAB Games eSports</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>2</td>
                    </tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/b/b6/LGlogo_std.png">Luminosity Gaming</td>
                    <td>2</td>
                    <td>1</td>
                    <td>6</td>
                    <td>5</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/7/77/MFlogo_std.png">Mindfreak</td>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>7</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/b/be/Chiefslogo_std.png">Chiefs eSports</td>
                    <td>0</td>
                    <td>3</td>
                    <td>3</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>

                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group D</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/2/2c/ALGlogo_std.png">Team Allegiance</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/9/99/Epsilogo_std.png">Epsilon eSports</td>
                    <td>2</td>
                    <td>1</td>
                    <td>6</td>
                    <td>6</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/6/67/PuLselogo_std.png">PuLse Gaming</td>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>6</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/4/40/RNGlogo_std.png">Renegades</td>
                    <td>0</td>
                    <td>3</td>
                    <td>3</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="w3-row-padding">
                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group E</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/8/83/FaZelogo_std.png">FaZe</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>0</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/3c/ELvlogo_std.png">Team eLevate</td>
                    <td>2</td>
                    <td>1</td>
                    <td>6</td>
                    <td>3</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/3/35/MWlogo_std.png">Most Wanted</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>8</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/e/ec/Giantslogo_std.png">Giants Gaming</td>
                    <td>0</td>
                    <td>3</td>
                    <td>2</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>

                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group F</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/e/e4/TKlogo_std.png">Team KaLiBeR</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/8/8d/Infslogo_std.png">Team infused</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>6</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/d/d4/Lethallogo_std.png">Lethal Gaming</td>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>7</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/4/45/Taintedlogo_std.png">Tainted Minds</td>
                    <td>0</td>
                    <td>3</td>
                    <td>4</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="w3-row-padding">
                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group G</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/f/f7/NVlogo_std.png">EnVyUs</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>3</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/e/e7/C9logo_std.png">Cloud9</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>5</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/a/a6/Orbit_ANZlogo_std.png">Team Orbit ANZ</td>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>7</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/d/d9/VITlogo_std.png">Team Vitality</td>
                    <td>0</td>
                    <td>3</td>
                    <td>3</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>

                <div class="w3-half w3-center w3-container w3-padding-20">
                <h5>Group H</h5>
                <table>
                    <tr>
                    <th></th>
                    <th>Team</th>
                    <th>W</th>
                    <th>L</th>
                    <th>MW</th>
                    <th>ML</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/2/2b/CoLlogo_std.png">compLexity Gaming</td>
                    <td>3</td>
                    <td>0</td>
                    <td>9</td>
                    <td>5</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/7/7b/OGlogo_std.png">OpTic Gaming</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/1/14/Pndalogo_std.png">Pnda Gaming</td>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>6</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><img src="http://cod.esportswikis.com/w/images/cod.esportswikis.com/d/dc/LDLClogo_std.png">Team-LDLC</td>
                    <td>0</td>
                    <td>3</td>
                    <td>2</td>
                    <td>9</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="w3-row-padding">
            <div class="w3-border-bottom w3-border-dark-grey">
                <h3>Knockout Bracket</h3>
            </div>

            <p>EnVyUs beats Splyce in the Grand Finals 3-1 for the Championship</p>
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
</script>

</body>
</html>