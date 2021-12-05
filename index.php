<!-- for login page-> authentication,  -->

<?php

  $userId = "";
  $password = "";
  $userUniqueId = 1;
  settype($userUniqueId, 'integer');
  $redirectLink = "";

  $conn1 = mysqli_connect("localhost", "abhi9", "12345", "epass");

  if ($conn1->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";

  if(isset($_REQUEST['userName'])){
    $userId = $_REQUEST['userName'];
  }

  if(isset($_REQUEST['password'])){
    $password = $_REQUEST['password'];
  }

  if(isset($_REQUEST['sign-in'])){
    $sql = "select username, password, user_category from user_registration";
    $result = mysqli_query($conn1, $sql);

    if($result -> num_rows > 0){
      while($row = $result->fetch_assoc()){
        if($row["username"] == $userId){

          if($row["password"] == $password){
            
            if($row["user_category"] == "admin"){
              header('location:/dashboard.php/' . $userUniqueId);
              $message = "Login Successfull";
              echo "<script type='text/javascript'>alert('$message');</script>";
              die;
            }
            else if($row["user_category"] == "user"){
              header('location:/userDashboard.php/' . $userUniqueId);
              die;
              $message = "Login Successfull";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }
          }

          else{
            $message = "Incorrect username or password";
            echo "<script type='text/javascript'>alert('$message');</script>";
            exit;
          }
        }

        else{
          $message = "Incorrect username or password";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
      }
    }
  }

  

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curfew_and_TP | Log in</title>
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
<div class="row">
    <div class="col-md-6">
          <div class="login-logo">
            <a href="index.php"><b>Curfew</b><br>
                <img src="ctp_logo.png" alt="Your Avatar" class="img img-responsive" style="opacity:60%;left-margin:auto; max-width:auto"><br>
            </a>
          </div>
    </div>
    <div class="col-md-6">
        <div class="login-box">
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <form action="" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="userName" placeholder="Username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <div>
                      <p class="mb-0">
                        <a href="/register.php" class="text-center"><b>New User? Click Here!</b></a>
                      </p>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn bg-pink btn-block" id="sign-in" name="sign-in">Sign In</button>
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
