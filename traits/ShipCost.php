<?php
trait ShipCost {

    private $shipCost;

    public function getShipCost(){
        return $this -> shipCost;
    }

    public function setShipCost($shipCost){
        $this -> shipCost = $shipCost;
    }
}
?>