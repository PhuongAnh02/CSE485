<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h3>Quản lý nhân viên</h3>
    <a href="./add_employee.php" class="btn btn-primary btn-lg">Thêm</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">employee_ID</th>
          <th scope="col">Aircraft_ID</th>
          <th scope="col">employee_Duration</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($employees as $employee) {
        ?>
          <tr>
            <th scope="row"><?= $employee->getEmployeeID(); ?></th>
            <td><?= $employee->getName(); ?></td>
            <td><?= $employee->getAddress(); ?></td>
            <td><?= $employee->getSalary(); ?></td>
            <td> <a href="#">Xóa</a></td>
            <td> <a href="#">Sửa</a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="<?php APP_ROOT . 'public/js/all.js' ?>"></script>
</body>

</html>