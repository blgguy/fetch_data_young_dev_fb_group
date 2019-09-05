<?php 
include 'server.php';
$msg = "";

	if(isset($_POST['add'])){
		$fname = $_POST['firstname'];
		$mname = $_POST['middlename'];
		$sname = $_POST['secondname']; 
		$address = $_POST['address'];

		$sql = "INSERT INTO info (first_name, middle_name, second_name, address) VALUES ('$fname', '$mname', '$sname', '$address')";
		if($conn->query ($sql) === TRUE){
			$msg = "<h3 style='color: green'>Data added successfully. </h3><br> <a href='http://localhost/fb_challenge/view.php'><button class='btn btn-success btn-sm edit btn-flat'> View Other Datas</button></a>";
			
		}
		else{
			$msg = "<h3 style='color: red'>they is a problem uploading the Data, please try again</h3>";
		}
  }
?>
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
  <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
              <h4 class="modal-title"><b>Facebook Young Developers Group challenge</b></h4>
              <div align="center"><h2><?php echo $msg; ?></h2></div>
              <form class="form-horizontal" method="POST" action="">
                <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>

                    <input type="text" class="form-control" name="firstname" required>
                    </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Middle Name</label>

                    <input type="text" class="form-control" name="middlename" required>
                    </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Second Name</label>

                    <input type="text" class="form-control" name="secondname" required>
                    </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>

                    <input type="text" class="form-control" name="address" required>
                    </div>
                    <div align="center">
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            </div>
      </form>
  </div>
  <div class="col-sm-3"></div>
</div>
</div>
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
