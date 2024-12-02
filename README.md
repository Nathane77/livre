# **README First APP**

## **First APP**

## **Introduction**

This exercise is here to learn the basic of `OOP` or `Object Oriented Programming` in PHP

## **Main function of the project**

This function shows each book's name and info.
```php
     public function afficherBibliographie(){
        echo "Livres de ".$this->getAuteurFull()."<br><br>";
        foreach($this->livres as $book){ 
             echo $book->getNom()." (".$book->getDate().") : ".$book->getNbPages()." pages / ".$book->getPrix()."€ <br>";
        }
    }
```

## **if you have question about the project you can contact me on my [linkedIn](https://www.linkedin.com/in/nassim-hammoudi-8a5235334/)**