<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct()
        {
            echo "The fruit name is {$this->name} and the fruit color is {$this->color}";
        }
    }

    $apple = new Fruit("Apple", "Red");
?>