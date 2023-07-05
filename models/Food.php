<?php
class Food extends Product {

    private $expireDate;

    public function __construct($name, $price, Category $category, $expireDate){
        parent :: __construct($name, $price, $category);

        $this -> setExpireDate($expireDate);
    }

    public function getExpireDate(){
        return $this -> expireDate;
    }

    public function setExpireDate($expireDate){
        $this -> expireDate = $expireDate;
    }
}


?>