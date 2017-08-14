<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire à une page</title>
</head>

<body>


    <?php
print_r($_SESSION);

if((isset($_POST["password"])) &&
(($_POST["password"])!=="valeur") &&    (($_POST["password"])!=="valeur2")){
    ?>
    <p>Mot de passe éronné, veuillez recommencer votre saisie </p>
    <form method="post" action="test.php">
        <input type="password" name="password">
        <input type="submit" value="go!">
    </form>
    <?php
}
    elseif((isset($_POST["password"])) &&
    (($_POST["password"])=="valeur") ||    (($_POST["password"])=="valeur2")){
    ?>
        <p>Rentrez votre mot de passe svp </p>
        <form method="post" action="test.php">
            <input type="password" name="password">
            <input type="submit" value="go!">
    </form>
    <?php
    echo "vous avez enregistré <br/>" . htmlspecialchars($_POST["password"]) ."<br/> Ceci vous donne accès au code suivant : <br/> 18853253654132486532116552";
    $_SESSION["password"] = $_POST["password"];
      }
    else
    {echo "vous n'avez pas saisi de mdp. Veuillez entrer une valeur";
     include("formulaire.inc.php");
        }
    ?>
</body>

</html>
