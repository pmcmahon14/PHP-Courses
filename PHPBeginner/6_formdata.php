<?php

//POSITIONED HERE TO RUN FIRST AFTER SUBMISSION

if (isset($_POST['submit'])) {

    //echo "yes it works";

    //TEST ARRAY
    $name = array("Patrick", "Dawn", "Sierra", "Finn");
    //TEST CONDITIONS
    $minimum = 5;
    $maximum = 10;

//EXTRACT INFORMATION
    $username = $_POST['username'];
    $password = $_POST['password'];

//echo "Hello ". $username;
//echo "Your password is ". $password;

//VALIDATION

    if(strlen($username) < $minimum) {

        echo "Username has to be longer than 5.";

    }

    if(strlen($username) > $maximum) {

        echo "Username has to be shorter than 10.";

    }

    //TEST TO SEE IF INPUTS MATCH NAME ARRAY ABOVE

    if(!in_array($username, $name)) {
        echo "Sorry, you are not allowed to log in.";
    } else {
        echo "Welcome!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--<form action="6_formdata.php" method="post">-->
<form action="6_formprocess.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

</form>

</body>
</html>