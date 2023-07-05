<?php

require_once("./traits/ShipCost.php");

require_once("./models/Product.php");
require_once("./models/Category.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

$dogCategory = new Category ("dog", "cane");
$catCategory = new Category ("cat", "gatto");

try{
        $foods = [
        $beef = new Food ("Manzo", 7, $dogCategory, "2024", 2),
        $salmon = new Food ("Salmone", 3, $catCategory, "2024", 2)
    ];

    $toys = [
        $bone = new Toy ("Osso", "5", $dogCategory, "giallo", "1-3", 2),
        $ball = new Toy ("Palla", "4", $catCategory, "rosso", "1-2", 2)
    ];
} catch (Exception $e){
    echo "Error:" . $e -> getMessage();
}


?>