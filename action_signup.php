<?php
include_once("modele.php");
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {

    $firstName = validerPOST("firstNameSignup");
    $lastName = validerPOST("lastNameSignup");
    $email = validerPOST("emailSignup");
    $password = validerPOST("passwordSignup");
    $date_de_naissance = validerPOST("dateSignup");
    $sexe = validerPOST("gender");

    createUser($lastName,$firstName,$sexe,$date_de_naissance,$email,$password);
    
    $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php?view=signin";
    header("Location:" . $urlBase . $qs);
}
function validerPOST($nom)
{
    if (isset($_POST[$nom]) && !($_POST[$nom] == ""))
        return $_POST[$nom];
    return null;
}
