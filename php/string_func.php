<?php

    /**
     * 
     * Example: User Defined Functions
     * 
     */

    
    define("BR","<br />");
     function toHeading($value){
        $heading="<h1>value</h1>";
         return str_replace("value",$value,$heading);
     }

     echo toHeading("Muhammad Afzal");

     $password_hash=md5("Temp123");
     echo $password_hash.BR;
     $password_hash=strrev($password_hash);
     echo $password_hash.BR;

     $password_hash=strrev($password_hash);
     echo $password_hash.BR;