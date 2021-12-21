<?php

// use Employee1 as GlobalEmployee1;

// use Employee1 as GlobalEmployee1;

echo "Hello World";
echo "<br>";
   // access modifiers
// 1. Public can be accessed from anywhere
// 2. Private can be accessed from within the class
// 3. protected - can be accessed from within class and from derived class
    // by default methods and properties are public
    //Private properties and methods can only be accessed by other member functions of class
    // 
    class Employee{
       private $name="Hitesh";
        function showname(){
            echo "$this->name";
        }
    }
    $hit=new Employee();
    // echo $hit->name; this will not work if hit is private
    $hit->showname();
    echo "<br>";

    // 81.php

    echo "What is Inheritance?";
    echo "<br>";
    class Employee1{
        public $name="Hitesh";
        private $sal=12000;
        private $grade=3;
         function showname(){
             echo "The name of this employee is $this->name";
             echo "<br>";
         }
         function setSalary($sal){
             $this->sal=$sal;
         }
         function getSalary(){
            echo "The Salary of $this->name is $this->sal";
            echo "<br>";
        }
     }
     // Inheriting a new class programmer from employee
     class Programmer extends Employee1{
        private $lang="Python";
        function changeLang($lang){
            $this->lang=$lang;
            // echo $this->grade; -- > This will throw an error because grade is private in parent class.
        }
     }
     $rohan=new Employee1();
     $rohan->name="HItesh";
     $rohan->showname();
     $rohan->getSalary();
     $rohan->setSalary(1000);
     $rohan->getSalary();

     $geeta=new Programmer();
     $geeta->name="Geeta";
     $geeta->changeLang("Php");
     $geeta->showname();
     $geeta->getSalary();
     $geeta->setSalary(1000000);
     $geeta->getSalary();

     // 82.php

     class Employee3{
         public $name;
         public $lang;
         public $sal;
         public function __construct($name,$sal,$lang){
             $this->name=$name;
             $this->lang=$lang;
            //  $this->sal=$sal;
             $this->describe();
         }
         protected function describe() 
         {
             echo "The name of employee is $this->name";
             echo "<br>";
            //  echo "The salary of employee is $this->sal";
            //  echo "<br>";
             echo "The language of employee is $this->lang";
             echo "<br>";
         }
     }
     class Coder{
        
        
        public $sal;
        public function __construct($name,$sal,$lang){
            $this->name=$name;
            $this->lang=$lang;
            $this->sal=$sal;
            $this->describe();
        }
        protected function describe() 
        {
            echo "The name of employee is $this->name";
            echo "<br>";
            echo "The salary of employee is $this->sal";
            echo "<br>";
            echo "The language of employee is $this->lang";
            echo "<br>";
        }
    }
     $hit=new Employee3("Hitesh",3,"Php");
    //  $hit->describe();
    $rak=new Coder("Rakesh",12,"Python");
