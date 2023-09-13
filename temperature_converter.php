<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>

<body>
    <h2>Temperature Conversion</h2>
    <form method="post" action="">

        <input type="number" name="number" required>
        <br>
        <br>
        <select name="operation" id="">
            <option value="celsius">Fahrenheit to Celsius</option>
            <option value="fahrenheit">Celsius to Fahrenheit</option>
        </select>
        <br>
        <br>
        <button type="submit">Convert </button>
        <br>
        <br>
    
    </form>

    <div>
        <?php
       if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num = $_POST["number"];
        $op = $_POST["operation"];

        switch($op){
            case "celsius":
                $result=($num-32)*5/9;
                echo "<h3> The temperature is: $result Celsius </h3> ";
                break;
            case "fahrenheit":
                // $result=($num-32)*5/9;
                $result=($num * 9/5) + 32;
                echo "<h3> The temperature is: $result Fahrenheit </h3> ";
                break;

            default:
            echo "Invalid number";


        }
       }
        ?>
    </div>
</body>



</html>