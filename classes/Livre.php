<?php
class Livre {
    private string $nom;
    private int $nbPages;
    private float $prix;
    private string $date;
    private Auteur $auteur; 


    public function __construct(string $nom, string $date, int $nbPages, float $prix, Auteur $auteur){
        $this->nom = $nom;
        $this->date = $date;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    
    public function getNbPages()
    {
        return $this->nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }
 
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
 
    
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }
    
    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }

    public function __toString() {
        return $this->nom." (".$this->date.")<br>";
    }
}