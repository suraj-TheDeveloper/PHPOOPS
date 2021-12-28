<?php
    trait Animal {
        public function msg()
        {
            echo "Hi this is me";
        }
    }

    trait Mamals {
        public function message(){
            echo "This is whale";
        }
    }

    class Animals {
        use Animal, Mamals;
    }

    $obj = new Animals();
    $obj->msg();
    $obj->message();
?>