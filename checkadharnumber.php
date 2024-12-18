<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>
<h2> Form</h2>
<form method="POST" action="">
<label for="aadhar">aadhar:</label>
<input type="text" id="aadhar" name="aadhar" required><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
// Define a function to validate Aadhar Card number
function validateAadhar($aadharNumber) {
// Regular expression pattern for Aadhar Card number
$pattern = '/^(?!0|1)\d{4}\s\d{4}\s\d{4}$/'; // Assuming Aadhar Card
//format is XXXX XXXX XXXX
// Check if the Aadhar number matches the pattern
if (preg_match($pattern, $aadharNumber)) {
echo "Valid Aadhar Card Number.";
} else {
echo "Invalid Aadhar Card Number. Please enter a valid Aadhar Card
Number in the format XXXX XXXX XXXX.";
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$aadharNumber = $_POST["aadhar"]; // Enter the Aadhar Card number here
validateAadhar($aadharNumber);
}
?>