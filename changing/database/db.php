<?php
    global $con;
    $con = mysqli_connect('localhost', 'root', '', 'changeing');
    if (!$con){
        die(mysqli_error());
    }