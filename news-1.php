<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_newspage.css">
        <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
                
		<title>Projektni zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projekt">
		<meta name="author" content="Marko Radančević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
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
            <img class="img1" src="https://www.minecraft.net/content/dam/community/fy22/community-news/spongebob-build-challenge/Sponegbob-Kickoff_header.png.transform/minecraft-image-large/image.png" alt="img2" title="fire">
            <h1>NEWS</h1>
                <h2>SPONGEBOB BUILD <br>CHALLENGE</h2>
                <p>Have you heard the news? SpongeBob (and all your undersea faves) are <br>coming to Minecraft!</p>
                <br>
                <p>In honor of this upcoming DLC, we’d like to see your <b>SpongeBob <br>SquarePants</b> themed builds! Don’t have any? Well, what are you waiting <br>for? Grab a Krabby Patty and start building! Anything SpongeBob-related is <br>fair game, from your own block by block rendition of the Krusty Krab, <br>a recreation of the arena where SpongeBob performed “Sweet Victory”, <br>or maybe just a giant jellyfish! Be creative and surprise us!</p>
            	<img class="img2"src="https://www.minecraft.net/content/dam/community/fy22/community-news/spongebob-build-challenge/Spongebob-Kickoff-In-Line.png">
                <p>Is your submission the best in Bikini Bottom? Tag your original works with <br>#FeatureMeMinecraft on Twitter and we just might feature them right here <br>on Minecraft.net!</p>
                <br>
                <p>We’ll be deep sea diving through submissions from now until July 14.</p>
                <br>
                <p>Can’t wait to see what you create!</p>
                <div class="center">
                <a href="news.php">Read more news!</a>
                </div>
            </main>
    <footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
        
        </div>
        </body>
        </html>