<?php 
    echo "Hello World!";
    echo "<h1>H1 inside PHP</h1>";

    $name = "Gaurav";
    $num = 10;

    echo $name . "<br>";
    // concatination
    echo $name . $num . "<br>";

    // arrays
    $numList = array(23, 10, 'hello', 10.4); // array can store any datatype
    $numListNew = [1, 2, 3, 4];

    echo $numList[3] . "<br>";
    
    // printing all of array
    print_r($numList);
    echo "<br>";
    // making the array more like a map
    $nameList = array("firstname" => "Gaurav", "lastname" => "Singh");
    print_r($nameList);
    echo "<br>" . "Hello! " . $nameList["firstname"];
    
    // conditionals
    if (4 < 4){
        echo "<br>" . "It is true";
    }
    elseif(4 != 5){
        echo "<br>" . "Wtf";
    }
    else{
        echo "<br>" . "bruh";
    }
    
    // switch case
    $name = "bleh";
    switch ($name){
        case "Bruh":
            echo "<br>" . "Hi $name";
            break;
        case "Gaurav":
            echo "<br>" . "Oh its you again";
            break;
        default:
            echo "<br>" . "Eh, you new here?";
    }

    // loops
    $counter = 0;
    while($counter < 10){
        echo "<br>" . "I'm printing because I'm less than 10";
        $counter++;
    }
    echo "<br>";
    for($iter = 0;$iter < 5; $iter++){
        echo "lalala $iter" . "<br>";
    }
    foreach($numList as $num){
        echo "finally iterating $num" . "<br>";
    }

    // functions 
    function do_something() {
        echo "I do nothing" . "<br>";
    }
    do_something();

    function greeting($name) {
        echo "Hello There, $name" . "<br>";
    }
    greeting("Gaurav");
    
    function returner($num1, $num2){
        return ($num1 + $num2);
    }
    $value = returner(10, 12);
    echo $value . "<br>";

    // scope in PHP
    $x = "outside";
    function scope_extract(){
        global $x; // now if we use x, it will be changed in global scope
        $x = "inside";
    }
    echo $x . "<br>";
    scope_extract();
    echo $x . "<br>";

    // defining constants in php
    define("Name", "Gaurav");

    echo Name . "<br>";
    // or
    const NAME = "Gaurav";
    echo NAME . "<br>";
?>