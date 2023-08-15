<?php
require_once('../app/config/config.php');
require_once APP_ROOT . "/app/libs/DBConnection.php";
$controller = isset($_GET["controller"]) ? $_GET['controller'] : 'Employees';
if ($controller == "Employees") {
    require_once APP_ROOT . "/app/controllers/EmployeeController.php";
    $EmployeeController = new EmployeeController();
    $EmployeeController->index();
}
