<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 (even / odd checker)</title>
</head>

<body>
    <h2>Even Odd Checker</h2>
    <form method="post" action="">

        <label for="">Enter a number</label>
        <input type="number" name="number" required>
        <br>
        <br>

        <button type="submit">Check</button>
        <br>
        <br>
    </form>

    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num = $_POST["number"];


            if ($num%2 == 0) {
                echo "<h3>The number is even</h3>";
            } else {
                echo "<h3>The number is odd</h3>";
            }
        }
        ?>
    </div>
</body>



</html>