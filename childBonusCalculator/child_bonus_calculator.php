<?php

class Employee{
    private $nom ;
    private $prenom ;
    private $salaire ;
    private $nb_enfant ;

    public function __construct($nom, $prenom, $salaire, $nb_enfant){
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->salaire = $salaire ;
        $this->nb_enfant = $nb_enfant ;
    }

    public function prime_salaire(){
        $salaire = $this -> salaire ;       // locale à la méthode prime_salaire

        if ($salaire < 2500) {
            $prime = $salaire * 0.5 ;
        } 
        
        elseif ($salaire <= 3500) {
            $prime = $salaire * 0.25 ;
        } 
        
        else {
            $prime = $salaire * 0.1 ;
        }

        return $prime ;

    }

public function prime_enfant(){
    $salaire = $this -> salaire ;
    $nb = $this -> nb_enfant ;

        if ($salaire < 2500) {
            
            if ($nb > 2) {
                $prime = $nb * 1000 ;
            } else {
                $prime = $nb * 500 ;
            } 
        } 
        
        elseif ($salaire <= 3500) {
            if ($nb > 3) {
                $prime = $nb * 500 ;
            } else {
                $prime = $nb * 200 ;
            }
        } 
        
        else {
            $prime = $nb * 100 ;
        }

        return $prime ;
}

public function prime_total(){
    return $this -> prime_enfant() + $this -> prime_salaire() ;
}

}

$Employee1 = new Employee("John", "Doe", 2000, 4) ;
$prime_totale = $Employee1 -> prime_total() ;
echo $prime_totale ;

?>