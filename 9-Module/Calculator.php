<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Easy Table Calculator</h1>
    <?php
        $op = "*";
        $num1 = 10;
        $num2 = 9;
        switch ($op){
            case "+":
                $res = $num1 + $num2;
                break;
            case "-":
                $res = $num1 - $num2;
                break;
            case "*":
                $res = $num1 * $num2;
                break;
            case "/":
                $res = $num1 / $num2;
                break;
            default: 
                echo "ERROR\n";
                break;
        }
        echo $res . PHP_EOL;
    ?>


</body>
</html>


