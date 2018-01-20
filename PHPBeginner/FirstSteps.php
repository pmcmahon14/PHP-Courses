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

<!--MATH OPERATIONS-->

<?php

echo 56 + 45;
echo "<br>";
echo 56 - 45;
echo "<br>";
echo 56 * 45;
echo "<br>";
echo 56 / 45;
echo "<br>";
echo "<br>";
echo 45 + 53 + 46 / 124 - 66;
echo "<br>";
echo 5 + 5 * 10;

?>
</body>
</html>
