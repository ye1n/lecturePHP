<?php
    class human {
        public $name;
        public $hobbies = [];

        // // setter
        // public function setHobby(String $hobby){
        //     $this->hobbies[] = $hobby;
        // }

        // public function setName(String $name){
        //     $this->name[] = $name;
        // }

        // //getter
        // public function hasHobby(String $hobby){
        //     return in_array($hobby, $this->hobbies);
        // }

        //---------------------------------------

        // 생성자
        public function __construct($name,$hobbies)
        {
            $this -> hobbies = $hobbies;
            $this -> name = $name;
        }

    }