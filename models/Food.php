<?php
class Food extends Product {

    use ShipCost;

    private $expireDate;

    public function __construct($name, $price, Category $category, $expireDate, $shipCost){
        parent :: __construct($name, $price, $category);

        $this -> setExpireDate($expireDate);

        $this -> setShipCost($shipCost);
    }

    public function getExpireDate(){
        return $this -> expireDate;
    }

    public function setExpireDate($expireDate){
        $this -> expireDate = $expireDate;
    }
}


?>