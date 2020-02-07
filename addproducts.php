<?php
include'connection.php';
$product_id=$_GET['p_id'];
$p_query=mysqli_query($con,"SELECT * FROM `product_table` WHERE product_id='$product_id'");
$p_data=mysqli_fetch_assoc($p_query);
if (isset($_POST['submit'])) {
  $product_name=$_POST['product'];
  mysqli_query($con,"UPDATE `product_table` SET product_name='$product'WHERE product_id='$product_id'");

  echo "<script>alert('product delete succesfully');</script>";
echo"<script>window.history.back();</script>";
}
$rack_query=mysqli_query($con,"SELECT * FROM rack_table");


if (isset($_POST['submit'])) 
{
  
  $product=$_POST['product'];
    $quality=$_POST['quality'];
  $price=$_POST['price'];
  $rackid=$_POST['racknumber'];
    


   

   

   
   mysqli_query($con,"INSERT INTO `product_table`( `product_name`, `quality`, `price`,`rack_id`) VALUES ('$product','$quality','$price','$rack_id')");
                                                                                                                                                                                                                                                                                                                                                             
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <form method="post" enctype="multipart/form-data">
<div class="wrapper">
  <?php
 include'navbar.php'; 
 ?>

  <!-- Navbar -->
  <!-- Main Sidebar Container -->
<?php
 include'leftbar.php'; 
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">add products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"><label>product</label>
          <div class="col-lg-4">
            <div class="form-group">
            <input type="text" name="product"placeholder="enter product"class="form-control">
          </div></div></div>
          <div class="row"><label>quality</label>
          <div class="col-lg-4">
            <div class="form-group">
            <input type="text" name="quality"placeholder="enter quality"class="form-control">
          </div></div></div>
          <div class="row"><label>price</label>
          <div class="col-lg-4">
            <div class="form-group">
            <input type="number" name="price"class="form-control">
          </div></div></div>
          <div class="row">
            <label>racknumber</label>
          <div class="col-lg-4">
            <div class="form-group">
              <select name="racknumber">
                <option value="">select rack</option>
               <?php while($data=mysqli_fetch_assoc($rack_query)) { ?>
              <option value="<?php echo $data['rack_id'];?>"><?php echo $data['rack_number'];?></option>
               <?php 
             }
            ?>
              </select>
           

                
          </div></div></div>
        <!-- Small boxes (Stat box) -->
       <div class="row">

        <input type="submit">
      </div><br>
      <div class ="row">
        <input type="submit"value="cancel">
      </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
      

            <!-- /.card -->

            <!--/.direct-chat -->

            <!-- TO DO List -->
           
                
              <!-- /.card-header -->
          
              <!-- /.card-body -->
             
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</form>
</body>
</html>
