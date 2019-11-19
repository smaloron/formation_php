<?php
//Destruction de la session
session_destroy();
session_start();



$_SESSION["message"] = "Vous êtes déconnecté";

header("location:login.php");

?>