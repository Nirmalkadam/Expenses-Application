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
<title>User Expenses  View</title>
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
            <li class="breadcrumb-item active"> View Expenses </li>
            
          </ol>

          <!-- Page Content -->
          <h1>view Expenses</h1>
          <hr>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="container ">
<?php  form_open('Expenses/proses') ?>
  <form action="<?php echo base_url().'index.php/Expenses/updaterecord/';?>" method="POST"  enctype="multipart/form-data" name="" id="" >
    <div class="form-group">
    <a href="<?php  echo base_url().'index.php/expenses/index'  ?>"class="btn btn-secondary" style="position: relative; left:1080px;hight:40px;">Back</a>
    <br>
 
    <div class="form-groupl" >
      <style>
        
.image{
  box-sizing: border-box;
  position: relative;
  background: black;
  background-image: linear-gradient(top right, #5D5D5B, #383838);
  padding: 7px;
  width: 200px;
  box-shadow: 7px 9px 10px;
  border-radius: 900px;
  top: -20px;
    -1px 1px var(--blur) 1px rgba(0,0,0,0.10),
    -2px 2px var(--blur) 1px rgba(0,0,0,0.09),
    -3px 3px var(--blur) 1px rgba(0,0,0,0.08),
    -4px 4px var(--blur) 1px rgba(0,0,0,0.07),
    -5px 5px var(--blur) 1px rgba(0,0,0,0.06),
    -6px 6px var(--blur) 1px rgba(0,0,0,0.05),
    -7px 7px var(--blur) 1px rgba(0,0,0,0.04),
    -8px 8px var(--blur) 1px rgba(0,0,0,0.03),
    -9px 9px var(--blur) 1px rgba(0,0,0,0.03),
    -10px 10px var(--blur) 1px rgba(0,0,0,0.03),
    -11px 11px var(--blur) 1px rgba(0,0,0,0.03),
    -12px 12px var(--blur) 1px rgba(0,0,0,0.02),
    -13px 13px var(--blur) 1px rgba(0,0,0,0.02),
    -14px 14px var(--blur) 1px rgba(0,0,0,0.01),
    -15px 15px var(--blur) 1px rgba(0,0,0,0.01),
    -16px 16px var(--blur) 1px rgba(0,0,0,0.01)
    

  }
  body {
  background-color:white;
}


      </style>
   
           <td>
<img class="image"  src="<?= base_url('uploads/'.$expenses['photo']) ?>" height="200px" width="600px" alt="person image" style="position: relative;left:-20px;">
</td>

    </div>
    <br>
    <div class="form-group">
      <label for="Person Name" class="h1" style=" font-weight: 900;font-size: 110%;font-style: normal;  font-size:  1.3275rem;   line-height: 1.2;    letter-spacing: 0;">Person Name :  </label>
  
    <?php echo set_value('personn',$expenses['personn']);  ?>
<?php echo form_error('personn');  ?>
</div>
  
    <br>
   

    <label for="Expenses Date" style=" font-weight: 900; font-size: 110%;font-style: normal;  font-size:  1.3275rem;   line-height: 1.2;    letter-spacing: 0;">ID :  </label> <?php echo $expenses['id'] ?>
    <br>
    <br>
      <label for="Expenses Date" style=" font-weight: 900;font-size: 110%;font-style: normal;  font-size:  1.3275rem;   line-height: 1.2;    letter-spacing: 0;">Date Expenses : </label>

         <?php echo set_value('date',$expenses['date']); ?>
      <?php echo form_error('date'); ?>
    </div>
    <div class="form-group">
      <br>

      <label for="category" style=" font-weight: 900;font-size: 110%;font-style: normal;  font-size:  1.3275rem;   line-height: 1.2;    letter-spacing: 0;">Category Expenses :  </label>
  
      <?php echo set_value('category',$expenses['category']);  ?>
  <?php echo form_error('category');  ?>
    </div> 
 <br>
    
    <div class="form-group">
      <label for="Amount" style=" font-weight: 900;font-size: 110%;font-style: normal;  font-size:  1.3275rem;   line-height: 1.2;    letter-spacing: 0;">Amount :  </label>
    
     <?php echo set_value('amount',$expenses['amount']);  ?>
 <?php echo form_error('amount');  ?>
    </div>
   

</script>
</script>
<div>
    

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