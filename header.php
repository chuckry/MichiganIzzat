<script src="js/bootstrap.js"></script>
<h1 id="IzzatBanner"></h1>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <a href="#" class="active navbar-brand">IZZAT</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li 
                    <?php if ($currentFile == "index.php") 
                    { echo "class = \"active\""; } 
                    ?> 
                ><a href="index.php">Home</a></li>
                <li
                    <?php if ($currentFile == "media.php") 
                    { echo "class = \"active\""; } 
                    ?>
                ><a href="media.php">Media</a></li>
                <li
                    <?php if ($currentFile == "store.php") 
                    { echo "class = \"active\""; } 
                    ?>
                ><a href="#">Store</a></li>
                <li
                    <?php if ($currentFile == "about.php") 
                    { echo "class = \"active\""; } 
                    ?>
                ><a href="#">About</a></li>
                <li
                    <?php if ($currentFile == "contact.php") 
                    { echo "class = \"active\""; } 
                    ?>
                ><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>