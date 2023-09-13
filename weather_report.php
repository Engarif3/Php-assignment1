<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>

<body>
    <h2>Weather report</h2>
    <form method="post" action="">

        <input type="number" name="number" required>
        <br>
        <br>
        <select name="operation" id="">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <br>
        <br>
        <button type="submit">Weather Status </button>
        <br>
        <br>
    
    </form>

    <div>
        <?php
       if($_SERVER['REQUEST_METHOD'] == "POST"){
        $temp = $_POST["number"];
        $op = $_POST["operation"];

        switch($op){
            case "celsius":
                if($temp >= 32){
                echo "<h3> It's warm.</h3> ";
                } elseif($temp <32 && $temp >= 15){
                    echo "<h3> It's Cool.</h3> ";       
                } else{
                    echo "<h3> It's freezing.</h3> "; 
                }
                break;
            case "fahrenheit":
                if($temp >= 90){
                    echo "<h3> It's warm.</h3> ";
                    } elseif($temp <90 && $temp >= 60){
                        echo "<h3> It's Cool.</h3> ";       
                    } else{
                        echo "<h3> It's freezing.</h3> "; 
                    }
                    break;

            default:
            echo "Invalid number";


        }
       }
        ?>
    </div>
</body>



</html>