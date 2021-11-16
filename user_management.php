<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curfew_and_TP | Person Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-pink navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
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
      <span class="brand-text font-weight-light">Curfew&TravelPass</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Celia Gomez</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="person_management.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Person Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="id_type.php" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                ID Type
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
            <a href="user_management.php" class="nav-link active" style="background-color:#e83e8c;">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-left: 40%"><b>USER MANAGEMENT</b></h3>
              </div><br>
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-4">
                        <button class="btn bg-pink btn-md" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus"></i> Add User</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Avatar</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Barangay</th>
                    <th>User Category</th>
                    <th>Status</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><img src="dist/img/avatar2.png" alt="AdminLTE Logo" class="brand-image img-square elevation-3" width="40" style="opacity: .8"></td>
                    <td>Celia Gomez</td>
                    <td>09091234567</td>
                    <td>Email000@gmail.com</td>
                    <td>Barangay Mansilingan</td>
                    <td>Administrator</td>
                    <td>Active</td>
                    <td>celiagomez000</td>
                    <td>.............</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#updateCust1"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Avatar</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Barangay</th>
                    <th>User Category</th>
                    <th>Status</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!--ALL TARGET MODAL-->
      
    <div class="modal fade" id="addUser">
      <form role="form" id="quickForm" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:40%"><i class="fa fa-plus"> Add User</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Choose Profile: <span style="color:red;">*</span></label>
                                    <input type="file" class="form-control" name="Avatar" id="Avatar">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Fullname: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="fn" name="fname" placeholder="Firstname                        Middlename                         Lastname" size="5" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Contact: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="11" id="cn" name="contact" placeholder="Contact Number" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" size="40" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="addrs">Barangay: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="addrs" name="address" placeholder="Barangay" size="40" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="user_categ">User Category: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="user_categ" name="user_categ" placeholder="User Category" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Status: <span style="color:red;">*</span></label>
                                        <select id="stats" name="stats" class="form-control" required>
                                        <option selected disabled>Select Status </option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="uname">Username: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" size="40" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
    <div class="modal fade" id="updateCust1">
      <form role="form" id="quickForm1" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:40%"><i class="fa fa-spinner"> Update User</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Choose Profile: <span style="color:red;">*</span></label>
                                    <input type="file" class="form-control" name="Avatar" id="Avatar11">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Fullname: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="fn" name="fname" placeholder="Firstname                        Middlename                         Lastname" value="Celia Gomez" size="5" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Contact: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="11" id="cn" name="contact" placeholder="Contact Number" value="09091234567" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="Email000@gmail.com" size="40" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="addrs">Barangay: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="addrs" name="address" placeholder="Barangay" value="Barangay Mansilingan" size="40" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="user_categ">User Category: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="user_categ" name="user_categ" placeholder="User Category" value="Administrator" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Status: <span style="color:red;">*</span></label>
                                        <select id="stats" name="stats" class="form-control" required>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="uname">Username: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" value="celiagomez000" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" value="celiagomez000" placeholder="Password" size="40" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
       <div class="modal fade" id="delete">
        <div class="modal-dialog" style="width:400px !important;">
            <form action="">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                  <h6 class="modal-title" style="margin-left:15%">Are you sure you want delete?</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Yes</button>
                </div>
              </div>
              </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
      </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 - 2022 <a href="#">Curfew&TravelPassUI</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bootstrap-fileinput/js/fileinput.min.js"  type="text/javascript"></script>
<script src="ctp_.js"></script>
<!-- page script -->
</body>
</html>
