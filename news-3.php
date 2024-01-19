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
            <img class="img1" src="https://www.minecraft.net/content/dam/community/fy23/community-news/community-crafting-bench/article-banner.jpg.transform/minecraft-image-large/image.jpg" alt="img3" title="Pumpkin">
            <h1>NEWS</h1>
                <h2>COMMUNITY CRAFTING BENCH: <br>HALLOWEEN HANDIWORK</h2>
                <p>Spooky season is upon us! Get ready to craft Jack o’Lanterns, make <br>some pumpkin pies, and start working on your hay bale mazes.</p>
                <br>
                <p>I’ve been getting into the spirit of the season early this year and gave myself <br>a challenge: create a Minecraft costume from scratch, using only things I <br>was able to find around the house. Old cardboard boxes and construction <br>paper have never looked so good… well, until they were accompanied by a <br>painted creeper pumpkin, that is!</p>
                <img class="img2" src="https://www.minecraft.net/content/dam/community/fy23/community-news/community-crafting-bench/article-image.jpg" alt="img2" title="Pumpkin">
            	<p>The Community Crafting Bench is a new series where we’re asking the <br>community to share the fun Minecraft creations you’re making in real life. <br>The theme of the first one is, of course, Spooky Season! If you have any <br>fantastic costumes, pumpkins, or other spooktacular creations that you <br>would like to share with us, dust off the cobwebs and send it our way by tagging it with #SpookyMinecraft.</p>
                <br>
                <p>We’ll be tiptoeing through your spooky submissions from now until October <br>24 and will share our favorite submissions in an article right here on <br>Minecraft.net. Have a frightfully delightful time brewing up some ghoulish goods!</p>
                <br>
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