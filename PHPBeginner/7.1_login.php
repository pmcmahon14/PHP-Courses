<?php


if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

//NOTE: FOR MAMP, PASSWORD IS ROOT!
    $connection = mysqli_init('localhost', 'root', 'root', 'loginapp');

    if($connection) {
        echo "We have a connection";
    } else {
        die("Database connection failed.");
    }






/*    if($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo 'no way';
    }
*/


}
?>
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 4/1/2018
 * Time: 12:04 PM
 */