 <?php


    // $prix1 = 20;
    // $prix2 = 33;

    // function ajouterTVA($prix)
    // {
    //     $prixTTC = $prix + ($prix*0.2);
    //     echo $prixTTC;
    // }
    // ajouterTVA($prix1);



    //  $prix1 = 20;
    //  $prix2 = 33;

    //  function ajouterTVA($prix){

    //      $prixTTC = $prix + ($prix * 0.2);
    //      echo $prixTTC;
    //  }
    //  ajouterTVA(20);
    //  echo"<br>";
    //  ajouterTVA(33);
    //  echo"<br>";
    //  $prix1 = 24;
    //  $prix2 = 43;
    //  ajouterTVA($prix1);

    //  $frite1 = 23;
    //  $frite2 = 45;
    //  function addition($tarif1, $tarif2){
    //      $tarif  = $tarif1+ $tarif2;
    //      echo $tarif;

    //  }
    //  echo"<br>";
    //  echo"<br>";
    //  addition ($frite1,$frite2);

    $prix1 = 20;
    $prix2 = 33;

    function ajouterTVA($prix)
    {
        $prixTTC = $prix * 1.2;
        // $prix + ($prix * 0.2);
        echo $prixTTC;
    }

    ajouterTVA($prix1);


    function addition($tarif1, $tarif2)
    {
        $tarif = $tarif1 + $tarif2;
        echo $tarif;
    }
    echo '<br>';
    addition(50, 30);
    $prix5 = 20;
    $prix6 = 36;
    echo '<br>';
    addition($prix5, $prix6);


    // fonctions natives sur les chaines de caractères

    $phrase = "Je m'appelle Eric & je suis étudiant en programmation";
    $longueur = strlen($phrase);
    echo '<br>';
    echo "La phrase contient {$longueur} caractères";

    $phraseCourte = substr($phrase, 0, 20);
    echo "<br>" . $phraseCourte;
    echo "<br>";
    if (strlen($phrase) > 50) {
        $phraseRaccourcie = substr($phrase, 0, 20);
        echo "Voici la phrase raccourice : " . $phraseRaccourcie;
    } else {
        echo "La phrase est assez courte : " . $phrase;
    }
    $phrase2 = "je suis un Professeur de Programmation";
    $phraseNormalisee = str_replace('P', 'p', $phrase2);
    echo "<br>";
    echo "<br>";
    echo $phrase2;
    echo "<br>";
    echo $phraseNormalisee;

    $phraseModifiee = str_replace('Professeur', 'eleve', $phrase2);

    echo "<br>";
    echo $phraseModifiee;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // ---------------------------------------

    $day = date('d');
    $month = date('m');
    $year = date('y');

    $hour = date('H');
    // les minutes s'appelle avec "i" et non "m"
    $minute = date("i");
    // maintenant on peut afficher ce que l'on a receuilli
    echo 'bonjour ! nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour . ' h ' . $minute;
    echo "<br>";

    $date = date('d-m-y');
    $time = date('H:i');
    $dateEnLettre=date('l d F y');

    echo "bonjour ! nous sommes le " . $date . " et il est " . $time;

    echo "<br>";
    echo "<br>";
    echo "bonjour ! nous sommes le " . $dateEnLettre. " et il est " . $time;

    ?>

