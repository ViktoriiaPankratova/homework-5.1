<?php

function areaofacircle(int $number1, int $power)
{$number1=3;
    $power=8;

    $area=$number1**$power*pi();
    echo $area;
}
echo areaofacircle(1,2).PHP_EOL;

$number=3;
$power=4;
function raisetoapower(int $number, int $power)
{

    $raisingToPower=$number**$power;
    echo $raisingToPower;
}
$number=fgets(STDIN);
$power=fgets(STDIN);
$resultPower= raisetoapower($number, $power);
echo "$resultPower\n";

$number=2;
function myFunction(int $number)
{
    $number2 = $number*2;
    return $number2;
}
$result=myFunction($number);
echo "Результат $result";
echo "Початкове число $number \n";

$number=2;
function myFunction1( &$number)
{
    $number2 = $number*2;

}
$result2=myFunction1($number2);

echo "Початкове число $number \n";
echo "Результат після повернення $result2 \n";