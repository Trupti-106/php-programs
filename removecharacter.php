<!DOCTYPE html>
<html>
<body>
<h2>Enter String</h2>
<form method="post">
<label for="str">String:</label><br>
<input type="text" name="str"><br><br>
<input type="submit" value="Submit"><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["str"]))
{
$inputStr = $_POST["str"];
$pattern = '/[^a-zA-Z0-9\s]/';
$Output = preg_replace($pattern, '', $inputStr);
echo "Original String: $inputStr <br>";
echo "Cleaned String: $Output";
}
?>
</body>
</html>
