<?php

class users{
    protected $nom;
    protected $prenom;
    protected $role;
    
    public function getNom(){
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Role: " . $this->role . "<br>";
    }
     public function setNom($nom,$prenom,$role){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
   }
}