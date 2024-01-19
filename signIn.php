<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="style_signIn.css">
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
			  <li><a href="registration.php">REGISTER</a></li>			  
              <li><a href="signIn.php">SIGN IN</a></li>
                <li id="greeting-message"><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? "Dobar dan, " . $_SESSION['username'] : ""; ?></li>
                <li id="signOut-link"><?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ?> '<a href="signOut.php"></a></li>
			</ul>
		</nav>
        <div class="hero-image"></div>
        
	</header>

	<h1>Sign in</h1>

    <form id="registrationForm" action="signedIn.php" method="post">
        <label for="username">Username:</label>
		<br>
        <input type="text" id="username" name="username" required>
		<br><br>
        <label for="password">Password:</label>
		<br>
        <input type="password" id="password" name="password" required>
		<br><br>
        <input type="hidden" name="redirect_url" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

        <input type="submit" value="Sign in">
    </form>
	<br><br><br><br><br><br><br><br><br>
    <footer>
		<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
	  </footer>
</body>
</html>