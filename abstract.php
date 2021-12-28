<?php
    abstract class Fruit {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function getname();
    }
    class Apple extends Fruit {
        public function getname(){
            echo "This fruit name is {$this->name}";
        }
    }
    class Bananna extends Fruit {
        public function getname(){
            echo "This fruit name is {$this->name}";
        }
    }
    $apple = new Apple("Apple");
    $apple->getname();
    $bananna = new Bananna("Bananna");
    $bananna->getname();
?>