<!DOCTYPE html>
<?php $currentFile = basename(__FILE__) ?>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100italic' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Michigan Izzat</title>
</head>
<body>
    <?php include ("header.php"); ?>
    <div id="indexOneLayer" class="backgroundLayer">
        <div class="infoBox">
            <h2>Who are we?</h2>
            <p>
                Michigan Izzat, founded in January of 2013, is the University of Michigan's 
                premier all-male fusion dance team. As a nationally ranked collegiate team, 
                we strive to promote dance and culture while staying true to our identity and 
                university. Both on and off the stage, we affirm this mission through community 
                service and performances for our campus community as well as the greater 
                community across the nation. Using high energy choreography, innovative stunts, 
                and our passion for dance, we come together fusing the styles of hip hop, bhangra 
                and bollywood to produce a performance intended to inspire, to allure, and to 
                celebrate Indian as well as American culture.
            </p>
        </div>
    </div>
    <div class="backgroundLayer whiteBackground">
        <div id="Work" class="imageContainer">
            <h3 class="rightText">WORK</h3>
            <img id="WorkImage" class="leftImage" src="Images/IzzatWork.jpg" alt="IzzatWorkCollage">
        </div>
    </div>
    <div class="backgroundLayer greyBackground">
        <div id="Play" class="imageContainer">
            <h3 class="leftText">PLAY</h3>
            <img id="PlayImage" class="rightImage" src="Images/IzzatPlay.jpg" alt="IzzatPlayCollage">
        </div>
    </div>
    <div class="backgroundLayer whiteBackground">
        <div id="Fall" class="imageContainer">
            <h3 class="rightText">FALL</h3>
            <img id="FallImage" class="leftImage" src="Images/IzzatWork.jpg" alt="IzzatFallImage">
        </div>
    </div>
    <div class="backgroundLayer greyBackground">
        <div id="Fly">
            <h3 id="upperText">FLY</h3>
            <img id="FlyImage" src="Images/IzzatAwariJumpNarrow.png" alt="IzzatJump">
        </div>
    </div>
    <?php include ("footer.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
