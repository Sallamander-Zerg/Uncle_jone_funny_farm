<?php
class chicken{
    static $id  = 1; 
    public $product;
    function __construct($id){
        $this->idAnimal=$id++;
        $this->product=rand(0,1);
        echo "крица под номером ",$this->idAnimal," снесла яиц- ", $this->product,"\n";
    }
    public function getProduction_chicken(){
        return  $this->product;
    }
}
?>