<?php 
  session_start();

  $Id = $_SESSION['ID'];
  $conn = mysqli_connect("localhost", "abhi9", "12345", "epass");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed......";
  }

  else{
    // echo "Nice... connection established";
    // echo "alert('$userUniqueId')";
    
    // echo "<script type='text/javascript'>alert('$Id');</script>";
    
    $sql1 = "select * from user_registration where user_id = '$Id'";
    $output = mysqli_query($conn, $sql1);
    $row = $output->fetch_assoc();
    
    $cname = $row["name"];
    $username = $row["username"];
    $_SESSION["USER_USERNAME"] = $username;
    $contact = $row["contact"];
    $email = $row["email"];


    echo "<table>";
    echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Username</th>";
    echo "<th>Contact Number</th>";
    echo "<th>Email</th>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>" . $cname . "</td>";
    echo "<td>" . $username . "</td>";
    echo "<td>" . $contact . "</td>";
    echo "<td>" . $email . "</td>";
    echo "</tr>";
    echo "</table>";

    mysqli_close($conn);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Curfew_and_TP | User_Info</title>

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

<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  margin-left:400px;
  width:1000px;
  text-align:center;
}
</style>

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
        <a href="/user_info.php" class="nav-link">Home</a>
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
       <!--Sidebar user (optional)--> 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $cname; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item" class="nav-link">
            <a href="user_info.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Info
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active" style="background-color:#e83e8c;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User_info
              </p>
            </a>
            </li>-->
          <li class="nav-item">
            <a href="display_pass.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Display pass
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="newpass.php" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Request Pass
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     /.content-header -->

    <!-- Main content ############This is where you copied 

    <p> </p>
    <table>
        <br>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Username</th>
            <th>Email</th>
            <th>Pass Id</th>
            <th>Status</th>
        </tr>

        <tr>
            <td>Prathamesh Chandekar</td>
            <td>684351245463</td>
            <td>pc@sdfdf</td>
            <td>oc@gmail.com</td>
            <td>123</td>
            <td>Pending</td>
        </tr>
    </table>-->
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