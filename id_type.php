<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curfew_and_TP | Person Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <a href="id_type.php" class="nav-link active" style="background-color:#e83e8c;">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Identification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Identification</li>
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
                <h3 class="card-title" style="margin-left: 40%"><b>IDENTIFICATION</b></h3>
              </div><br>
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-4">
                        <button class="btn bg-pink btn-md" data-toggle="modal" data-target="#addID"><i class="fa fa-plus"></i> Add Identification</button>
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
                    <th>Card Category Name</th>
                    <th>Card Description</th>
                    <th>Card Type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Primary ID</td>
                    <td>Card Description</td>
                    <td>School ID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card1"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Primary ID</td>
                    <td>Card Description</td>
                    <td>Company ID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card2"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Primary ID</td>
                    <td>Card Description</td>
                    <td>SSS ID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card3"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Primary ID</td>
                    <td>Card Description</td>
                    <td>UMID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card4"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Secondary ID</td>
                    <td>Card Description</td>
                    <td>Philhealth ID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card5"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Secondary ID</td>
                    <td>Card Description</td>
                    <td>Postal ID</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#card6"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Card Category Name</th>
                    <th>Card Description</th>
                    <th>Card Type</th>
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
      
  <div class="modal fade" id="addID">
      <form role="form" id="quickForm" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:40%"><i class="fa fa-plus"> Add ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card1">
      <form role="form" id="quickForm1" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="School ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card2">
      <form role="form" id="quickForm2" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" value="Primary ID" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description   " id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Company ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card3">
      <form role="form" id="quickForm3" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="SSS ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card4">
      <form role="form" id="quickForm4" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="UMID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card5">
      <form role="form" id="quickForm5" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Secondary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Philhealth ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
  <div class="modal fade" id="card6">
      <form role="form" id="quickForm6" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Secondary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Postal ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
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
                  <h6 class="modal-title" style="margin-left:20%">Are you sure you want delete?</h6>
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
<script src="ctp_.js"></script>
<!-- page script -->
</body>
</html>
