<?php
require_once APP_ROOT . '/app/models/Employee.php';

class EmployeeService
{
    public function getAllEmployee()
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getcon();
        $sql = "SELECT * FROM employees";
        $stmt = $conn->query($sql);
        $employees = [];
        while ($row = $stmt->fetch()) {
            $employee = new Employee($row['EmployeeID'], $row['Name'], $row['Address'], $row['Salary']);
            $employees[] = $employee;
        }
        return $employees;
    }

    public function addEmployee($name, $address, $salary)
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getcon();

        $sql = "INSERT INTO employees (Name, Address, Salary) VALUES (:name, :address, :salary)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function editEmployee($employeeID, $name, $address, $salary)
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getcon();

        $sql = "UPDATE employees SET Name = :name, Address = :address, Salary = :salary WHERE EmployeeID = :employeeID";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':employeeID', $employeeID, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function removeEmployee($employeeID)
    {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getcon();

        $sql = "DELETE FROM employees WHERE EmployeeID = :employeeID";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':employeeID', $employeeID, PDO::PARAM_INT);

        return $stmt->execute();
    }
}
