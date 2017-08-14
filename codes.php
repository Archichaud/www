<?php

if(isset($_POST["password"])){

    $result = htmlspecialchars($_POST["password"]);
    $result = (string)$result;

    if (($result!="kangourou")) {
        header("location: index.php");
        exit();
        }

    echo $result ."<br/>";    
    echo "<a href=index.php>retour<a/>";
} 
else { echo "gros tocard, tu n'as rien rentré!";
       header("location: index.php");
        exit();
}
?>

    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Codes</title>
    </head>

    <body>

        <p>"Les codes d'accès sont 12345"
        </p>

    </body>

    </html>
