<?php
class Toy extends Product{

    use ShipCost;

    private $color;
    private $age;

    public function __construct ($name, $price, Category $category, $color, $age, $shipCost){
        parent :: __construct ($name, $price, $category);

        $this -> setColor($color);
        $this -> setAge($age);
        $this -> setShipCost($shipCost);   
    }

    public function getColor(){
        return $this -> color;
    }

    public function setColor($color){
        $this -> color = $color;
    }

    public function getAge(){
        return $this -> age;
    }

    public function setAge($age){
        $this -> age = $age;
    }
}


?>