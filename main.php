<?php
 require"chicken.php";
 require"cow.php";
 class farm{
    public $cow_col;
    public $chicken_col; 
    public $result=array(array(),array()); 
    public $eggs = array();
    public $milk = array();
    public function GetProduction_chicken(){
        for($day=1;$day<=7;$day++){
        echo "день ",$day ,"\n";
        for($ch=1;$ch<=20;$ch++){
            $chicken = new chicken($ch);
            $egg=$chicken->getProduction_chicken();
             array_push($this->eggs,$egg);
         }
         foreach ($this->eggs as $egg) {
            $result_chicken=array_sum($this->eggs);
         }
        //  $this->result["курицы"]=[$result_chicken];
         echo"всего за день- ",$result_chicken," яиц ","\n";
        }
        }
        public function GetProduction_cow(){
         for($day=1;$day<=7;$day++){
         echo "день ",$day ,"\n";
         for($cw=1;$cw<=10;$cw++){
            $cow = new cow($cw);
            $lit=$cow->getProduction_cow();
             array_push($this->milk,$lit);
         }
         foreach ($this->milk as $lit) {
            $result_cow=array_sum($this->milk);
         }
        //  array_push($this->result,"коровы".[[$result_cow]]);
         echo"всего за день- ",$result_cow,"л. молока","\n";
        }
        }
        // public function GetProductOnweek(){
        //  echo $this->result;
        // }
        public function AddAnimals(){
            
        }

}
$ferm= new farm;
echo"добро пожаловать на веселую ферму дяди Джона","\n";
echo"отчет за деньпо курам","\n";
echo $ferm->GetProduction_chicken();
echo"отчет за деньпо коровам","\n";
echo $ferm->GetProduction_cow();
// echo $ferm->GetProductOnweek();

?>