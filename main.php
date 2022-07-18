<?php
 require"chicken.php";
 require"cow.php";
 class farm{
    public $cow_col = array();
    public $chicken_col = array(); 
    public function GetProduction_chicken(){ 
        $eggs = array();
        for ($i = 0; $i < 20; $i++) { 
        $chicken = new chicken($i);
        $chiken_id=$chicken->GETnumberofchicken();
        array_push($this->chicken_col ,$chiken_id);
        }
        echo "у нас ",count($this->chicken_col)," кур ","\n";
        echo"отчет за неделю курам","\n";
     for($day=1;$day<=7;$day++){
        for($ch=1;$ch<=count($this->chicken_col)+1;$ch++){
            $produsct = new chicken_product($ch);
            $egg=$produsct->getProduction_chicken();
             array_push($eggs,$egg);
         }
         foreach ($eggs as $egg) {
            $result=array_sum($eggs);
         }
     }
        $this->chicken_col = array();
        echo"общий результат за неделю - ", $result," яиц ","\n"; 

    }

    public function GetProduction_cow(){
         $resultOnweek_cow = array();
         $milk = array();
         for ($i = 0; $i < 10; $i++) { 
            $cow = new cow($i);
            $cow_id=$cow->GETnumberofcow();
            array_push($this->cow_col ,$cow_id);
            }
            echo "у нас ",count($this->cow_col)," коров ","\n";
            echo"отчет за неделю коровам","\n";
     for($day=1;$day<=7;$day++){
         for($cw=1;$cw<=count($this->cow_col);$cw++){
            $cow = new cow_product($cw);
            $lit=$cow->getProduction_cow();
             array_push($milk,$lit);
         }
         for($day=1;$day<=7;$day++){
            for($cow=1;$cow<=count($this->cow_col)+1;$cow++){
                $produsct = new cow_product($cow);
                $lit=$produsct->getProduction_cow();
                 array_push($milk,$lit);
             }
             foreach ($milk as $lit) {
                $result=array_sum($milk);
             }
         } 
     } 
      $this->cow_col = array();
      echo"общий результат за неделю - ",$result,"л. молока","\n"; 
     }

     public function AddAnimals(){
        echo"съездили на рынок, купили животных ","\n"; 
        for ($i = 0; $i < 5; $i++){ 
        array_push($this->chicken_col,1); 
        }
        array_push($this->cow_col,1);
    }
}
$ferm= new farm;
echo"добро пожаловать на веселую ферму дяди Джона","\n";
echo $ferm->GetProduction_chicken();
echo $ferm->GetProduction_cow();
echo $ferm->AddAnimals();
echo $ferm->GetProduction_chicken();
echo $ferm->GetProduction_cow();
?>