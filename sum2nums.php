<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         function sum2Number( $a, $b) {
            $c = $a + $b;
            return  $c;
        
        }
        
        echo sum2Number(2, sum2Number(4,5));
    ?>
</body>
</html>