<?php
 
 
$user = [
 
    'name' => 'Jeanne Martin',
    'email'=> 'jeanne.martin@example.com',
    'password' => 'Securite456',
    'age'=> 25
 
];
 
echo $user ['name'];
echo '<br>';
 
$user['name'] = 'Carla';
 
echo $user ['name'];
 
// array = tableau
array_push($user, "adresse");
 
echo '<br>';
 
$user['adresse'] = '1234 rue de la republique';
 
var_dump($user);
 
echo '<br>';
echo '<br>';
 
print_r($user);
echo $user;
 
echo '<br>';
$question = true ;
echo '<br>';
 
echo $question;
echo '<br>';
var_dump($question);
 
echo '<br>';
echo '<br>';
echo '<br>';
 
$reponse = 1;
echo $reponse;
echo '<br>';
var_dump($reponse);
echo '<br>';
 
$secondeQuestion = "1";
echo '<br>';
 
echo $secondeQuestion;
echo '<br>';
var_dump($secondeQuestion);

    $user = [
            'name' => 'Farid Mouzoun',
            'email' => 'farid@yahoo.fr',
            'password' => 'securite123',
            'age' => 27
    ];
 
    // Modifier une valeur d'un élément
    $user['name'] = 'Farid';
    echo $user['name'] . '<br>';
 
    // Ajouter une valeur à un tableau indexé (Ne marchera pas pour ce cas)
    // array_push($user, 'valeur');
 
    $user['adresse'] = '1 rue du bourg-palette';
 
    var_dump($user);
    // die; Arrêter le code (Dans le cas où on veut débugger)
    echo '<br>';
    print_r($user);
 
    $haveComplement = false;
 
    if ($haveComplement) {
        $user['complement'] = 'Merci de ne passer sonner à la porte';
        echo '<br>';
        echo "L'utilisateur a un complément d'adresse : <br>";
        foreach($user as $element) {
            echo $element;
            echo '<br>';
        }
    } else {
        echo '<br>';
        echo "L'utilisateur n'a pas de complément d'adresse : <br>";
        foreach($user as $element) {
            echo $element;
            echo '<br>';
        }
    }
 
    if (array_key_exists('adresse', $user)) {
        echo "L'adresse de l'utilisateur est : " . $user['adresse'];
    } else {
        echo "L'utilisateur n'a pas d'adresse";
    }
 
 
    $users = [
        [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'age' => 30,
            'authorized' => true
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => 'password456',
            'age' => 25,
            'authorized' => true
        ],
        [
            'name' => 'Mike Johnson',
            'email' => 'mike.johnson@example.com',
            'password' => 'password789',
            'age' => 35,
        ],
        [
            'name' => 'Sarah Williams',
            'email' => 'sarah.williams@example.com',
            'password' => 'passwordabc',
            'age' => 28,
            'authorized' => false
        ],
        [
            'name' => 'David Brown',
            'email' => 'david.brown@example.com',
            'password' => 'passwordxyz',
            'age' => 32,
        ]
    ];

    echo "<br>";
    // ici on parcours chaque element du tableau users. on nomme les elements du tableau user (au singulier)
    // un tableau d'utilisateurS est compose d'utilisateur(sans s)

    foreach ($users as $user){
        echo "<br>";
        // on verifie que la cle autorized existe , PUIS on verifie que la valeur de autorized est a true

        if (array_key_exists('authorized',$user) && $user['authorized']== true){
            // si il es autaurise alors on affiche un message qui le dit

            echo"l'utilisateur " .$user['name'] . "est autorise";

        }else{
            // sinon on affiche un message qui dit qu'il n'es pas autorise

            echo"l'utilisateur " .$user['name'] . "n'est pas autorise";
        }
    }
    echo "<br>";
    $user = [
        
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'age' => 30,
            'authorized' => true
    ];
    echo "<br><br><br>";
    echo "name : " .$user["name"];
    echo "<br><br><br>";

    // ce code permet de recuperer la CLE et la VALEUR
    foreach ($user as $key => $valeur){
        echo $key ." : " . $valeur;
        echo "<br>";
    }


  $users = [
        [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'age' => 30,
            'authorized' => true
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => 'password456',
            'age' => 25,
            'authorized' => true
        ],
    ];
    echo "<br><br><br>";

    foreach ($users as $user){
        foreach($user as $key=> $value){
            echo $key. " : " .$value. '<br>';
        }
    }

    foreach ($users as $key=> $user){
        echo "utilisateur : ".$key;
        foreach($user as $key=> $value){
            echo $key. " : " .$value. '<br>';
        }
    }