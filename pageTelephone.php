<!-- <?php

        $produits = [
            [
                "nom" => 'iphone 15',
                "prix" => 1000,
                "stock" => 5
            ],
            [
                "nom" => 'samsung ',
                "prix" => 900,
                "stock" => 0
            ],
            [
                "nom" => 'iphone 14',
                "prix" => 700,

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
    <h1>telephone</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>prix</th>
                <th>stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produits as $produit) {
                echo '<tr>';
                if (array_key_exists('stock', $produit)) {

                    echo "<td>" . $produit['nom'] . '</td>';
                    echo "<td>" . $produit['prix'] . ' €</td>';
                    echo "<td>" . $produit['stock'] . 'en stock </td>';
                } else {
                    $produit['stock'] = 0;

                    if ($produit["stock"] > 0) {
                        echo "<td>" . $produit['nom'] . '</td>';
                        echo "<td>" . $produit['prix'] . ' €</td>';
                        echo "<td>" . $produit['stock'] . " en stock</td>";
                    } else {
                        echo "<td>" . $produit['nom'] . '</td>';
                        echo "<td>" . $produit['prix'] . ' €</td>';
                        echo "<td text color:red>" . $produit['stock'] . "rupture de stock</td>";
                    }
                }
                echo '</tr>';
            } ?>



        </tbody>
    </table>


</body>

</html> -->


<!-- ************************correction*********************************** -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <h1>Liste des produits</h1>

    <?php
    // Tableau associatif contenant les détails des produits
    $produits = [
        'produit1' => [
            'nom' => 'Ordinateur portable',
            'prix' => 800,
            'stock' => 5
        ],
        'produit2' => [
            'nom' => 'Smartphone',
            'prix' => 500,
            'stock' => 0
        ],
        'produit3' => [
            'nom' => 'Casque audio',
            'prix' => 100,

        ]
    ];

    // Boucle foreach pour parcourir le tableau $produits
    foreach ($produits as $produitKey => $produit) {
        // Vérifie si la clé 'stock' existe, sinon l'ajoute avec une valeur de 0
        if (!array_key_exists('stock', $produit)) {
            $produits[$produitKey]['stock'] = 0;
        }

        // Affiche les détails du produit
        echo "<p><strong>{$produit['nom']}</strong> - Prix : {$produit['prix']} € ";

        // Vérifie le stock et affiche "En stock" ou "Rupture de stock"
        if (array_key_exists('stock', $produit) && $produit['stock'] > 0) {
            echo "<span class='text-success text-bold'>En stock</span></p>";
        } else {
            echo "<span class='text-danger text-bold'>Rupture de stock</span></p>";
        }
    }
    ?>
</body>

</html>