<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php") {
    header("Location:../index.php");
    die("");
}

// On envoie l'entête Content-type correcte avec le bon charset
header('Content-Type: text/html;charset=utf-8');

// Pose qq soucis avec certains serveurs...
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/form.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/signin.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/signup.css'>
</head>

<body>
    <script type="text/javascript">
        function goPageSignUp() {
            window.location.href = "./index.php?view=signup"
        }

        function goPageSignIn() {
            window.location.href = "./index.php?view=signin"
        }
    </script>
    <?php
    session_start();
    $view = false;
    if (isset($_GET["view"]) && !($_GET["view"] == "")) {
        $view = $_GET["view"];
    }

    if ($view === false) {
        header("Location: index.php?view=signin");
        die();
    }

    switch ($view) {
        case "form":
            include("views/form.php");
            break;

        case "signup":
            include("views/signup.php");
            break;

        case "signin":
            include("views/signin.php");
            break;
    }
    ?>
</body>

</html>