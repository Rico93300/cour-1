<?php

$users = [
    [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'age' => 30,

    ],
    [
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'age' => 25,

    ],
    [
        'name' => 'Mike Johnson',
        'email' => 'mike.johnson@example.com',
        'age' => 35,
    ]
];

$produits = [
    [
        'nom' => 'Ordinateur portable',
        'prix' => 800,
        'is_enabled' => false,
    ],
    [
        'nom' => 'Smartphone',
        'prix' => 500,
        'is_enabled' => false,
    ],
    [
        'nom' => 'Casque audio',
        'prix' => "100",
        'is_enabled' => true,

    ]
];

function ShowActiveProducts($produits)
{
    foreach ($produits as $produit) {
        if ($produit['is_enabled']) {
            echo "Nom du produit:" . $produit['nom'] . ", Prix: " . $produit['prix'] . PHP_EOL;
        }
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Liste des utilisateurs</title>
</head>

<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table> <?php  ShowActiveProducts($produits); ?></table>
</body>

</html>