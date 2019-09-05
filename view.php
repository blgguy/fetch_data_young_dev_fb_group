<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Young Developers | Fetch Data From DB</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
      body{
        margin: 10px;
        padding: 10px;
      }
    </style>
</head>

<body>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="box">
            <div class="box-header with-border">
              <a href="index.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat">Insert New Data</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>S/N</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Seccond Name</th>
                  <th>Address</th>
                </thead>
                <tbody>
                  <?php
                    $i=0;
                    $sql = "SELECT * FROM info";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $i++;
                      $fname = $row['first_name'];
                      $mname = $row['middle_name'];
                      $sname = $row['second_name'];
                      $address = $row['address'];
                      echo "
                        <tr>
                          <td> $i </td>
                          <td> $fname </td>
                          <td> $mname </td>
                          <td> $sname </td>
                          <td> $address </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </section>

<br><br><br>
<div align="center">   
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>All rights reserved</b>
    </div>
    <!-- please don't remove the footer-->
    <strong>Code by <a href="http://aminu.site" title="PHP Developer">Aminu M. Bulangu</a></strong>
</footer>
</div>
</body>
</html>