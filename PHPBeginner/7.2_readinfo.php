<?php

//USING CRUD



//NOTE: FOR MAMP, PASSWORD IS ROOT!
$connection = mysqli_init('localhost', 'root', 'root', 'loginapp');

if($connection) {
    echo "We have a connection";
} else {
    die("Database connection failed.");
}



//SQL COMMAND TO READ DATA
$query = "SELECT * FROM users";

//SQL QUERY TAKES TWO ARGUMENTS, FIRST THE CONNECTION TO DATABASE, THEN WHAT WE'RE SENDING
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query failed' . mysqli_error());
}








}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<div class="container">
    <div class="col-xs-6">

        <?php

        while ($row = mysqli_fetch_row($result)) {
            print_r($row)
        }

        ?>

    </div>
</div>

</body>
</html>
