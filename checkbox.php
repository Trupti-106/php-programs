<!DOCTYPE html>
<html>
<body>
<h2>Favourite color</h2>
<form method="post">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br><br>
<label >Choose colors:</label><br>
<label><input type="checkbox" name="color[]"
value="red">Red</label>
<label><input type="checkbox" name="color[]"
value="yellow">yellow</label>
<label><input type="checkbox" name="color[]"
value="blue">blue</label><br><br>
<input type="submit" value="Submit"><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["color"]))
{
$name=$_POST['name'];
$selectedColors = $_POST["color"];
$colorsString = implode(', ', $selectedColors);
echo "$name's Favorite Colors: $colorsString";
}
?>
</body>
</html>
