<?php

//NOTE: FOR MAMP, PASSWORD IS ROOT!
$connection = mysqli_init('localhost', 'root', 'root', 'loginapp');

if($connection) {
echo "We have a connection";
} else {
die("Database connection failed.");
}

?>