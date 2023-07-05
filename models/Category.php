<?php
class Category {

    private $icon;
    private $type;

    public function __construct ($icon, $type){
        $this -> setIcon($icon);
        $this -> setType($type);
    }

    public function getIcon(){
        return $this -> icon;
    }

    public function setIcon($icon){
        $this -> icon = $icon;
    }

    public function getType(){
        return $this -> type;
    }

    public function setType($type){
        $this -> type = $type;
    }
}
?>