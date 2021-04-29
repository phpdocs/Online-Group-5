<?php

    /**
     * 
     * Example: Increment & Decrement Operators 
     */
    $a=11;
    define("BR","<br />");

    echo "Original Value of \$a=$a".BR;
    echo "Pre Increment value of \$a=".++$a.BR;  // 11
    echo "Post Increment Value of \$a=".$a++.BR; // 11
    echo BR;
    echo "Pre Decrement value of \$a=".--$a.BR; //  11
    echo "Post Decrement Value of \$a=".$a--.BR; // 11
    echo "Final Value of \$a=$a".BR;


    $tax=20+30*15/10*50; // 2270

    $tax1=(20+30)*15/10*50;//3750

?>