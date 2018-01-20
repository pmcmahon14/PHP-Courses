<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--embedding html into php and creating dynamic page-->
<!--set variable up using php, variable always starts with $-->

<?php
$title = "Hello World!";
?>

<!--use HTML element and embed PHP inside element to create page dynamically-->

<h1><?php echo $title; ?></h1>
</body>
</html>
