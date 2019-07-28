<?php
    class User{
        public function __construct()
        {
           // echo 'Constructor called';
        }

        public function register(){
            echo 'User Registered!';
        }
        public function login($username, $password){
            $this->auth_user($username, $password);
        }
        public function auth_user($username, $password){

            echo $username. 'Is Now authenticate!';
        }

        public function __destruct()
        {
            //echo 'Destructor Called!';
        }
    }

    $User = new User;
    $User ->register();
    $User ->login('Napster', '1234');
