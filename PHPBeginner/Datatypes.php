<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

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
echo "<br>"

?>

<!--ARRAYS-->

<?php

echo "<h3>Arrays</h3>";

$numberList =
    array(24, 37, 63, 354, 677, '5345', 345, '<h1>Hello world!</h1>');

echo $numberList[0];

echo "<br>"

?>

<!--ASSOCIATIVE ARRAYS-->

<?php

echo "<h3>Associative Arrays</h3>";

$number = array('Dawn', 'Finn', 'Sierra');

//print_r($number);

echo "<br>";

$names = array("first_name" => "Patrick", "last_name" => "McMahon");

//print_r ($names);

//INVOLVES KEY VALUE

echo $names['first_name'] . " " . $names['last_name'];

?>
</body>
</html>
