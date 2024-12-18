<!DOCTYPE html>
<html>
<body>
<h2>Enter Value:</h2>
<form method="post">
<label for="percentage">Percentage:</label><br>
<input type="text" name="pr"><br><br>
<input type="submit" value="Submit"><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["pr"]))
{
$percentage = $_POST["pr"];
if ($percentage < 40)
{ $grade = "Fail"; }
elseif ($percentage >= 40 && $percentage <= 50) 
{ $grade = "Pass Class"; }
elseif ($percentage > 50 && $percentage <= 60)
{ $grade = "Higher Second Class"; }
elseif ($percentage > 60 && $percentage <= 70)
{ $grade = "First Class"; }
elseif ($percentage > 70 && $percentage <= 100)
{ $grade = "First Class with Distinction"; }
else
{ echo "Invalid Percent"; }
echo "Percentage: $percentage%<br>Grade: $grade";
}
?>
</body>
</html>
