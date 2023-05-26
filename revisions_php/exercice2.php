<?php

class Note{
    // attributs
    public $Value ;
    public $Coef ;
    public $Matiere ;

    public function __construct($value , $coef , $matiere){
        $this -> Value = $value ;
        $this -> Coef = $coef ;
        $this -> Matiere = $matiere ;
    }

    public function __toString(){
        return $this -> Value. ' '. $this -> Coef. ' '. $this -> Matiere ;
    }

}

$note = new Note(20 , 2 , "Histoire") ;
echo $note ;

// classe élève

class Eleve{
    public $Nom ;
    public $Prenom ;
    public $TabNotes ;

    public function __construct($nom, $prenom) {
        $this -> Nom = $nom ;
        $this -> Prenom = $prenom ;
        $this -> TabNotes = [] ;
    }

    public function AjoutNote($note) {
        $this -> TabNotes [] = $note ;
    }

    public function MoyenneNote() {
        // count($this -> TabNotes) ;  // récupère le nb de notes
        $sum_coef = 0 ;
        $sum_notes = 0 ;
        foreach ($this -> TabNotes as $Note) {
            $sum_notes += $Note -> Value * $Note -> Coef ;
            $sum_coef += $Note -> Coef ;
        }
        return $sum_notes / $sum_coef ;
    }

    public function MoyenGenMatiere($matiere) {
        $sum_coef = 0 ;
        $sum_notes = 0 ;
        foreach ($this -> TabNotes as $Note) {
            if ($Note -> Matiere == $matiere) {
                $sum_notes += $Note -> Value * $Note -> Coef ;
                $sum_coef += $Note -> Coef ;
            }
        }
        return $sum_notes / $sum_coef ;
    }

}

$Eleve1 = new Eleve("SIMONIN" , "Mathieu") ;
$Eleve1 -> AjoutNote(new Note(8 , 2 , "Maths")) ;
$Eleve1 -> AjoutNote(new Note(2 , 1 , "Physic")) ;
$Eleve1 -> AjoutNote(new Note(10 , 3 , "Maths")) ;
$Eleve1 -> MoyenneNote() ;
echo "<br>".$Eleve1 -> MoyenneNote() ;
echo "<br>".$Eleve1 -> MoyenGenMatiere("Maths") ;

/* echo "<pre>" ;
var_dump($Eleve1) ;
echo "</pre>" ; */

?>