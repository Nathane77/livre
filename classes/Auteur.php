<?php
class Auteur {
    //set les attributs de la class
    private string $prenom ;
    private string $nom;
    private array $livres;
   
    //crée l'objet et set les valeurs des attributs
    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres =[];
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom() {
        $this->Prenom;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom() {
        $this->nom;
    }
    
    public function getLivres()
    {
        return $this->livres;
    }
    
    public function setLivres($livres)
    {
        $this->livres = $livres;
        
        return $this;
    }

    public function getAuteurFull() {
        return $this->prenom." ".$this->nom;
    }

     public function showBibliography(){
        echo "Livres de ".$this->getAuteurFull()."<br><br>";
        foreach($this->livres as $book){ 
            echo $book->getNom()." (".$book->getDate().") : ".$book->getNbPages()." pages / ".$book->getPrix()."€ <br>";
        }
    }

    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }
    
    public function __toString(){
        return $this->Prenom." ".$this->nom;
    }
}