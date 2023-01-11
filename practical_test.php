<?php
    //Artihmetical examples
        #Adding numbers
        $broj1 = 10;
        $broj2 = 12;
        $broj1 = $broj1 + $broj2;
        echo $broj1 . PHP_EOL; // 22
        #Subtract operation
        $broj1 = $broj1 - $broj1;
        echo $broj1 . PHP_EOL; // 0
        #Multiply operation
        $broj = 3;
        $broj1 = $broj * 8;
        echo $broj1 . PHP_EOL; // 24
        #Divide operation
        $broj2 = $broj1 / $broj;
        echo $broj2 . PHP_EOL; // 8
        #Modulus operation
        $broj = 5;
        $broj2 = $broj1 % $broj;
        echo $broj2 . PHP_EOL; // 4
        #Exponent operation
        $broj = ($broj ** 2);
        echo $broj;
    //Conditional operators
        #Ternary operator
        echo $x = (true) ? "PASSED\n" : "NOT PASSED\n";
        #Null coalescing operator
        echo $x = $y ?? "He didn't do homework\n";
        echo PHP_EOL;
    //Comparison opeartors
        #equal (==) operator
        $x = 10;
        $z = "10";
        var_dump($x == $z);
        echo PHP_EOL;
        #indentical (===) operator
        var_dump($x === $z);
        echo PHP_EOL;
        #"Not Equal" (<> , !=) operators
        var_dump($x <> $z);
        echo PHP_EOL;
        #"Not indetical" (!==) operator
        var_dump($x !== $z);
        echo PHP_EOL;
        #greater than (>) and less than (<) operators
        $x = 9;
        var_dump($x < $z);
        echo PHP_EOL;
        #greater than or equal to (>=), less than or equal to (<=) operators
        var_dump($x >= $z);
        echo PHP_EOL;
    //Logical operators
        #AND && both
        $working = true;
        $working_now = false;
        echo ($workin and $working_now) ? "I'm working\n" : "I'm not working right now\n";
        #OR || both and one must be true
        $ressurected = true;
        $sinner = false;
        echo ($ressurected || $sinner) ? "JESUS NAZARENUS REX IUDAEORUM\n" : "Impossible\n";
        #XOR one must, but not both
        $sunce = true;
        $planeta = true;
        echo ($sunce xor $planeta) ? "Sunce naravno nije planeta\n" : "Sunce NIJE planeta\n";
        #! - not
        $jedan_smjer = true;
        echo (!$jedan_smjer  ) ? "Possible\n" : "Not possible\n";
    //Assignemnt operators
        #+= operator
        $broj = 1;
        echo $broj. PHP_EOL;
        $broj += 10;
        echo $broj . PHP_EOL;
        #-= operator
        $broj -= 9;
        echo $broj . PHP_EOL;
        #*= operator
        $broj *= $broj;
        echo $broj . PHP_EOL;
        #/= operator
        $broj /= 5;
        echo $broj . PHP_EOL;
        #Modulus operator
        $broj = 24;
        $broj %= 7;
        echo $broj . PHP_EOL;
        #string operator .=
        $arabia = "Seven Pillars of ";
        $arabia = "Wisdom\n";
        echo $arabia;
    //Increment and decrement operators
        #++
        echo ++$broj . PHP_EOL;
        #--
        $broj = $broj1--;
        echo $broj . PHP_EOL;
    //Bitwise operators 
        #& - both
        $cake = 2; //0010
        $drake = 3; //0011
        $make = $drake & $cake;
        echo $make . PHP_EOL;
        #| - one and both
        $make = $drake | $cake;
        echo $make . PHP_EOL;
        #^ - one but not both
        $make = $drake ^ $cake;
        echo $make . PHP_EOL;
        #~ - backflip
        echo ~$make. PHP_EOL;
    //Execution operators ``
        echo `dir`;
    //Error control operators
        $broj = 5;
        $broj %= 5;
        @$broj = $broj / $broj;
        echo $broj. PHP_EOL;
?>