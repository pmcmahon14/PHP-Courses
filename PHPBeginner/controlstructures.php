<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

//IF STATEMENTS

if (3 < 10){
echo 'three is less than 10';
} elseif (4 < 5) {
    echo 'of course four is less than five';
} else {
    echo 'it is not';
}

//COMPARISON AND LOGICAL OPERATORS

//SWITCH STATEMENTS

$number = 24;

switch () {
    case 34:
        echo 'it is 34';
        break;
    case 37:
        echo 'it is 37';
        break;
    case 24:
        echo 'it is 24';
        break;
    case 15:
        echo 'it is 15';
        break;
    default:
        echo "i can't find the number";
}

//WHILE LOOP

$i = 0;

while($i < 10){
    //echo "hello student";
    echo $1;
    $i++;
}

//FOR LOOP

for($counter = 0; $counter < 10; $counter++){
echo $counter . "<br>";
}

//FOR EACH - ARRAYS

$numbers = array(345,664,24,48,42,78);

foreach ($numbers as $number) {
echo $number . "<br>";
}

?>
</body>
</html>