<?php
class cow{
    static $id  = 1; 
    public $product;
    function __construct($id){
        $this->idAnimal=$id++;
        $this->product=rand(8,12);
        echo "корова под номером ",$this->idAnimal," дала - ", $this->product,"л. молока","\n";
    }
    public function getProduction_cow(){
        return  $this->product;
    }
}
?>