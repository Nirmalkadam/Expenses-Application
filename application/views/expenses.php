<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            <li class="breadcrumb-item active">Expenses From</li>
          </ol>

          <!-- Page Content -->
          <h1>Expenses </h1>
          <hr>

<div class="container ">
 
  <form action="<?php echo base_url().'index.php/Expenses/resgister' ?>" method="post"  name="registrationform" id="registrationform" enctype="multipart/form-data">
    <div class="form-group">
      <label for="Expenses Date">Date :</label>
      <input type="date" class="form-control col-md-4" id="Expenses Date" placeholder="Expenses Date " name="date"
required>
<p><?php echo form_error('date');  ?></p>
    </div>
    <label for="category">category :</label>
    <div class="form-group">
      <select class="form-control col-md-4" aria-label="Default select example" name="category" requireds>
  <option selected="selected">Select Category</option>
  <option value="Housing">Housing</option>
  <option value="Transportation">Transportation</option>
  <option value="Food">Food</option>
  <option value="Clothing">Clothing</option>
  <option value="Medical/Healthcare">Medical/Healthcare</option>
  <option value="Movies">Movies</option>
</select>
<p><?php echo form_error('catagrory');  ?></p>
    </div>
    <div class="form-group">
      <label for="Amount">Amount :</label>
      <input type="number" class="form-control col-md-4" id="Amount" placeholder="Amount" name="amount" 
required>
<p><?php echo form_error('amount');  ?></p>
    </div>
    <div class="form-group">
      <label for="Person Name">Person Name :</label>
      <input type="text" class="form-control col-md-4" placeholder="Person Name" name="personn" 
required>
<p><?php echo form_error('personn');  ?></p>
<label for="exampleFormControlFile1">Photo :</label>
    <input type="file" class="form-control col-md-4" id="photo" name="photo">
    <p><?php echo form_error('photo');  ?></p>
    </div>
    <br>
 
    <button  onclick="myFunction()" type="submit" name="submit" class="btn btn-primary">Submit</button>
    
</form>
<script>
  <?php if( $this->session->flashdata('create') ) {?>
    var isi=<?php echo json_encode($this->session->flashdata('create')) ?>;
swal({
  title: "<?php echo set_value('personn',$expenses['personn']);  ?> : ID  <?php echo $expenses['id'] ?>",
  text: isi,
  icon: "success",
  button: "OK",
});
<?php }  ?> 

  <?php if( $this->session->flashdata('cerror') ) {?>
    var isi=<?php echo json_encode($this->session->flashdata('cerror')) ?>;
swal({
  title: "Record Not Update Successfully!",
  text: isi,
  icon: "error",
  button: "OK",
});
<?php }  ?> 
</script>
<br>
<br>

<div class="container">
	<h1 class="page-header text-center">Expenses List</h1>
  <br>
	<div class="row">
		<div class="col-sm-12 col-sm-offset-2">
			
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Date</th>
						<th>category</th>
						<th>Amount</th>
						<th>Person Name</th>
            <th>Photo</th>
            <th colspan = "3" style="position: relative;left:120px;">Action</th>
           
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($expenses)) { foreach($expenses as $expense){

          
						?>
						<tr>
          <td><?php echo $expense['id'] ?></td>
					<td><?php echo $expense['date'] ?></td>
          <td><?php echo $expense['category'] ?> </td>
          <td><?php echo $expense['amount'] ?></td>
          <td><?php echo $expense['personn'] ?></td>
          <td>
<img src="<?= base_url('uploads/'.$expense['photo']) ?>" height="70px" width="70px" alt="person image">
</td>
          
          <td> <a href="<?php echo base_url(); ?>index.php/Expenses/view/<?php echo $expense['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> View</a></td>
          
             <td> <a href="<?php echo base_url(); ?>index.php/Expenses/edit/<?php echo $expense['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> Edit</a></td>

          <td> <a href="<?php echo base_url(); ?>index.php/Expenses/delete_Record/<?php echo $expense['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
          
         
          
						<?php
					}}else{ 	?>
          <tr colspan="5">Record Not Found</tr>
          <?php }?>
				</tbody>
			</table>
		</div>
   
	</div>
</div>

 <?php echo form_close();?>

        </div>
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
