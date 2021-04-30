<?php
    /**
     * 
     * Example: Array
     * 
     */

     define("BR","<br />");

     $color=array("Black","White","Green");

     $day[1]="Monday";
     $day[2]="Tuesday";
     $day[3]="Wednesday";
     $day[4]="Thursday";
     $day[5]="Friday";
     $day[6]="Saturday";
     $day[7]="Sunday";


     echo "Today is $day[3] and it's very hot.".BR;

     //Print array using Loop
     for($a=1;$a<=count($day);$a++){
         echo $a."=".$day[$a].BR;
     }


     //Employee Record
     $name=array("Kashif","Faisal","Ali","Kamran","Zeeshan","Imran Khan");
     $salary=array("Imran Khan"=>99000,"Kashif"=>55000,"Faisal"=>70000,"Ali"=>20000,"Kamran"=>55000,"Zeeshan"=>50000);
     $location=array("Imran Khan"=>"Rawp","Kashif"=>"Sargodha","Faisal"=>"Karachi","Ali"=>"D.I Khan","Kamran"=>"D.I Khan","Zeeshan"=>"Isb");

     echo $name[3]." is our employee of the month and he is taking ".$salary[$name[3]]." and he is from ".$location[$name[3]].BR;
     echo BR;
     //Display Employee Name and Salary
     foreach ($salary as $index=>$value){
         echo $index." is taking ".$value.BR;
     }

