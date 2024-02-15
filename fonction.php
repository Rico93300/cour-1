<?php
function concatenation($phrase1, $phrase2)
{
    $phraseconc =  $phrase1  . " " . $phrase2;
    echo $phraseconc;
}
$phrase1 = 'Eric';
$phrase2 = 'Muller';
concatenation($phrase1, $phrase2);
echo "<br>";


function espace($phrase3)
{
    $tirait = str_replace(" ", "-", $phrase3);
    echo $tirait;
};
$phrase3 = "Eric Muller";
espace($phrase3);
echo "<br>";


// a corriger
function echange($phrase3)
{
    $majuscule = strtoupper($phrase3);
    echo $majuscule;
};
echange($phrase3);

echo "<br>";

function phraseDater($phrase3)
{
    $date = date('d-m-y');
    $time = date('H:i');
    $dater = $phrase3 . " " . $date . " " . $time;
    echo $dater;
};
phraseDater($phrase3);
echo "<br>";

$utilisateur = [
    'nom' => 'John Doe',
    'email' => 'johndoe@example.com',
    'authorized' => true,
];


function autorise($user)
{
        if (array_key_exists('authorized', $user)& $user['authorized']==true) {
            echo $user['nom'] . " bienvenue ! ";
        }
    
};
autorise($utilisateur);



// ****************************correction 5/6

// fonction 5

$utilisateur = [
    'nom' => 'John Doe',
    'email' => 'johndoe@example.com',
    'authorized' => true
];

function verifierCompte($user)
{
    if (array_key_exists('authorized', $user) && $user['authorized'] == true) {
        echo 'Le compte est valide';
    } else {
        echo "Le compte n'est pas autorisé ";
    }
}

verifierCompte($utilisateur);


// function 6
echo "<br>";

function checkUserComm($user)
{
    if (array_key_exists('authorized', $user) && $user['authorized'] == true) {
        $user['commentaire'] = "L'utilisateur" . $user['nom'] . ' est valide';

        echo $user['commentaire'];
    } else {
        $user['commentaire'] = "L'utilisateur" . $user['nom'] . " n'est pas valide";
        echo $user['commentaire'];
    }
}

echo "<br>";


checkUserComm($utilisateur);