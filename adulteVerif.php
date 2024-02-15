<?php 
$age = 15;
$isadult = false;

if ($age >= 18){
    $isadult=true;
}

if ($isadult){
    echo"bienvenue sur le site";
}else{
    echo"desoler, vous devez etre majeur";
}

?>