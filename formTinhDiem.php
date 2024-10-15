<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <?php
        error_reporting(0); 

        function diemTB($semester1, $semester2, $year){
            $avg = 0;
            if($year == 1){
                $avg = ($semester1 + ($semester2*2))/3;

            }else if($year == 2) {
                $avg = (($semester1*2) + ($semester2*3))/5;

            } else {
                $avg = (($semester1*3) + ($semester2*4))/7;

            }
            return $avg;

        }
        $se1 = $_POST['se1'];
        $se2 = $_POST['se2'];
        $year = $_POST['select'];
        $result = diemTB($se1, $se2, $year);

        $hocLuc = "";
        function xepLoai($result) {
            if ($result >= 9) {
                return "gioi";
            } elseif ($result >= 7 && $result < 9) {
                return "kha";
            } elseif ($result >= 5 && $result < 7) {
                return "trung binh";
            } else {
                return "yeu";
            }
        }
        $hocLuc = xepLoai($result);

    ?>
    <div>
        <form action="formTinhDiem.php" method="POST">

            <h1>BANG DIEM CUA EM</h1>
            <div>
                <p>Semester1:</p>
                <input type="text" name="se1" value="<?php echo $se1?>">
            </div>
            <div>
                <p>Semester2:</p>
                <input type="text" name="se2" value="<?php echo $se2?>">
            </div>
            <div>
                <p>Year:</p>
                <select style="color: red;" name="select">
                    <option value="1" name="number">1</option>
                    <option value="2" name="number">2</option>
                    <option value="3" name="number">3</option>

                </select>
            </div>
            <div>
                <p>Summarise:</p>
                <input type="text" name="result" disabled="true" value="<?php echo $result?>">
            </div>
            <div>
                <p id="display"><?php echo $hocLuc?></p>
            </div>
            <div class="btn">
                <button type="submit" name="ok" id="ok" value="OK">Submit</button>
                <button type="reset" name="reset"
                    onclick="window.location.href='http://localhost:8080/Phong_PHP/15-10/formTinhDiem.php'">Cancel</button>
        </form>

    </div>


</body>

</html>