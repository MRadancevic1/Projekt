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


    
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "user.xml";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_successful = false;

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);

        foreach ($xml->user as $user) {
            if ($user->username == $username && password_verify($password, $user->password)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $login_successful = true;
                break;
            }
        }
    }

    if (!$login_successful) {
        echo '<div style="font-family: Minecraft; text-align: center; margin-top: 20px;">';
        echo '<p style="font-family: Minecraft; text-align: center; margin-top: 20px;">Sign in unsuccessful. Check your username or password.</p>';
        echo '<br><br><br>';
        
        echo '<a href="signIn.php" style="submit">Return to sign in</a>';
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
        echo '</div>';
        exit;
    }

    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'home.php';

    header("Location: " . $redirect_url);
    exit;
} else {
    echo "Access denied";
}

?>
<footer>
	<p>Copyright &copy; 2024. <a href="https://github.com/MRadancevic1/Projekt?tab=repositories">Marko Radančević.</a> </p>
</footer>

</body>
</html>