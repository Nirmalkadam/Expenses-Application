<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<title>User Expenses Form</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active"> Update Expenses </li>
            
          </ol>

          <!-- Page Content -->
          <h1>Update Expenses</h1>
          <hr>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="container ">
<?php  form_open('Expenses/proses') ?>
  <form action="<?php echo base_url().'index.php/Expenses/updaterecord/';?>" method="POST"  enctype="multipart/form-data" name="" id="" >
    <div class="form-group">
      <label for="Expenses Date">Date Expenses:</label>
      <input type="date" class="form-control col-md-4" id="Expenses Date" placeholder="Expenses Date " name="date"value="<?php echo set_value('date',$expenses['date']); ?>">
      <?php echo form_error('date'); ?>
    </div>
    <div class="form-group">

      <label for="category">Category Expenses:</label>
      <input type="text" class="form-control col-md-4" id="category" placeholder="Category" name="category"value="<?php echo set_value('category',$expenses['category']);  ?>">
  <?php echo form_error('category');  ?>
    </div> 

    
    <div class="form-group">
      <label for="Amount">Amount:</label>
      <input type="number" class="form-control col-md-4" id="Amount" placeholder="Amount" name="amount"value="<?php echo set_value('amount',$expenses['amount']);  ?>"> 
 <?php echo form_error('amount');  ?>
    </div>
    <div class="form-group">
      <label for="Person Name">Person Name:</label>
      <input type="text" class="form-control col-md-4" placeholder="Person Name" name="personn" value="<?php echo set_value('personn',$expenses['personn']);  ?>"
><?php echo form_error('personn');  ?>
</div>
    <div class="form-groupl">
    <label for="exampleFormControlFile1">Photo :</label>
    <input type="file" class="form-control-file" id="photo" name="photo"  value="<?php echo set_value('photo',$expenses['photo']);   ?>">
    <input type="hidden" name="old" id= "old" value="<?php echo $expenses['photo'];?>">
    <td>
<img class="img"  src="<?= base_url('uploads/'.$expenses['photo']) ?>" height="180" width="200" alt="person image" style="position: relative;left:610px;top:-350px;">
</td>
    <?php //var_dump($expenses['photo']);exit; ?>
    <?php echo form_error('photo');  ?>
    
    </div>
    <div class="btn">
    <input type="hidden" name="id" value="<?php echo $expenses['id'] ?>">
    <button   type="submit" name="submit" class="btn btn-primary" >Update</button>
   
<a href="<?php  echo base_url().'index.php/expenses/index'  ?>"class="btn btn-secondary">Cancel</a>
<?php form_close()  ?>
</div>
<script>
  <?php if( $this->session->flashdata('update') ) {?>
    var isi=<?php echo json_encode($this->session->flashdata('update')) ?>;
swal({
  title: "<?php echo set_value('personn',$expenses['personn']);  ?> : ID  <?php echo $expenses['id'] ?>",
  text: isi,
  icon: "success",
  button: "OK",
});
<?php }  ?> 

  <?php if( $this->session->flashdata('error') ) {?>
    var isi=<?php echo json_encode($this->session->flashdata('error')) ?>;
swal({
  title: "Record Not Update Successfully!",
  text: isi,
  icon: "error",
  button: "OK",
});
<?php }  ?> 
</script>
</script>
<div>
    <style>
      img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 200px;
}
.btn {
position: relative;
top:-60px;
right: 10px;
}

    </style>

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>

  </body>

</html>