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
    <div id="Gallery">
    	<h2>GALLERY</h2>
    </div>
    <h2>PERFORMANCES</h2>
    <div class="backgroundLayer">
        <div class="videoContainer">
            <h4 class="videoText">That Brown Show 2015</h4>
        	<iframe src="https://www.youtube.com/embed/X1W3eNvPpCM" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="videoContainer">
            <h4 class="videoText">That Brown Show 2015</h4>
            <iframe src="https://www.youtube.com/embed/X1W3eNvPpCM" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php include ("footer.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>