<?php

$Nom = "Mathieu" ;
$Message = "$Nom , Bienvenue à la formation Adélium" ;
echo $Message ;

$TabFruits = array("Pommes", "Poires", "Oranges", "Bananes", "Mandarines") ;
/* echo "<br>" . $TabFruits[0] ;
echo "<br>" . $TabFruits[1] ;
echo "<br>" . $TabFruits[2] ;
echo "<br>" . $TabFruits[3] ;
echo "<br>" . $TabFruits[4] ;*/

for ($i = 0 ; $i < count($TabFruits) ; $i++) 
{
    if ($i % 2 == 0){
        echo "<br>" . $TabFruits[$i] ;
    }
}

function Affiche($Tableau) {
    $i = count($Tableau)-1 ;
    while ($i >= 0) {
        echo "<br>". $Tableau[$i] ;
        $i-- ;
    }
}

echo "<br>" ;
Affiche($TabFruits);


$TblPays = 
[
    [
        "Pays" => "France" ,
        "Capital" => "Paris" ,
        "Superficie" =>  100000 ,
        "Population" =>  "66M" ,
        "Continent" => "Europe" ,
    ],
    [
        "Pays" => "Maroc" ,
        "Capital" => "Rabat" ,
        "Superficie" =>  55000 ,
        "Population" =>  "100M" ,
        "Continent" => "Afrique" ,
    ],
    [
        "Pays" => "Algérie" ,
        "Capital" => "Rabat" ,
        "Superficie" =>  55000 ,
        "Population" =>  "50M" ,
        "Continent" => "Afrique" ,
    ],
    [
        "Pays" => "Roumanie" ,
        "Capital" => "Bukarest" ,
        "Superficie" =>  90000 ,
        "Population" =>  "30M" ,
        "Continent" => "Europe" ,
    ],
    [
        "Pays" => "Bénin" ,
        "Capital" => "Porto-Novo" ,
        "Superficie" =>  10000000 ,
        "Population" =>  "300M" ,
        "Continent" => "Afrique" ,
    ]
];
print_r($TblPays) ;

foreach ($TblPays as $Pays)
{
    // print_r($Pays['Capital']) ;  // On récupère la Clé "Capital"
    // echo "<br>" ;
    foreach ($TblPays as $key=>$value){
        echo "<br> Pays : $key" ;
    } 
}



// Fonction "filtre_tableau" filtre un tableau selon pays/continents


// Solution 1


function filtre_tableau($tabPays, $continent) { 
    $result = array();
    foreach ($tabPays as $pays) {
        if ($pays['Continent'] === $continent) {
        $result[] = $pays['Pays'];
            }
        }
        return $result;
    }


// Solution 2


function filtre_par_continent($pays, $continent) {
    $newPays = [] ;
    foreach ($pays as $p) {
        if($p['Continent'] === $continent) {
            array_push($newPays, $p) ;
    }
    return $newPays ;
} 

var_dump(filtre_par_continent($TabFruits, "Paris")) ;  // affiche le contenu utile en debuggage


// Fonction de filtre par population


function filre_seuil($pays, $population) {
    $newSeuil = [] ;
    foreach ($Pays as $o) {
        if($o['Population'] > $MinSeuil) {
            array_push($newSeuil, $o) ;
        }
        return $newSeuil ;
}

echo "<br> filtre population" ;
print_r(filtre_seuil($TblPays , '700000')) ;


// Fonction qui vérifie tous les critères de filtrage en argument

function filtre_pays($pays, $func_filtre) {
    $newPays = [] ;
    foreach ($pays as $p) {

    }
}


?>