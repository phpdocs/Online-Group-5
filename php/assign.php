<?php
    $a=10;
    $b=5;
    define("BR","<br />");

    echo 'Orig Values of $a & $b are below'.BR;
    echo "\$a=$a and \$b=$b".BR;

    //Simple Assignment Operation
    echo "\$a=\$b".BR;
    $a=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;

    //Addition Assignment Operation
    echo "Addition Assignment Operation \$a+=\$b".BR;
    $a+=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;
    
    //Subtraction Assignment Operation
    echo "Subtraction Assignment Operation \$a-=\$b".BR;
    $a-=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;


?>