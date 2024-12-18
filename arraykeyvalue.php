<!DOCTYPE html>
<html>
<body><pre>
<?php
$Country_name = array("India" => "Delhi","Japan" => "Tokyo","Brazil"
=> "Brasilia","France" => "Paris",
"UK" => "London");
echo "Unsorted list:<br>";
print_r($Country_name);
echo "<br>Sorted list by the name of caopital:<br>";
asort($Country_name);
foreach ($Country_name as $country => $capital)
{
echo "{$country} => {$capital} <br>";
}
?>
</pre>
</body>
</html>