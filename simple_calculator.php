<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">

        <input type="number" name="number1" required>
        <br>
        <br>
        <input type="number" name="number2" required>
        <br>
        <br>
        <select name="operation" id="">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="division">Division</option>
            <option value="multiplication">Multiplication</option>
        </select>
        <br>
        <br>
        <button type="submit">Calculate</button>
        <br>
        <br>
    
    </form>

    <div>
        <?php
       if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $op = $_POST["operation"];

        switch($op){
            case "addition":
                $result = $num1+$num2;
                echo "<h3>$result</h3>";
                break;
            case "subtraction":
                $result = $num1-$num2;
                echo "<h3>$result</h3>";
                break;
            case "multiplication":
                $result = $num1*$num2;
                echo "<h3>$result</h3>";
                break;
            case "division":
                $result = $num1/$num2;
                echo "<h3>$result</h3>";
                break;
            

            default:
            echo "Invalid number";

        }
       }
        ?>
    </div>
</body>



</html>