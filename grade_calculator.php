<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>

<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">

        <label for="">Enter the marks</label>
        <input type="number" name="number1" required>
        <br>
        <br>

        <label for="">Enter the marks</label>
        <input type="number" name="number2" required>
        <br>
        <br>

        <label for="">Enter the marks</label>
        <input type="number" name="number3" required>
        <br>
        <br>
        <button type="submit">Average</button>
        <br>
        <br>
    </form>

    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];
            $num3 = $_POST["number3"];
            $average = ($num1 + $num2 + $num3) / 3;

            if ($average >= 80 && $average <= 100) {
                echo "<h3>Your obtained grade is: A</h3>";
            } elseif ($average >= 70 && $average < 80) {
                echo "<h3>Your obtained grade is: B</h3>";
            } elseif ($average >= 60 && $average < 70) {
                echo "<h3>Your obtained grade is: C</h3>";
            } elseif ($average >= 50 && $average < 60) {
                echo "<h3>Your obtained grade is: D</h3>";
            } else {
                echo "<h3>Your obtained grade is: F</h3>";
            }
        }
        ?>
    </div>
</body>



</html>