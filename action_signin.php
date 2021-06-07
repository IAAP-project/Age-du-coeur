<?php
include_once("modele.php");
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    
    $email = validerPOST("email");
    $password = validerPOST("password");

    $user = getUserByEmailPassword($email,$password);

    if($user == false){
        $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php?view=signin";
        header("Location:" . $urlBase . $qs);
    }else{
        $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php?view=form";
        header("Location:" . $urlBase . $qs);
    }
   
}
function validerPOST($nom)
{
    if (isset($_POST[$nom]) && !($_POST[$nom] == ""))
        return $_POST[$nom];
    return null;
}
