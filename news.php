<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>


<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_news.css">
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


        <?php
            if (!$isLoggedIn) {
                echo '<p><center>You need to register or sign in to view the content';
                echo '<br><br><br><br>';
                echo '<a href="registration.php">register</a> or <a href="signIn.php">sign in</a>.</center></p>';
                echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
            } else {
        ?>


        <main>
            <h1>News</h1>
            <div class="news">
                <hr>
                <a href="news-3.php"><img src="https://www.minecraft.net/content/dam/community/fy23/community-news/community-crafting-bench/article-carousel.jpg" alt="img1" title="img1"></a>
                <h2><a href="news-3.php">COMMUNITY CRAFTING BENCH: HALLOWEEN HANDIWORK</a></h2>
                <p>Spooky season is upon us! Get ready to craft Jack o’Lanterns, make some pumpkin pies, and start working on your hay bale mazes.</p>
                <p><time datetime="2022-10-07">07 October 2022</time></p>
                <hr>
                <a href="news-2.php"><img src="https://www.minecraft.net/content/dam/community/fy23/community-news/reddit-minecraft-live-ama-recap/Reddit%20AMA%20-%20News%20Carousel%20Thumbnail.jpg" alt="img2" title="img2"></a>
                <h2><a href="news-2.php">ASK MOJANG ANYTHING (AMA): MINECRAFT LIVE 2022</a></h2>
                <p>Last Friday, we held our first AMA on <a href="https://www.reddit.com/r/Minecraft/">r/Minecraft</a>, where four members of Mojang Studios answered community questions about the awesome things we revealed at Minecraft Live 2022.</p>
                <p><time datetime="2022-10-01">01 October 2022</time></p>
                <hr>
                <a href="news-1.php"><img src="https://www.minecraft.net/content/dam/community/fy22/community-news/spongebob-build-challenge/Spongebob-Kickoff-Thumb.png" alt="US growth faster than expected" title="US growth faster than expected"></a>
                <h2><a href="news-1.php">SPONGEBOB BUILD CHALLENGE</a></h2>
                <p>Have you heard the news? SpongeBob (and all your undersea faves) are coming to Minecraft!</p>
                <p><time datetime="2022-06-30">30 June 2022</time></p>
                <hr>
            </div>
        </main>
    </div>
    <footer>
    
    <?php
    }
    ?>
    <br><br><br><br><br><br><br>
    <footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
</body>
</html>