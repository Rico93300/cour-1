<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- php -S localhost:8000 connection serveur -->
    <h1>Ma premiere page</h1>
    <?php  echo"hello world "; 
    echo" ceci es un message<strong>en gras</strong>";

    $age=30;
    echo $age;

    $nom=" eric";
    echo$nom;

    $nom=" je m'appel eric";
    echo$nom;

    $question=true;
    echo$question;

    $novalu=null;
    echo$novalu;

    $fullname="eric";
    $welcom="bienvenue sur le site";


    echo "je m'appel ".$fullname ." ".$welcom;

    echo " voila un message contenant {$fullname}, a l'interieur";

    ?>

</body>
</html>
