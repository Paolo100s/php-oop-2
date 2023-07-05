<?php
class Toy extends Product{
    private $color;
    private $age;

    public function __construct ($name, $price, Category $category, $color, $age){
        parent :: __construct ($name, $price, $category);

        $this -> setColor($color);
        $this -> setAge($age);      
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