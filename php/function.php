<?php
    
    /**
     * 
     * Example: User Defined Functions
     * 
     */

     define("BR","<br />");
     $counter=1;

     function IncreaseCounter(&$value){
         ++$value;
     }

     echo $counter.BR;
    IncreaseCounter($counter);
    IncreaseCounter($counter);
    IncreaseCounter($counter);
    IncreaseCounter($counter);
    IncreaseCounter($counter);
    echo $counter.BR;
