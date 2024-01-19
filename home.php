<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_home.css">
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
        <h1>WELCOME TO THE "OFFICIAL" SITE OF MINECRAFT </h1>
        <h2>With new games, new updates, and new ways to play, join one of the biggest communities in gaming and start crafting today!</h2><br>
        <div class="bg-image1" style="text-align: center">
        <figure class="figure1">
			<img src="https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg" alt="mcje" title="mcje" style="display: block; margin: 0 auto">
			<figcaption class="figcaption1">Minecraft Java <br>Edition</figcaption>
            <figcaption class="figcaption2">Explore your own unique world, survive the night, and create anything you can imagine!</figcaption>
		</figure>
        <figure class="figure2">
			<img src="https://www.minecraft.net/content/dam/games/dungeons/key-art/games_subnav_dungeona-300x465.jpg" style="display: block; margin: 0 auto">
			<figcaption class="figcaption1">Minecraft<br>Dungeons</figcaption>
            <figcaption class="figcaption2">Discover an all-new action adventure game, inspired by classic dungeon crawlers!</figcaption>
		</figure>
        <figure class="figure3">
			<img src="https://www.minecraft.net/content/dam/games/education-edition/key-art/games_subnav_educationedition-300x465.jpg" style="display: block; margin: 0 auto">
			<figcaption class="figcaption1">Minecraft Education Edition</figcaption>
            <figcaption class="figcaption2">A game-based learning platform supporting thousands of educators!</figcaption>
		</figure>
        </div>
		<br>
		<p>Minecraft is a vast and incredible world, filled with endless possibilities and adventures. In this virtual sandbox, you can build and craft to your heart's content, explore the depths of your imagination, and discover new worlds and dimensions.</p>
        <br>
		<div>
            <img src="https://www.minecraft.net/content/dam/minecraft/pmp/pmp-minecraft-howitworks-survive.png" class="float-left">
        <p>Whether you're a creative builder, an adventurous explorer, or a skilled survivalist, there's something for everyone in Minecraft. You can play in creative mode, with unlimited resources and no danger, or test your skills in survival mode, where you'll need to gather resources, craft items, and fend off hostile mobs.</p>           
		<br>
		</div>
        <p>In Minecraft, you'll find a wide variety of biomes and dimensions, each with its own unique challenges and rewards. From the lush forests and towering mountains of the Overworld, to the fiery depths of the Nether, and the endless expanse of the End, there's always something new to discover.</p>
        <br><br><br><br><br><br>
    </main>
    </div>
	<footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
</body>
</html>
