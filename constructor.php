<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_color(){
            return $this->color;
        }

        function get_name(){
            return $this->name;
        }
    }

    $apple = new Fruit("Apple", "Red");
    echo "Fruit color is ", $apple->get_color();
    echo "Fruit name is", $apple->get_name();

?>