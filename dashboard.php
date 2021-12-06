<?php 

session_start();

$conn = mysqli_connect("localhost", "abhi9", "12345", "epass");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "alert('connection failed')";
    echo "<script type='text/javascript'>alert('connection failed');</script>";
  }
  else {
    $message = 'Connection established';
    // echo "<script type='text/javascript'>alert('$message');</script>";
  }

  //$sql = "select count(user_category) from user_registration where user_category = user ";

  //$result = mysqli_query($con , $sql);

  //echo "alert('$result')";


  $sql1 = "select count(user_category) as Val from user_registration where user_category = 'user'";

  $sql2 = "select count(*) from request_form;";

  $sql3 = "select count(*) from request_form where pass_status='Approved'";

  $sql4 = "select count(*) from request_form where pass_status='Pending'";

  $result1 = mysqli_query($conn , $sql1);

  $result2 = mysqli_query($conn , $sql2);

  $result3 = mysqli_query($conn , $sql3);

  $result4 = mysqli_query($conn , $sql4); 



  if(!$result1 && !$result2 && !$result3 && !$result4)
  {
    echo "<script type='text/javascript'>alert('connection failed');</script>";
  }

  else
  {
    // echo "<script type='text/javascript'>alert('connection established');</script>";
  
    if($row = mysqli_fetch_row($result1)){
      $val1 = $row[0];

      // echo "<script type='text/javascript'>alert('value :$val');</script>";

    }

    if($row = mysqli_fetch_row($result2))
    {
      $val2 = $row[0];
    }

    if($row = mysqli_fetch_row($result3))
    {
      $val3 = $row[0];
    }
    if($row = mysqli_fetch_row($result4))
    {
      $val4 = $row[0];
    }
    
  //  if($row = $result->fetch_assoc()){
  //  echo "<script type='text/javascript'>alert('Value : $row[0]');</script>";
  //}
  }

?>
<!-- ENd of php-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
         .line {
            border-style: groove;
            border-color: pink;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-pink navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="index.php">
          Logout <i class="nav-icon fas fa-sign-out-alt"></i> 
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="ctp_logo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Curfew E-Pass</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active" style="background-color:#e83e8c;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="request_pass.php" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Request Pass
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_management.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Person</span>
                <span class="info-box-number"><script type="text/javascript">
        var x = "<?php echo"$val1"?>";
        document.write(x);
    </script></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Request Pass</span>
                <span class="info-box-number"><script type="text/javascript">
        var x = "<?php echo"$val2"?>";
        document.write(x);
    </script></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Approved Pass</span>
                <span class="info-box-number"><script type="text/javascript">
        var x = "<?php echo"$val3"?>";
        document.write(x);
    </script></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4"></div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Pending Pass</span>
                <span class="info-box-number"><script type="text/javascript">
        var x = "<?php echo"$val4"?>";
        document.write(x);
    </script></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-4">
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="plugins/flot/jquery.flot.categories.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard3.js"></script>
<script src="ctp_.js"></script>
</body>
</html>