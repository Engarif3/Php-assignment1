<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>

<body>
    <h2>Comparison Tool</h2>
    <form method="post" action="">

        <label for="">Enter number 1</label>
        <input type="number" name="number1" required>
        <br>
        <br>

        <label for="">Enter number 2</label>
        <input type="number" name="number2" required>
        <br>
        <br>

        <button type="submit">Check</button>
        <br>
        <br>
    </form>

    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];

            echo "The larger number is: " .($num1>$num2?"$num1":"$num2");
        }
        ?>
    </div>
</body>



</html>