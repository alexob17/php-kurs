
<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <?php
    include 'File.php';
    for ($num = 1; $num <= mynumber\MAX_NUMBER; $num++){
        if($num%2 == 0){
            echo "Even number: $num\n";
        }
        else{
            echo "Odd number: $num\n";
        }
    }



    ?>
</body>
</html>

