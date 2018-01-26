<?php

if (isset($_POST['submit'])) {
echo 'yes it works';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="formdata.php" method="post">
    <input type="text" placeholder="Enter Username">
    <input type="password" placeholder="Enter Password">
    <input type="submit" name="submit">

</form>

</body>
</html>