<?php
    /**
     * 
     * Example: Array Function
     * 
     */
    define("BR","<br />");
    $Fruit[]="Apple";
    $Fruit[]="Orange";
    $Fruit[]="Mango";

    echo $Fruit[1].BR;

    //$Fruit="There is no more Fruit";

    //Is_Array array verification method
    echo is_array($Fruit)?$Fruit[2].BR:"This is Not an array".BR;

    //Array Length Method
    echo count($Fruit).BR;


    $colors=array("white","green","black");
	sort($colors); //Sort an array in ascending order
    PrintPre($colors);
	
	$rcolors=array("black","white","green");
	rsort($rcolors); //Sort an array in reverse order
    PrintPre($rcolors);


    //Shuffle Example
    $dob_pakistan=array("14th Aug 1947"," 20 Sept 1948","25 Dec 1949"," 20 Auth 1947");
    shuffle($dob_pakistan);
    PrintPre($dob_pakistan);

    //Explode
    $url="phpdocs.com/php/array";
    $url_array=explode("/",$url);
    PrintPre($url_array);

    function PrintPre($p_array){
        echo "<pre>";
        print_r($p_array);
        echo "</pre>";
    }

	
?>