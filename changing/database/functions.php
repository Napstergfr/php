<?php
function create(){
    global $con;
    $username = $_POST['username'];
    $password = $_POST['pass'];


    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($con, $query);
    if (!$result){
        die("Shut the fuck up". mysqli_error());
    }
}

function showData(){
    global $con;
    $query = "SELECT * FROM users";

    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateData(){
    global $con;
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $id = $_POST['id'];
        $query = " UPDATE users SET ";
        $query .= " username = '$username' ";
        $query .= ", password = '$password' ";
        $query .= " WHERE id = $id ";
        $result = mysqli_query($con, $query);
        if (!$result){
            die("Shut the fuck up". mysqli_error());
        }

}
function deleteData(){
    global $con;

    $id = $_POST['id'];
    $query = " DELETE FROM users";
    $query .= " WHERE id = $id ";
    $result = mysqli_query($con, $query);
    if (!$result){
        die("Shut the fuck up". mysqli_error());
    }

}