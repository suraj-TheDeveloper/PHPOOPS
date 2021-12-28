<?php
    class Fruit {
        public $name;
        public $color;
        public $rate;

        public function __construct($name, $color, $rate) {
            $this->name = $name;
            $this->color = $color;
            $this->rate = $rate;
        }

        private function get_rate(){
            echo "The Rate is {$this->rate}";
        }

        public function get_name() {
            echo "The name is {$this->name}";
            $this->get_rate();
        }

        protected function get_color() {
            echo "The color is {$this->color}";
        }
    }
    class Strawberry extends Fruit {
        public function message() {
            echo "the message from fruits is";
            $this->get_color();
        }
    }

    $apple = new Strawberry("Apple", "Red", "22");
    $apple->get_name();
    $apple->message();

?>