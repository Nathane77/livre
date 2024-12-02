
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POO livres</h1>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
//force automatically the link of the classes' pages
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$stephK = new Auteur("Stephen","King");

$l1 = new Livre ("CA","1986","1138","20",$stephK) ;

$l2 = new Livre ("Simetierre","1983","374","15",$stephK) ;

$l3 = new Livre ("Le Fléau","1978","823","15",$stephK) ;

$l4 = new Livre ("Shining","1977","447","16",$stephK) ;

echo $stephK->showBibliography();