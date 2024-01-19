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
            <img class="img1" src="https://www.minecraft.net/content/dam/community/fy23/community-news/reddit-minecraft-live-ama-recap/Reddit%20AMA%20-%20Article%20Banner.jpg.transform/minecraft-image-large/image.jpg" alt="img2" title="fire">
            <h1>NEWS</h1>
                <h2>ASK MOJANG ANYTHING (AMA): <br>MINECRAFT LIVE 2022</h2>
                <p>Last Friday, we held our first AMA on <a href="https://www.reddit.com/r/Minecraft/">r/Minecraft</a>, where four members of <br>Mojang Studios answered community questions about the awesome things <br>we revealed at Minecraft Live 2022. In case you were curious about what <br>fun things were shared, we’ve got you covered! You can find a recap here.</p>
                <br>
                <p class="b"><b>Aside from the Deep Dark, what was a feature that went through lots of <br>different iterations/reworks?</b></p>
                <br>
            	<p><b>N, Bedrock Developer:</b> Piglin was surprisingly the mob that has the most <br>iterations with quite a lot of mechanics being added in each iteration. Did <br>you know that piglins have a small chance of doing a celebration dance if <br>they win the war over hoglin? Or that if the number of hoglins are more than <br>the number of piglins, the hoglins will start chasing the piglins instead?</p>
                <br>
                <p class="b">What's a feature that was a tiny change from a player's perspective, <br>but was extremely difficult to implement?</p>
                <br>
                <p>N: Local water levels inside cave systems may seem really simple to a <br>player, but it was super complex to get it right. There were a lot of tweaks <br>we had to make to get the right amount of water and we also had to devote <br>quite a lot of time to fix the perf impact since it's something that each block <br>has to calculate.</p>
                <img class="img2" src="https://www.minecraft.net/content/dam/community/fy23/community-news/reddit-minecraft-live-ama-recap/Reddit%20AMA%20-%20Article%20In-line%20Image.jpg">
                <p>One of the cutest announcements at this year’s Minecraft Live was the <br>addition of camels to the game! There were lots of specific questions about <br>the upcoming mob and how their functionality may differ from the existing ridable mobs. </p>
                <div class="center">
                <a href="news.php">Read more news!</a>
                </div>
            </main>
        <footer>
            <p>Copyright &copy; 2023 <a href="https://github.com/MarkoRadancevic?tab=repositories">Marko Radančević.</a></p>
        </footer>
        
        </div>
        </body>
        </html>