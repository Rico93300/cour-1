<?php

// 1er exercices
$auteurs = [
    [
        "index" => 1,
        "nom" => "Goldman",
        "prenom" => "Jean Jacques"
    ],
    [
        "index" => 2,
        "nom" => "Farmeur",
        "prenom" => "Mylene"
    ],
    [
        "index" => 1,
        "nom" => "halliday",
        "prenom" => "Jonny"
    ],
];

// $index = 0;

// while ($index < count($auteurs)) {


//     echo $auteurs[$index]["nom"] . "<br>";


//     $index++;
// }


// 2eme exercice

$citations = [
    [
        "index" => 1,
        "idAuteur" => 1,
        "citation" => "tu tombera pas tant qu'on aura besoin de toi.",
        "img" => "img/tomber.png",
    ],
    [
        "index" => 2,
        "idAuteur" => 2,
        "citation" => '3600 fois par heure la seconde chuchote avec sa voix "souvient toi".',
        "img" => "img/Combien_temps_apprendre_langue_etrangere.jpg",
    ],
    [
        "index" => 3,
        "idAuteur" => 3,
        "citation" => "qu'on me donne l'envie, l'envie d'avoir envie, qu'on rallume ma vie.",
        "img" => "img/maxresdefault.jpg",
    ],
];

function citationAleatoire($mesCitations)
{
    $indexAleatoire = array_rand($mesCitations);
    return $mesCitations[$indexAleatoire];
}

$maVariable = citationAleatoire($citations);
// echo $maVariable["citation"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Citations</title>
</head>

<body>
    <div class="fond">

        <div style="height:40vh" class="row align-items-center">
            <h1 class="text-primary text-center"><?php
                                                    echo $maVariable["citation"];
                                                    ?></h1>
        </div>
<div class="container "> <p><?php echo "<img src ='{$maVariable['img']}' alt=''>";

?>
</p></div>
       

        <div style="height:40vh" class="row align-items-center text-danger">
            <h3 class="text-center  "> <?php
                                        date_default_timezone_set('Europe/Paris');
                                        $date = date('l-d-F-y h:i:s');
                                        echo $date; ?></h>
        </div>
    </div>
</body>

</html>  