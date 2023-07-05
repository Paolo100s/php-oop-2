<?php
class Product {

    private $name;
    private $price;

    private Category $category;

    public function __construct ($name, $price, Category $category) {

        $this -> setName($name);
        $this -> setPrice($price);
        $this-> setCategory($category);
        
    }

    public function getName(){
        return $this-> name;
    }

    public function setName($name){
        $this -> name = $name;
    }

    public function getPrice(){
        return $this-> price;
    }

    public function setPrice($price){
        $this -> price = $price;
    }

    public function getCategory(){
        return $this -> category;
    }

    public function setCategory($category){
        $this -> category = $category;
    }
}


?>