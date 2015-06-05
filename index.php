<!DOCTYPE html>
<?php $currentFile = basename(__FILE__) ?>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
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
    <div id="indexTwoLayer" class="backgroundLayer">
        <div class="infoBox">
            <h2>FALL TOGETHER, FLY TOGETHER</h2>
            <div class="pairWorkPlay">
                <div id="Work" class="imageContainer">
                    <h3>WORK</h3>
                    <img id="WorkImage" src="Images/IzzatWork.jpg" alt="IzzatWorkCollage">
                </div>
                <div id="Play" class="imageContainer">
                    <h3>PLAY</h3>
                    <img id="PlayImage" src="Images/IzzatPlay.jpg" alt="IzzatPlayCollage">
                </div>
            </div>
        </div>
    </div>
    <div id="indexThreeLayer" class="backgroundLayer">
        <div class="infoBox">
            <div id="Dance">
                <h3>DANCE</h3>
                <img src="Images/IzzatAwariJumpNarrow.png" alt="IzzatJump">
            </div>
        </div>
    </div>
    <?php include ("footer.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
