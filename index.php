<?php


    // ABout JSON format
    header("Content-Type: application/json");
    $array = array("rice", "milk", "juice", "beans");
    $array = array(
        "success" => true,
        "message" => "Hello World"
    );
    $array = array(
        array(
            "id" => 1,
            "name" => "Wilson Nshizirungu"
        ),
        array(
            "id" => 2,
            "name" => "Shema Christian"
        ),
        array(
            "id" => 3,
            "name" => "Ineza Carine"
        ),
        array(
            "id" => 4,
            "name" => "Nshuti Lancelot"
        ),
    );
    $products = json_encode($array, JSON_PRETTY_PRINT);
    echo $products;

    // PHP patterns

    for($i = 1; $i<=5; $i++){
            echo $i." ";
    }

    $colors = array("red", "blue", "green", "yellow","pink", "purple");

    foreach($colors as $color){
        echo $color."</br>";
    }

    // multiplication table from 1 to 5 (1x1 to 5x5)

    // creating a table
    echo "<table border='1'>";
    for($i = 1; $i<=5; $i++){
        echo "<tr>";
        for($j = 1; $j <=5; $j++){
            echo "<td> $i x $j=".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // loop even numbers from 2 to 20;

    for($i = 1; $i <= 20; $i++){
        if($i % 2 == 0){
            echo $i." ";
        }
    }

    // loop associative array

    $person = array(
        "name" => "Wilson",
        "age" => 25,
        "city" => "Nshizirungu"
    );

    foreach($person as $key => $value){
        echo $key .": ".$value."<br>";
    }

    // Write a for loop to iterate through an indexed array and print both the index and the value on separate lines.
    $person = array(
        "name" => "Wilson",
        "age" => 25,
        "city" => "Nshizirungu"
    );
    echo $person["name"];
    for($i = 0; $i<= count($person); $i++){
        echo $i; //outputs 123
    }

    // Create a loop to iterate through the characters of a string and print each character on a new line.
    $string = "Hello World";
    echo $string[6]; //outputs W
    for($i = 0; $i<strlen($string); $i++){
        echo $string[$i]." ";
    }

    // Use a do-while loop to generate random numbers between 1 and 10 until a number greater than 8 is obtained.
    do{
        echo rand(1,10);
    }while(rand(1,10) <= 8);

    // Fibonacci from 1 to 10;
    $n = 10;
    $a = 0;
    $b = 1;
    for($i = 1; $i<=10;$i++){
        $c = $a+$b;
        $a=$b;
        $b=$c;
        echo $c." "; //fibonacci of first 10 elements
        if($c<=10){
            echo $c." "; //fibonacci of elements below 10
        }
    }

    // prime numbers ex: 2, 3, 5, 7, 11, 13, 17, 19................................................................

    $count = 0;
    $num = 2;

    while ($count < 15) {
        $isPrime = true;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $num . " ";
            $count++;
        }
        $num++;
    }

    // factorial of a number
    $a = 6;
    $fact = 1;
    for($i = 1; $i<=$a;$i++){
        $fact *=$i;
    }
    echo $fact;

    // palindrome   //check if the number or text is same as its reverse

    $a = 'lorem';
    if($a == strrev($a)){
        echo "palindrome";
    }else{
        echo "not palindrome";
    }


    // php patterns
    for($i = 1; $i <=5; $i++){
        for($j = 1; $j<=5; $j++){
            if($i % 2 ===  0){
                echo " *";
            }else{
                echo "* ";
            }
        }
        echo "<br>";
    }

    for($i = 1; $i <=5; $i++){
        for($j = 1; $j<=$i; $j++){
            echo $j." ";
        }
        echo "<br>";
    }
    for($i = 5; $i >=1; $i--){
        for($j = $i; $j>=1; $j--){
            echo $j." ";
        }
        echo "<br>";
    }

    for ($i = 1; $i <= 5; $i++) {
        for($j = 5; $j>=$i; $j--){
            echo $j;
        }
        echo "<br>";
    }



    $name = NULL ?? "Wilson";
    echo $name;
    $isAdmin = true;
    echo ($isAdmin ?? false) ? 'Administrator' : 'User';
    $number = 15;
    echo ($number>10) ? "Number is greater than 10" : "Number is less than 10";


    // defining a constant
    define('name', "Wilson");
    echo name; //outputs Wilson

    define ('a', 10);
    define ('b', 15);
    echo a+b; //outputs 25

    // Operators in PHP:
    // 1. arithmetic: +-/%*
    // 2. assignment: = -= += *= %= /=
    // 3. comparison: == === != !== < <= > >= 
    // 4. logical: && || ! xor
    // 5. string: .
    // 6. operational: ?:
    // 7. null coalescing: ?? //example:
    $name = $_GET['name'] ?? "Guest";
    echo $name; // outputs guest
    // 8. increment/decrement: -- ++

    // xor vs or operators examples:
    $a = true;
    $b = false;

    $result1 = $a xor $b;  // exclusive OR
    $result2 = $a or $b;   // regular OR

    echo "Result using xor: " . ($result1 ? 'true' : 'false') . "\n";
    echo "Result using or: " . ($result2 ? 'true' : 'false') . "\n";


    // Arrays
    // 1. indexed/numerical, associative, multi-dimensional

    // 1. numerical
    $names = array("Queen","Prince","Kevin","Wilson");
    echo $names[2]; // Kevin
    foreach($names as $name){
        echo $name." "; //all names
    }
    echo count($names); //4
    // displaying using for loop
    $arrLgth = count($names);
    for($i = 0;$i< $arrLgth;$i++){
        echo $names[$i]." ";
    }

    // 2. associative
    $person = array(
        "name" => "Wilson Nshizirungu",
        "age" => 18,
        "address" => "Kicukiro"
    );
    foreach($person as $key => $value){
        echo $key.": ".$value."<br>";
    }
    var_dump($person); //array. returns the datatype of a variable

    // 3. multidimensional(by index or by key & value)
    // 3.1 by index
    $students = array(
        array(
            "name" => "Wilson Nshizirungu",
            "class" => "Level 4 Networking",
            "Marks" => 80
        ),
        array(
            "name" => "Ishimwe Prince",
            "class" => "Level 5 Software Development",
            "Marks" => 89
        ),
        array(
            "name" => "Umwali Queen",
            "class" => "Level 3 Multimedia",
            "Marks" => 75
        )
    );

    foreach($students as $student){
        foreach($student as $key => $value){
            echo $key.": ".$value.".<br>";
        }
        echo "<br><br>";
    }

    // 3.2 by key and value
    $marks = array(
        "Database" => array(
            "Wilson" => 70,
            "Queen" => 80,
            "Prince" => 68
        ),
        "Website" => array(
            "Wilson" => 89,
            "Queen" => 71,
            "Prince" => 85
        ),
        "Integration" => array(
            "Wilson" => 85,
            "Queen" => 88,
            "Prince" => 90
        )
    );
    foreach($marks as $subject => $student){
        echo $subject."<br>";
        foreach($student as $name => $value){
            echo $name.": ".$value.".<br>";
        }
        echo "<br>";
    }


    // Conditional and iterative statements
    // 1. conditional if, if-else ,if-else-if-else, nested if, switch case
    $a = 15;
    if($a > 10){
        echo "Number is greater than 10";
    }

    $a = 5;
    if($a > 10){
        echo "Number is greater than 10";
    }else{
        echo "Number is less than 10";
    }

    $a = 10;
    if($a == 10){
        echo "Number is equal to 10";
    }else if($a < 10){
        echo "Number is less than 10";
    }else{
        echo "Number is greater than 10";
    }

    $a = 20;
    if($a>0){
        if($a % 2 ==0){
            echo "Number is positive and divisible by 2";
        }else{
            echo "Number is positive but not divisible by 2";
        }
    }else{
        echo "Number is negative";
    }

    $a = !NULL;
    switch($a){
        case !NULL:
            echo "Variable a is not null";
            break;
        case NULL:
            echo "Variable a is null";
            break;
        default:
            echo "Unknown value of variable a";
    }

    // 2. iterative statements: for, while, do-while, foreach
    for($a = 1; $a <= 5; $a++){
        echo $a." ";
    }
    $a = 1;
    while($a <= 5){
        echo $a." ";
        $a++;
    }
    $a = 1;
    do{
        echo $a." ";
        $a++;
    }while($a <= 5);
    $numbers = array(1, 4, 2, 6);
    foreach($numbers as $number){
        echo $number." ";
    }