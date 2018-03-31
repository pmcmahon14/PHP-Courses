<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

echo "<h3>Math Functions</h3>";
echo "<h4>Power</h4>";
echo pow(2,7);
echo "<h4>Random</h4>";
echo rand();
echo "<h4>Random with range</h4>";
echo rand(1, 1000);
echo "<h4>Square root</h4>";
echo sqrt(100);
echo "<h4>Ceiling</h4>";
echo ceil(4.6);
echo "<h4>Floor</h4>";
echo floor(4.6);
echo "<h4>Round</h4>";
echo round(4.5);
echo "<br>";
echo round(4.5);
echo "<br>";
echo "<h3>Strings</h3>";

$string = "Hello student how do you like the class?";

echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);
echo "<br>";

echo "<h3>Array Functions</h3>";
$list = [61,16,118,166846,1687,35];
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
sort ($list);
echo "<br>";
print_r($list);

?>

</body>
</html>
