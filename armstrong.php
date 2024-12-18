<!DOCTYPE html>
<html>
<body>
<h2>Enter Number</h2>
<form method="post">
<label for="num">Number to check:</label><br>
<input type="text" name="num"><br><br>
<input type="submit" value="Submit"><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
function isArmstrong($number)
{
$sum = 0;
$temp = $number;
while ($temp != 0)
{
$digit = $temp % 10;
$sum += $digit *$digit * $digit;
$temp = ($temp / 10);
}
if ($sum == $number)
{
echo "Number is armstrong.";
}
else
{
    echo "Number is  not armstrong.";
    }
    }
    $number= $_POST['num'];
    isArmstrong($number);
    }
    ?>
</body>
</html>
    