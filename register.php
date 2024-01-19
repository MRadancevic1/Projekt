<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "user.xml";

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $datum_rodenja = $_POST["datum_rodenja"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $user = "<user><ime>$ime</ime><prezime>$prezime</prezime><username>$username</username><email>$email</email><password>$password</password></user>";

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
        $newUser = $xml->addChild("user");
        $newUser->addChild("ime", $ime);
        $newUser->addChild("prezime", $prezime);
        $newUser->addChild("datum_rodenja", $datum_rodenja);
        $newUser->addChild("username", $username);
        $newUser->addChild("email", $email);
        $newUser->addChild("password", $password);
    } else {
        $xml = new SimpleXMLElement("<user></user>");
        $xml->addChild("user");
        $xml->user->addChild("ime", $ime);
        $xml->user->addChild("prezime", $prezime);
        $xml->user->addChild("datum_rodenja", $datum_rodenja);
        $xml->user->addChild("username", $username);
        $xml->user->addChild("email", $email);
        $xml->user->addChild("password", $password);
    }

    $xml->asXML($xmlFile);

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("Location: home.php");
    exit();
} else {
    echo "Nedozvoljen pristup!";
}
?>
