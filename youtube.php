<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html lang="en">
	<head>

		<link rel="stylesheet" href="style_youtube.css">
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
            <h1>Watch on Youtube</h1><br>
            <div class="center">
            <iframe width="720" height="480" src="https://www.youtube.com/embed/w6zLprHHZOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <br><br>
            <h2>WATCH THE STREAM AGAIN!</h2><br>
            <p>Just because we named it Minecraft Live doesn’t mean that you can’t watch <br>it over and over and over again whenever you want. Check out the 2021 <br>edition of our annual celebration of all things Minecraft, featuring new <br>updates, exciting announcements, mob votes, and more!</p>
            <br><br><br>
            <figure class="figure4 center1">
                <figcaption class="figcaption1"><a href="https://www.youtube.com/Minecraft">OFFICIAL YOUTUBE CHANNEL</a></figcaption>
            </figure>
            <br><br><br><br><br><br>
        
        </main>

        
    </div>
    <footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
</body>
</html>
