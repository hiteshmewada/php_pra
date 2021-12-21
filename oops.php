<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>
<body>
    <h1>This is about oops</h1>
    <h2>What is oops?</h2>
    <p>OOPs is about creating classes and objects. Class serves as a template and multiple objects can be created using a class.</p>
    <h2>What are classes and objects?</h2>
    <p>Classes are templates for creating objects </p>
    <p>If car is a class than audi maruti suzuki are objects.</p>
    <h2>Why OOPs?</h2>
    <p>OOPs make it easy to keep the code DRY</p>
    <p>DRY-DO NOT REPEAT YOURSELF.</p>

    <!-- // 77.PHP -->
    <?php
        class player{
            //properties
            public $nam;
            public $speed=5;
            public $run=false;
            //Methods
            function set_name($nam){
                $this->nam=$nam;
            }
            function get_name(){
                return $this->nam;
            }
            function run(){
                $this->run=true;
            }
            function stoprun(){
                $this->run=false;
            }
        }
        $player1=new player();
        $player1->set_name("Hitesh");
        echo "<h1> Classes Examples in OOPs</h1>";
        echo $player1->get_name();
        echo "<br>";
        echo $player1->speed;
        echo "<br>";
        // 78.php

        class Employee{
            public $name;
            public $sal;
            // Constructor - It allows to initialize objects. It is the code which is executed whenever a new object is instantiated.
            // function __construct(){
            //     echo "THis is my constructor of class employee";
            // }
            // Constructor with arguments
            function __construct($nam,$sal){
                    $this->name=$nam;
                    $this->sal=$sal;
            }
        }
        echo "New employee class is created<br>";
        $hit=new Employee("Hitesh",100000);
        echo "<br>";
        echo "The salary of Hitesh is $hit->sal";
        echo "<br>";

        // 79.php
        class Employee1{
            public $name;
            public $sal;
            // Constructor - It allows to initialize objects. It is the code which is executed whenever a new object is instantiated.
            // function __construct(){
            //     echo "THis is my constructor of class employee";
            // }
            // Constructor with arguments
            function __construct($nam,$sal){
                    $this->name=$nam;
                    $this->sal=$sal;
            }
            function __destruct()
            {
                echo "I am destructing $this->name";
            }
        }
        echo "New employee class is created<br>";
        $hit=new Employee1("Hitesh",100000);
        echo "<br>";
        echo "The salary of Hitesh is $hit->sal";
        echo "<br>";


    ?>
</body>
</html>