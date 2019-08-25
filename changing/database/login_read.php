<?php


$con = mysqli_connect('localhost', 'root', '', 'changeing');
if ($con){
    echo 'Wolla';
}else{
    die('vodda');
}
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
if (!$result){
    die("Shut the fuck up". mysqli_error());
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
        <?php
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="col-lg-6">

                    <pre>
                    <?php
                    print_r($row);
                    ?>
                    </pre>

        </div>
            <?php
        }

        ?>
    </div>
</div>


















</body>
</html>