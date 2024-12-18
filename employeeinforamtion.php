<!DOCTYPE>
<html>
<body>
<?php
class Employee
{
public $Emp_id;
public $Emp_Name;
public $Salary;
// Function to accept employee information
public function acceptEmployeeInfo($id, $name, $salary)
{
$this->Emp_id = $id;
$this->Emp_Name = $name;
$this->Salary = $salary;
}
// Function to display employee information
public function displayEmployeeInfo()
{
echo "Employee ID: " . $this->Emp_id . "<br>";
echo "Employee Name: " . $this->Emp_Name . "<br>";
echo "Salary: $" . $this->Salary . "<br>";
}
}
$employee1 = new Employee();
$employee1->acceptEmployeeInfo(101, "John Doe", 50000);
echo "<h2>Employee Information:</h2>";
$employee1->displayEmployeeInfo();
?>
</body>
</html>