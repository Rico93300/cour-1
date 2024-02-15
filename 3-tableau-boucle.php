<?php 
$userName1 = "Alice";
$userEmail1 = "alice@example.com";
$userPassword1 = "mot de passse123";
$userAge1 = 40;

$userName2 = "jean";
$userEmail2 = "jean@exemple.com";
$userPassword2 = "securite123";
$userAge2 = 35;


$user1 = ["Alice", "alice@example.com", "mot de passse123" ,40];
$user2 = ["jean","jean@exemple.com","securite123",35];

// mot de passe 2eme utilisateur

echo $user2[2];
echo"Nom: " .$user1[0] . "Email " .$user1[1] . "MDP: " .$user1[2] . " age: " . $user1[3];

$user1 = ["Alice", "alice@example.com", "mot de passse123" ,40];
$user2 = ["jean","jean@exemple.com","securite123",35];
$users = [$user1, $user2];

$users = [
 ["Alice", "alice@example.com", "mot de passse123" ,40],
 ["jean","jean@exemple.com","securite123",35],
];

// boucle while

$count = 1;

while ($count <=15){
    echo"ceci est un compteur";
    $count++;
}

// --------


$users = [
    ["Alice", "alice@example.com", "mot de passse123" ,40],
    ["jean","jean@exemple.com","securite123",35],
   ];
   



echo "<br>";
echo $users[1][2];
echo "<br>";
echo count($users);

$index = 0;
echo "<br>";

while ($index < count($users)){

    echo "Nom" . $users[$index][0] ."<br>";
    echo "mdp" . $users[$index][1] ."<br>";
    echo "email" . $users[$index][2] ."<br>";
    echo "age" . $users[$index][3] ."<br>";

    $index++;
}

// boucle for

$users = [
    ["Alice", "alice@example.com", "mot de passse123" ,40],
    ["jean","jean@exemple.com","securite123",35],
   ];

   for($index=0; $index <2;$index++){
    echo $users[$index][0] ."<br>";
   }


//    voila comment se comporte la boucle for

// $index=0;
// echo $users[0][0];
// $index=1;
// echo $users[1][0];



$user1 = [
    "name" => "Jean",
    "email" => "jean@example.com",
    "password" => "passs123",
    "age" => 22
];

echo $user1["password"];


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

// echo $users["name"];


$index = 0;

while ($index < count($users)) {


    echo $users[$index]["name"] . "<br>";
    echo $users[$index]["email"] . "<br>";
    echo $users[$index]["password"] . "<br>";
    echo $users[$index]["age"] . "<br>";

    $index++;
}
echo "<br>";
echo "<br>";

foreach($users as $user){
    echo $user["name"] ."<br>";
}