<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html lang="en">
	<head>

		<link rel="stylesheet" href="style_community.css">
        <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
                
		<title>Projektni zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projekt">
		<meta name="author" content="Marko Radančević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="shortcut icon" type="images/x-icon" href="https://tinyurl.com/facticon%22%3E">
	</head>	
<body>
    <div class="bg-image">
        <header>
            <nav>
            <ul>
			  <li><a href="home.php">HOME</a></li>
			  <li><a href="news.php">NEWS</a></li>
			  <li><a href="community.php">COMMUNITY</a></li>
			  <li><a href="youtube.php">YOUTUBE</a></li>
			  <li><a href="feedback.php">FEEDBACK</a></li>
			  <?php
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                    
                    echo '<li><a href="registration.php">REGISTER</a></li>';		  
                    echo '<li><a href="signIn.php">SIGN IN</a></li>'; 
                
                } else {
                    echo '<li class="greeting-signOut-container">';				
					echo '<a id="signOut-link" href="signOut.php">Sign out</a>';
                    echo '</li>';
                }
            ?>
			</ul>
            </nav>
            <div class="hero-image"></div>
            
        </header>

        <main>
            <h1>WELCOME TO THE COMMUNITY TAB</h1><br><br>
            <h2 class="h2-1">DISCUSSIONS & HELP</h2>
            <figure class="figure4 center1">
                <figcaption class="figcaption1"><a href="https://www.youtube.com/Minecraft">MInecraft on Discord</a></figcaption>
            </figure>
            <br><br><br><br>
            <h1>COMMUNITY TOWN HALL</h1>
            <p>A collection of all the latest happenings from the incredible Minecraft <br>Community! Use #FeatureMeMinecraft for a chance to be featured!</p><br>
            <br>
            
            <h2 class="h2-1">IDEAS FOR MAP ART</h2>
            
            <p>Do you enjoy making map art in Minecraft? Do you have way too much time <br>on your hands? Then come on in, buddy – this tutorial was made for people <br>like you. Skip The Tutorial is a YouTube channel that's all about tips, tricks, <br>and things you perhaps didn't know about Minecraft, and this particular <br>video deals with the art... of map art.</p>
            <br>
            <div class="center">
            <img src="https://lookingforseed.com/wp-content/uploads/2020/06/empty-maps-256.png" title="map" >
            <!-- <img src="https://static.wikia.nocookie.net/minecraft_gamepedia/images/d/d1/Cartography_Table_JE2_BE1.png/revision/latest?cb=20200317173512" title="map" > -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RAYFXblKn4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
            </div>
            <br><br><br><br><br><br>
            <h2 class="h2-1">HOW TO FIND ANCIENT DEBRIS</h2>
            
            <p>Mining for ancient debris has been perfected as a science by many Minecraft <br>players far smarter than I, and they have apparently all come to the conclusion <br>that the best way to find ancient debris is to Explode Yourself On Purpose. Trying to <br>use a bed in the Nether will explode the bed, so why not use that to your advantage?</p>
            <br>
            <div class="center">
            <img src="https://atlas-content-cdn.pixelsquid.com/stock-images/minecraft-ancient-debris-metal-bar-D58Dlq4-600.jpg" title="debri" >
            <!-- <img src="https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4c/Ancient_Debris_JE1_BE1.png/revision/latest?cb=20200216200020" title="debri" >  -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gLUB9sM_oew" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>   
            </div>
            <br><br><br><br><br><br><br><br><br>
            <p>Want to learn more about Minecraft from <br>players who know the game way better than us?</p><br>
            <div class="center">
            <a href="https://minecraft.fandom.com/wiki/Minecraft_Wiki">EXPLORE THE UNOFFICIAL WIKI</a>
            </div>
            <br><br><br><br><br><br>


            <br><br><br><br><br><br>
        </main>
        
    </div>
    <footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	</footer>
</body>
</html>
