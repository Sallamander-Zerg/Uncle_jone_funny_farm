<?php
 require"chicken.php";
 require"cow.php";
 class farm{
    public $cow_col = array();
    public $chicken_col = array(); 
    public function GetProduction_chicken(){ 
        $resultOnweek_chicen = array();
        $eggs = array();
        for ($i = 0; $i < 20; $i++) { 
        $chicken = new chicken($i);
        $chiken_id=$chicken->GETnumberofchicken();
        array_push($this->chicken_col ,$chiken_id);
        }
        echo "у меня ",count($this->chicken_col)," кур ","\n";
        echo"отчет за неделю курам","\n";
     for($day=1;$day<=7;$day++){
        for($ch=1;$ch<=count($this->chicken_col)+1;$ch++){
            $produsct = new chicken_product($ch);
            $egg=$produsct->getProduction_chicken();
             array_push($eggs,$egg);
         }
         foreach ($eggs as $egg) {
            $resultOnday_chicen=array_sum($eggs);
         }
         array_push( $resultOnweek_chicen,$resultOnday_chicen);
         $eggs = array();
         $this->chicken_col = array();
     }
     foreach($resultOnweek_chicen as $resultOnday_chicen){
        $result_chicen=array_sum($resultOnweek_chicen);
     }
         echo"общий результат за неделю - ",$result_chicen," яиц ","\n"; 

    }

    public function GetProduction_cow(){
         $resultOnweek_cow = array();
         $milk = array();
         for ($i = 0; $i < 10; $i++) { 
            $cow = new cow($i);
            $cow_id=$cow->GETnumberofcow();
            array_push($this->cow_col ,$cow_id);
            }
            echo "а также ",count($this->cow_col)," коров ","\n";
            echo"отчет за неделю коровам","\n";
     for($day=1;$day<=7;$day++){
         for($cw=1;$cw<=count($this->cow_col);$cw++){
            $cow = new cow_product($cw);
            $lit=$cow->getProduction_cow();
             array_push($milk,$lit);
         }
         foreach ($milk as $lit) {
            $resultOnday_cow=array_sum($milk);
         }
         array_push( $resultOnweek_cow ,$resultOnday_cow);
         $milk = array();
         $this->cow_col = array();
        }
     foreach( $resultOnweek_cow as $resultOnday_cow){
            $result_cow = array_sum( $resultOnweek_cow);
     }
     echo"общий результат за неделю - ",$result_cow,"л. молока","\n"; 
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