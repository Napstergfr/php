
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $name = array('baldasda','chaldasd','holsdasd', 'Napster');
    if(strlen($username)<5){
        echo "Username should be more than 5 char!";
    }
    if(in_array($username, $name)){
        echo 'Hey Napster!';
    }else{
        echo 'YOu are a fucker';
    }

}


?>