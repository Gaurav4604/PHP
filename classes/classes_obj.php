<?php
    class Car{
        static $type = "Car";
        private $engine = 2000;
        protected $doors = 4;
        public $wheels;

        function __construct(){
            echo "Inside constructor" . "<br>";
        }

        public function start(){
            echo "vrroom" . "<br>";
        }
        function set_wheels(){
            $this -> wheels = 4;
        }
    }

    $bmw = new Car();
    $bmw -> start();

    class BMW extends Car {
        function start(){
            echo parent::start() . "<br>";
            echo $this->doors . "<br>";
        }
    }
    $we = new BMW();
    $we -> start();
    echo Car::$type;
?>