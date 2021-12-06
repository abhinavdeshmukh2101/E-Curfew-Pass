<?php
  //connecting to MYSQL database
  $personName = $_REQUEST['personName'];
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $confirm_password = $_REQUEST['confirm_password'];
  $contactNo = $_REQUEST['contactNo'];
  $emailId = $_REQUEST['emailId'];
  $hash_pass = "";
  settype($hash_pass, 'string');
  $unique = "true";
  $conn = mysqli_connect("localhost", "abhi9", "12345", "epass");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";

  if(isset($_REQUEST['personName'])){
    $personName = $_REQUEST['personName'];
  }

  if(isset($_REQUEST['username'])){
    $username = $_REQUEST['username'];
  }

  if(isset($_REQUEST['password'])){
    $password = $_REQUEST['password'];
  }

  if(isset($_REQUEST['confirm_password'])){
    $confirm_password = $_REQUEST['confirm_password'];
  }

  if(isset($_REQUEST['contactNo'])){
    $contactNo = $_REQUEST['contactNo'];
  }

  if(isset($_REQUEST['emailId'])){
    $emailId = $_REQUEST['emailId'];
  }

  //sending the date to database.
  if(isset($_REQUEST['submit_form'])){


    if(strlen($username) < 5){
      $message = "Set a username, whose lenght is atleast 5 charecters.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      exit;
    }

    if(strlen($contactNo) < 10 || strlen($contactNo) > 10){
      $message = "Enter a valid phone Number";
      echo "<script type='text/javascript'>alert('$message');</script>";
      exit;
    }
    

    if($password != $confirm_password){
      $message = "Password and Confirm Password field do not match.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      exit;
    }


    // $message = $hash_pass;
    // echo "<script type='text/javascript'>alert('$message');</script>";

    //checking is the username already exist in the database or not.
    $sql1 = "select username from user_registration";
    $result1 = mysqli_query($conn, $sql1);

    if($result1->num_rows > 0){
      while($row = $result1->fetch_assoc()){
        if($row["username"] == $username){
          $unique = "false";

          $message = "Given username already exist, please try with different username.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
      }
    }

    // $message = "username searched in database";
    // echo "<script type='text/javascript'>alert('$message');</script>";

    if($unique == "true"){

      // echo "'$personName', '$username', $contactNo, '$emailId'";

      $sql2 = "insert into user_registration(name, username, password, contact, email, user_category) values('$personName', '$username', '$password' , '$contactNo', '$emailId', 'user')";

      $result2 = mysqli_query($conn, $sql2);
      
      if($result2){
        $message = "Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $message = "Servers are busy, please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
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
              <p class="login-box-msg">Fill the information for User Registration</p>
              <form action="" method="post">

                <!-- Form -->
                <div class="card-body">
                      <div  class="row" style="color:black;">
                          <div class="col-sm-12">
                              <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for="personName">Person Name: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="personName" name="personName" placeholder="Enter your Name" size="40" required>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for="username">Username: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Set your username" size="40" required>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-6">
                                    <label for="password">Password: <span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Set your password" minlength="8" size="40" required>
                                  </div>
                                  <div class="form-group col-sm-6">
                                    <label for="confirm_password">Confirm Password: <span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-Enter your password" minlength="8" size="40" required>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="emailId">Email Id: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="emailId" name="emailId" placeholder="Enter the email Id" size="40" required>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label for="contactNo">Contact No: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter the Contact Number" size="40" required>
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
