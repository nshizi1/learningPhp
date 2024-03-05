<?php


    // ABout JSON format
    // header("Content-Type: application/json");
    // $array = array("rice", "milk", "juice", "beans");
    // $array = array(
    //     "success" => true,
    //     "message" => "Hello World"
    // );
    // $array = array(
    //     array(
    //         "id" => 1,
    //         "name" => "Wilson Nshizirungu"
    //     ),
    //     array(
    //         "id" => 2,
    //         "name" => "Shema Christian"
    //     ),
    //     array(
    //         "id" => 3,
    //         "name" => "Ineza Carine"
    //     ),
    //     array(
    //         "id" => 4,
    //         "name" => "Nshuti Lancelot"
    //     ),
    // );
    // $products = json_encode($array, JSON_PRETTY_PRINT);
    // echo $products;

    // PHP patterns

    // for($i = 1; $i<=5; $i++){
    //         echo $i." ";
    // }

    // $colors = array("red", "blue", "green", "yellow","pink", "purple");

    // foreach($colors as $color){
    //     echo $color."</br>";
    // }

    // multiplication table from 1 to 5 (1x1 to 5x5)

    // creating a table
    // echo "<table border='1'>";
    // for($i = 1; $i<=5; $i++){
    //     echo "<tr>";
    //     for($j = 1; $j <=5; $j++){
    //         echo "<td> $i x $j=".$i*$j."</td>";
    //     }
    //     echo "</tr>";
    // }
    // echo "</table>";

    // loop even numbers from 2 to 20;

    // for($i = 1; $i <= 20; $i++){
    //     if($i % 2 == 0){
    //         echo $i." ";
    //     }
    // }

    // loop associative array

    // $person = array(
    //     "name" => "Wilson",
    //     "age" => 25,
    //     "city" => "Nshizirungu"
    // );

    // foreach($person as $key => $value){
    //     echo $key .": ".$value."<br>";
    // }

    // Write a for loop to iterate through an indexed array and print both the index and the value on separate lines.
    // $person = array(
    //     "name" => "Wilson",
    //     "age" => 25,
    //     "city" => "Nshizirungu"
    // );
    // echo $person["name"];
    // for($i = 0; $i<= count($person); $i++){
    //     echo $i; //outputs 123
    // }

    // Create a loop to iterate through the characters of a string and print each character on a new line.
    // $string = "Hello World";
    // echo $string[6]; //outputs W
    // for($i = 0; $i<strlen($string); $i++){
    //     echo $string[$i]." ";
    // }

    // Use a do-while loop to generate random numbers between 1 and 10 until a number greater than 8 is obtained.
    // do{
    //     echo rand(1,10);
    // }while(rand(1,10) <= 8);

    // Fibonacci from 1 to 10;
    // $n = 10;
    // $a = 0;
    // $b = 1;
    // for($i = 1; $i<=10;$i++){
    //     $c = $a+$b;
    //     $a=$b;
    //     $b=$c;
    //     echo $c." "; //fibonacci of first 10 elements
    //     if($c<=10){
    //         echo $c." "; //fibonacci of elements below 10
    //     }
    // }

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
    // $a = 6;
    // $fact = 1;
    // for($i = 1; $i<=$a;$i++){
    //     $fact *=$i;
    // }
    // echo $fact;
    // palindrome
