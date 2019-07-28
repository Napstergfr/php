<?php
    class User{
        public  $id = 33;
        public $username;
        public $email;
        public $password;
        public function __construct($username, $password)
        {
            $this->username =$username;
            $this->password =$password;
        }

        public function register(){
            echo 'User Registered!';
        }
        public function login(){

            $this->auth_user();
        }
        public function auth_user(){

            //echo $this->password. 'Is authenticated';
        }

        public function __destruct()
        {
            //echo 'Destructor Called!';
        }
    }

    $User = new User('Napster', '1241');
    //$User ->register();
   // $User ->login();
    echo $User->username;