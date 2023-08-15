<?php
require_once APP_ROOT . "/app/services/EmployeeService.php";
class EmployeeController
{
    public function index()
    {
        $EmployeeService = new EmployeeService();
        $employees = $EmployeeService->getAllEmployee();
        include APP_ROOT . "/app/views/index.php";
    }

    public function add($name, $address, $salary)
    {
        $employeeService = new EmployeeService();
        $result = $employeeService->addEmployee($name, $address, $salary);

        if ($result) {
            echo "New employee added successfully!";
        } else {
            echo "Error adding employee.";
        }
    }

    public function editEmployee($employeeID, $name, $address, $salary)
    {
        $EmployeeService = new EmployeeService();
        return $EmployeeService->editEmployee($employeeID, $name, $address, $salary);
    }

    public function removeEmployee($employeeID)
    {
        $EmployeeService = new EmployeeService();
        return $EmployeeService->removeEmployee($employeeID);
    }
}
