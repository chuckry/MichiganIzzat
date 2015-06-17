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
    <link rel="stylesheet" type="text/css" href="css/blueimp-gallery.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Michigan Izzat</title>
</head>
<body>
    <?php include ("header.php"); ?>
    <div id="Gallery">
    	<h2>GALLERY</h2>
    </div>
    <div id="links">
        <a href="Images/FallTogetherFlyTogether.jpg" title="FallFly" data-gallery>
            <img src="Images/FallTogetherFlyTogether.jpg" alt="FallFly">
        </a>
        <a href="Images/IzzatClassic.jpg" title="Classic" data-gallery>
            <img src="Images/IzzatClassic.jpg" alt="Classic">
        </a>
        <a href="Images/IzzatColorful.jpg" title="Colorful" data-gallery>
            <img src="Images/IzzatColorful.jpg" alt="Colorful">
        </a>
    </div>
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
    <h2>PERFORMANCES</h2>
    <div id="mediaBackgroundLayer" class="backgroundLayer blueBackground">
        <div class="videoContainer">
            <h4 class="videoText">That Brown Show 2015</h4>
        	<iframe src="https://www.youtube.com/embed/X1W3eNvPpCM" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="videoContainer">
            <h4 class="videoText">That Brown Show 2015</h4>
            <iframe src="https://www.youtube.com/embed/X1W3eNvPpCM" frameborder="0" allowfullscreen></iframe>
        </div>
        <span class="stretch"></span>
    </div>
    <?php include ("footer.php"); ?>
    <script src="js/blueimp-gallery.min.js"></script>
    <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {
                    index: link, 
                    event: event
                },
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>




