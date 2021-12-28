<?php
    class Message {
        const LEAVING = "Hi I am leaving";
        const INFORM = "Hi i am inform";

        public function bye(){
            echo self::INFORM;
        }
    }

    $message = new Message();
    $message->bye();
    echo Message::LEAVING;
?>