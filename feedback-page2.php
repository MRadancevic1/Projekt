<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>




<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_feedback2.css">
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
            <h1>WELCOME TO THE OFFICIAL MINECRAFT FEEDBACK SITE!</h1>
                <p>We love listening to your feedback – look at what’s been suggested or post your ideas now. For support, please visit our <br>Help Center. Bugs go <a href="https://bugs.mojang.com/secure/Dashboard.jspa">here</a>. Help your great ideas become a part of Minecraft! We look at your ideas and feedback every day.</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <figure class="figure4 center1">
                    <figcaption class="figcaption1"><a href="https://bugs.mojang.com/secure/Dashboard.jspa">REPORT BUGS</a></figcaption>
                </figure>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                </div>
            </main>
            <footer>
		        <p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	        </footer>
        
        </div>
        </body>
        </html>
