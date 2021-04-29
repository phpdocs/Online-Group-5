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
     $name=array("Kashif","Faisal","Ali","Kamran","Zeeshan");
     $salary=array(55000,70000,20000,55000,50000);
     $location=array("Sargodha","Karachi","D.I Khan","D.I Khan","Isb");