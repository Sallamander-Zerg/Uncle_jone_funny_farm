<?php
class chicken{
    static $id  = 1; 
    public $product;
    function __construct($id){
        $this->idAnimal=$id++;
        $this->product=rand(0,1);
    }
    public function GETnumberofchicken(){
        return  $this->idAnimal;
    }
}
class chicken_product extends chicken{
public function getProduction_chicken(){
    return  $this->product;
}
}
?>