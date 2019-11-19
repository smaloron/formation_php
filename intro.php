<?php
session_start();

if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
} else {
    $_SESSION["message"]= "Veuillez vous connecter pour accèder à intro";
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro</title>
</head>
<body>

    <?php
        $key = "name";

        $var = "age";

        $name = filter_input(INPUT_GET, $key) ?? "Joe";

        $age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_NUMBER_INT) ?? 18;

        
        /*
        $name = $_GET["name"];

        
        if(isset($_GET["age"])){
            $age = $_GET["age"];
        } else {
            $age = 18;
        }*/
        
    ?>

    <h1>
        Bonjour <?php echo $name; ?> vous avez <?php echo $age; ?> ans
        votre email est <?=$email?> 
    </h1>

    <a href="logout.php">déconnexion</a>
    
</body>
</html>