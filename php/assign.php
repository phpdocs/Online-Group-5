<?php
    $a=10;
    $b=5;
    define("BR","<br />");

    echo 'Orig Values of $a & $b are below'.BR;
    echo "\$a=$a and \$b=$b".BR;
    echo BR;
    //Simple Assignment Operation
    echo "\$a=\$b".BR;
    $a=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;
    echo BR;
    //Addition Assignment Operation
    echo "Addition Assignment Operation \$a+=\$b".BR;
    $a+=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;
    
    echo BR;
    //Subtraction Assignment Operation
    echo "Subtraction Assignment Operation \$a-=\$b".BR;
    $a-=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;

    echo BR;
    //Multiply Assignment Operation
    echo "Multiply Assignment Operation \$a*=\$b".BR;
    $a*=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;

    echo BR;
    //Division Assignment Operation
    echo "Division Assignment Division \$a/=\$b".BR;
    $a/=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;

    echo BR;
    //Mod Assignment Operation
    $a=20;
    $b=9;
    echo "Mod Assignment Division \$a%=\$b".BR;
    $a%=$b;
    echo "New Value of \$a=$a & \$b=$b".BR;



?>