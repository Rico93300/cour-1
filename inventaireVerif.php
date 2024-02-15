<?php 
$prix_unitaire = 10;
$quantite_achetee = 20;
$montant_total = $prix_unitaire * $quantite_achetee;
$montant_apres_reduction = $montant_total*0.1;
if($montant_total>=100){
   $montant_apres_reduction=$montant_total- $montant_apres_reduction;
   echo"le prix de votre article es {$montant_total} € sans reduction et es de ".$montant_apres_reduction ." € apres reduction.";}
   else{
   $montant_apres_reduction = $montant_total;
   echo"le prix de votre article es " .$montant_total ." € vous n'avez pas droit a reduction";
   }
   







?>