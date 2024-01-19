<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>



<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_feedback1.css">
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
            <h1>FOUND A BUG IN MINECRAFT?</h1>
                <p>Here you can find bug reporting tools for each <br>platform that Minecraft is available on.</p>
                <br>
                <h2>MINECRAFT: JAVA EDITION</h2>
                <p><a href="https://bugs.mojang.com/projects/MC/issues/MC-258969?filter=allopenissues">Official bugtracker</a></p>
                <br>
                <h2>MINECRAFT FOR WINDOWS, XBOX, NINTENDO SWITCH AND MOBILE<br>(IOS/ANDROID/AMAZON KINDLE FIRE/WINDOWS MOBILE)</h2>
                <p><a href="https://bugs.mojang.com/projects/MCPE/issues/MCPE-165817?filter=allopenissues">Official bugtracker</a></p>
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