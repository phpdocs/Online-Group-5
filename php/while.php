<?php

    /**
     * 
     * Example: While Loops
     * 
     */

    $counter=1;
	while($counter<5){
		echo $counter."<br>";
        if($counter==3){
            echo "We are going to Break the Loop<br />";
            break;
        }
		++$counter;
	}


    $counter=1;
	do{
		echo $counter."<br>";
		$counter++;
	}while($counter<=1);
