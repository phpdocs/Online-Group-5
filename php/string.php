<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $name="Muhammad Bin Qasim";
        echo "The Great Warrior\t".$name;

        echo "<br />";

        //Double Quote Execute Variables
        echo "The Great Leader $name";

        echo "<br />";

        //Single Quote Does not execute Variables
        echo 'The Great Leader $name';
    ?>

</body>
</html>