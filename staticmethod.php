<?php
    class Fruit {
        public static function get_name(){
            echo "Fruit name is Apple";
        }

        public function __construct(){
            self::get_name();
        }
    }
    // new Fruit();
    // Fruit::get_name();
?>