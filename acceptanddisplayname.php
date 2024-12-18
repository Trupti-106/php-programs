<!DOCTYPE html>
<html>
<body>
<h2>Enter Your Name</h2>
<form method="post">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br><br>
<input type="submit" value="Submit">
</form>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve the name from the form
$name = $_POST['name'];
// Display the name using PHP echo
echo "<h2>Hello, $name!</h2>";
}
?>
</body>
</html>