<?php
  //connecting to MYSQL database
  $personName = $_REQUEST['cname'];
  $passCode = $_REQUEST['pc'];
  $passType = $_REQUEST['passType'];
  $dateOfRequest = $_REQUEST['dRequest'];
  // settype($dateOfRequest, )
  $dateOfValidity = $_REQUEST['dValidity'];
  $remarks = $_REQUEST['remarks'];
  $username = "samp";
  $conn = mysqli_connect("localhost", "abhi9", "12345", "epass");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";

  if(isset($_REQUEST['cname'])){
    $personName = $_REQUEST['cname'];
  }

  // if(isset($_REQUEST['username'])){
  //   $username = $_REQUEST['username'];
  // }

  if(isset($_REQUEST['pc'])){
    $passCode = $_REQUEST['pc'];
  }

  if(isset($_REQUEST['passType'])){
    $passType = $_REQUEST['passType'];
  }

  if(isset($_REQUEST['dRequest'])){
    $dateOfRequest = $_REQUEST['dRequest'];
  }

  if(isset($_REQUEST['dValidity'])){
    $dateOfValidity = $_REQUEST['dValidity'];
  }

  if(isset($_REQUEST['remarks'])){
    $remarks = $_REQUEST['remarks'];
  }

  //sending the date to database.

  if(isset($_REQUEST['submit_form'])){

    $sql = "insert into request_form(name, pass_code, pass_type, username, date_of_request, date_of_validity, remark) values ('$personName', '$passCode', '$passType', '$username', $dateOfRequest, $dateOfValidity, '$remarks')";
    

    if(mysqli_query($conn, $sql)){
      $message = "Request Send Successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
      $message = "Please Try Again";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    mysqli_close($conn);
  }
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curfew Pass</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="row py-5">
    <div class="col-md-6">
          <div class="login-logo">
            <a href="index.php"><b>Curfew and </b>Travel Pass<br>
                <img src="ctp_logo.png" alt="Your Avatar" class="img img-responsive" style="opacity:60%;left-margin:auto; max-width:auto"><br>
                UI</a>
          </div>
    </div>
    <div class="col-md-6">
        <div class="form">
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Fill the information for generating pass</p>
              <form action="#" method="post">

                <!-- Form -->
                <div class="card-body">
                      <div  class="row" style="color:black;">
                          <div class="col-sm-12">
                              <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for="cname">Person Name: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter your Name" size="40" required>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="pc">Passcode: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="pc" name="pc" placeholder="Pass Code" size="40" required>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label for="passType">Pass Type: <span style="color:red;">*</span></label>
                                      <select id="passType" name="passType" class="form-control" required>  
                                      <option value="Essential Pass">Essential Pass</option>
                                      <option value="Medical Pass">Medical Pass</option>
                                      <option value="Others">Others</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-6">
                                    <label for="dRequest">Date of Request: <span style="color:red;">*</span></label>
                                    <input type="date" class="form-control"  id="dRequest" name="dRequest" value="2021-03-15" required>
                                  </div>
                                  <div class="form-group col-sm-6">
                                    <label for="dValidity">Date of Validity: <span style="color:red;">*</span></label>
                                      <input type="date" class="form-control"  id="dValidity" name="dValidity" value="2021-04-15" required>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-12">
                                      <label for="rmrks">Remarks: <span style="color:red;">*</span></label>
                                      <textarea id="rmrks" name="remarks" class="form-control" cols="5" rows="3" placeholder="Remarks" required>Remarks</textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  <div class="col-4">
                    <button type="submit" name="submit_form" class="btn bg-pink btn-block">Submit</button>



                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- javascript -->
<script src = "./Functions/index.js"></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
