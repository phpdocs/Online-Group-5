<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            for($a=1;$a<11;$a++){
        ?>
            <tr>
                <td>3</td>
                <td>x</td>
                <td><?php echo $a;?></td>
                <td>=</td>
                <td><?php echo $a*3;?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>