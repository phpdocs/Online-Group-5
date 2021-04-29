<?php

    /**
     * 
     * Example: IF-Else-IF
     * 
     */

     define("BR","<br />");

     $Urdu=65;

     //Simple Pass Fail
     if($Urdu>33){
        echo "Pass".BR;
     }else{
         echo "Fail".BR;
     }

     echo BR;

     if($Urdu>85)
        echo "4.0 GPA".BR;
    else if($Urdu>=75 && $Urdu<85)
        echo "3.75 GPA".BR;
    else if($Urdu>=70 && $Urdu<75)
        echo "3.0 GPA".BR;
    else if($Urdu>=60 && $Urdu<70)
        echo "2.5 GPA".BR;
    else if($Urdu>=58 && $Urdu<60)
        echo "2.0 GPA".BR;
    else
        echo "Sorry you are fail.";
