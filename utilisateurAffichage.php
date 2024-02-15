<?php
$users = [
    [
        "name" => "Alice",
        "email" => 'alice@example.com',
        "password" => "Motdepasse123",
        "age" => 40
    ],
    [
        "name" => "Jean",
        "email" => 'jean@example.com',
        "password" => "Securite123",
        "age" => 35
    ],
    [
        "name" => "John",
        "email" => 'john@example.com',
        "password" => "Password123",
        "age" => 25
    ],
    [
        "name" => "Emma",
        "email" => 'emma@example.com',
        "password" => "Secret123",
        "age" => 30
    ],
    [
        "name" => "Michael",
        "email" => 'michael@example.com',
        "password" => "Pass123",
        "age" => 28
    ],
    [
        "name" => "Sophia",
        "email" => 'sophia@example.com',
        "password" => "Secure123",
        "age" => 32
    ],
    [
        "name" => "William",
        "email" => 'william@example.com',
        "password" => "Password456",
        "age" => 27
    ],
    [
        "name" => "Olivia",
        "email" => 'olivia@example.com',
        "password" => "Secret456",
        "age" => 29
    ],
    [
        "name" => "James",
        "email" => 'james@example.com',
        "password" => "Pass456",
        "age" => 31
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
    <h1>Ma page web</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) {
                echo "<tr>";
                echo "<td> {$user['name']}</td>";
                echo "<td> {$user['email']}</td>";
                echo "<td> {$user['password']}</td>";
                echo "<td> {$user['age']}</td>";
                echo "</tr>";
            } ?>


            <!-- <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                </tr>
            <?php } ?> 

 -->



        </tbody>
    </table>


</body>

</html>