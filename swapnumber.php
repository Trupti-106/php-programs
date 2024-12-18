<?php
// Function to swap two numbers using call by value
function swapByValue($num1, $num2)
{
$temp = $num1;
$num1 = $num2;
$num2 = $temp;
echo "After swapping using call by value: num1 = $num1, num2 = $num2
<br>";
}
// Function to swap two numbers using call by reference
function swapByReference(&$num1, &$num2)
{
$temp = $num1;
$num1 = $num2;
$num2 = $temp;
echo "After swapping using call by reference: num1 = $num1, num2 =
$num2 <br>";
}
// Initial values
$a = 5;
$b = 10;
echo "Before swapping: num1 = $a, num2 = $b <br>";
// Call by value
swapByValue($a, $b);
// Reset values for call by reference
$a = 5;
$b = 10;
// Call b
// Call by reference
swapByReference($a, $b);
echo "After function calls: num1 = $a, num2 = $b <br>";
?>