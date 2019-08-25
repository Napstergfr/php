<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];

   $con = mysqli_connect('localhost', 'root', '', 'changeing');
   if ($con){
       echo 'Wolla';
   }else{
       die('vodda');
   }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>	login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control">
                    <label for="pass">Password</label>
                    <input name="pass" type="password" class="form-control">
                    <br>
                    <input class="form-control btn btn-primary" type="submit" name="submit" value="login">
                </div>
            </form>
        </div>
    </div>
</div>


















</body>
</html>