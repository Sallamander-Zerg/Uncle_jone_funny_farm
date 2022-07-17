<?php
class cow{
    static $id  = 1; 
    public $product;
    function __construct($id){
        $this->idAnimal=$id++;
        $this->product=rand(8,12);
    }
    public function GETnumberofcow(){
        return  $this->idAnimal;
    }
}
class cow_product extends cow{
    public function getProduction_cow(){
        return  $this->product;
    }
}
?>