<?php
    $name = "Jojo";
    echo $name;
    echo "\n";
    echo "Hello my name is $name";
    $array = ["car", "boat", "plane"];
    echo $array[1];
    echo "I am " . $name;
    echo 11 <=> 10;
    echo "\n";
    $a = 170;
    if ($a >= 90 && $a <= 120) {
        echo "Good";
    } else if ($a <= 90) {
        echo "Too Little";
    } else {
        echo "Too Much";
    }
    echo "\n";
    $b = 101;
    echo $b % 2 === 0 ? "Nice" : "Bad";
    echo "\n";
    $int = -13142;
    switch (true) {
        case ($int > 0):
            echo "Good number";
            break;
        case ($int < 0):
            echo "Bad number";
            break;
        default:
            echo "Null Void";
            break;
    }
    for ($i = 5; $i >= 1; $i--) {
        echo "It has been $i seconds \n";
    }
    $g = 2;
    while ($g <= 10) {
        echo "Give me $g more! \n";
        $g++;
    }
    $f = 11;
    do {
        echo "hello \n";
    } while ($f <= 10);
    $array2 = [213,135,235,908];
    foreach ($array2 as $john) {
        echo "Winning numbers are \n" . ($john * 2);
    }
    function check($a)  {
        return ($a % 2);
    }
    echo check(89);
?>