<?php

//USING CRUD



//NOTE: FOR MAMP, PASSWORD IS ROOT!
/*$connection = mysqli_init('localhost', 'root', 'root', 'loginapp');

//WITH DATABASE.PHP, INCLUDE COMMAND REFERS

if($connection) {
    echo "We have a connection";
} else {
    die("Database connection failed.");
}*/

include "7.4_database.php";

//SQL COMMAND TO READ DATA
$query = "SELECT * FROM users";

echo $query;

//SQL QUERY TAKES TWO ARGUMENTS, FIRST THE CONNECTION TO DATABASE, THEN WHAT WE'RE SENDING
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query failed' . mysqli_error());
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
        <form action="7_mysqllogin.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">

            <div class="form-group">
                <select name="" id="">
                    <option value="">Id</option>
                </select>
            </div>
        </form>
    </div>
</div>

</body>
</html>
