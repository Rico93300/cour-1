<?php 
$users =[
[ "John Doe","john.doe@example.com", "Password123", 30],
["Jane Smith", "jane.smith@example.com", "Secure456", 28],
];

echo "l'adresse mail de " .$users[1][0] ." est " .$users[1][1] ."<br>";

$index=1;
while ($index<=10){
    echo  "bonjour " . $users[0][0] . "<br>";
    $index++ ;
}
 

?>