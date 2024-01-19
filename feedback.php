<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>



<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_feedback.css">
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
        <h1>FEEDBACK</h1>
        <br>
        <br>
        <div style="display: flex; justify-content: center">
        <figure class="figure1 ">
			<img src="https://www.minecraft.net/content/dam/minecraft/community/spider.png.transform/minecraft-image-large/image.png" alt="mcje" title="mcje" style="display: block; margin: 0 auto">
            <figcaption class="figcaption2">FOUND A BUG?</figcaption>
            <figcaption class="figcaption1"><a href="feedback-page1.php">REPORT IT HERE!</a></figcaption>
		</figure>
        <figure class="figure1 ">
			<img src="https://www.minecraft.net/content/dam/minecraft/community/suggbox.png.transform/minecraft-image-large/image.png" alt="mcje" title="mcje" style="display: block; margin: 0 auto">
            <figcaption class="figcaption2">GOT A SUGGESTION?</figcaption>
            <figcaption class="figcaption1"><a href="feedback-page2.php">SUBMIT YOUR IDEAS HERE!</a></figcaption>
		</figure>
        </div>
		<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
        
    </main>
    </div>
	<footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
</body>
</html>
