
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

echo "{$cars[$count - 1]} <br>";

foreach($cars as $key => $car){
    echo "$car = $key <br/>";
}

?>