<?php
function calculateTotalPrice($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$total = calculateTotalPrice($items);
echo "Total price: $" . $total;
function modifyString($string)
{
    $string = str_replace(' ', '', $string);
    $string = strtolower($string);

    return $string;
}
$string = "This is a poorly written program with little
structure and readability.";
$modifiedString = modifyString($string);
echo "\nModified string: " . $modifiedString;
function checkEvenOrOdd($number)
{
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}
$number = 51;
$numberType = checkEvenOrOdd($number);
echo "\nThe number " . $number . " is " . $numberType . ".";