<?php
$velos = [
    [
        "nom" => 'VTT',
        "couleur" => 'Rouge',
        "marque" => 'Marque A',
        "taille" => '27,5 pouces'
    ],
    [
        "nom" => 'Vélo de route',
        "couleur" => 'Noir',
        "marque" => 'Marque B',
        "taille" => 'Taille M'
    ],
    [
        "nom" => 'Vélo électrique',
        "couleur" => 'Bleu',
        "marque" => 'Marque C',
        "taille" => 'Batterie 500W'
    ],
    [
        "nom" => 'BMX',
        "couleur" => 'Vert',
        "marque" => 'Marque D',
        "taille" => 'Pneus larges'
    ],
    [
        "nom" => 'Vélo pliable',
        "couleur" => 'Gris',
        "marque" => 'Marque E',
        "taille" => 'Compact et léger'
    ]
];



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Les Velos</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Marque</th>
                <th>Taille</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($velos as $velo) {
                echo "<tr>";
                echo "<td> {$velo['nom']}</td>";
                echo "<td> {$velo['couleur']}</td>";
                echo "<td> {$velo['marque']}</td>";
                echo "<td> {$velo['taille']}</td>";
                echo "</tr>";
            } ?>


        </tbody>
    </table>


</body>

</html>