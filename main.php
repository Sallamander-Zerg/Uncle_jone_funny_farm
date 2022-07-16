<?php
 require"chicken.php";
 require"cow.php";
 $eggs = array();
 $milk = array();
 $result;
 $result2;
 echo"добро пожаловать на веселую ферму дяди Джона","\n";
 echo"отчет за день","\n";
 for($ch=1;$ch<=20;$ch++){
    $chicken = new chicken($ch);
    $egg=$chicken->getProduction_chicken();
     array_push($eggs,$egg);
 }
 foreach ($eggs as $key =>$egg) {
    $result=array_sum($eggs);
 }
 for($cw=1;$cw<=10;$cw++){
    $cow = new cow($cw);
    $lit=$cow->getProduction_cow();
     array_push($milk,$lit);
 }
 foreach ($milk as $key2 =>$lit) {
    $result2=array_sum($milk);
 }
 echo"всего за день- ",$result," яиц ",$result2,"л. молока";
?>