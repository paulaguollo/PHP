<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        /* $num2 = 5; */
        $sum = $num1 + $num2;
        // if ($sum > 20)
        //     $sum += 8;
        // else
        //     $sum -= 5;

        if (isset($sum))
            echo "Result: " . $sum;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
</head>
<body>
    <!-- <form action="Ex01.php" method="post">
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <button type="submit">Sum</button>
    </form> -->

    <!-- <form action="index.php" method="post">
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <button type="submit">Sum</button>
    </form> -->

    <?php 
        if (!isset($sum)) {
            include('form.php');
        }
    ?>

    <!-- <?php 
        if (isset($sum)) {
            echo "Result: " . $sum;
        }
    ?> -->

</body>
</html>