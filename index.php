<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php testing embedded</title>
</head>

<body>


</body>

<?php



$greetings = <<<start
asdasdasdasd
asdasdasd
asdasd <br/>
start;


echo $greetings;

$x = 0;
$calcu = $x++ + 1;
echo $calcu;



$str1 = "hello ";
$str2 = "world <br/>";
echo $str1 . $str2 ;


$cars = ["volvo", "toyota"];


array_push($cars, "hello");

$count = count($cars);

echo $cars[$count - 1];

?>

</html>