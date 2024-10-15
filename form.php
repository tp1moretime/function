<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        First number: <input type="text" name="first_num"><br>
        Last number: <input type="text" name="last_num"><br>
        <input type="submit" value="Tính">
    </form>

    <?php
        if (isset($_POST['first_num']) && isset($_POST['last_num'])) {
            $a = $_POST['first_num'];
            $b = $_POST['last_num'];
            $sum = $a + $b;
            echo "Tổng của hai số là: " . $sum;
        }
        else{
            echo "null";
        }
    ?>

</body>

</html>