<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User dashboard</title>

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
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-12 col-sm-6 mb-3">
   <h3>Welcome Back : <?php echo $profile->firstName;?> <?php echo $profile->lastName;?>  </h3>
            </div>
 
     <!-- Output -->
     <div class="output-container flex-space">
          <div>
            <p>Total Budget</p>
            <span id="amount">0</span>
          </div>
          <div>
            <p>Expenses</p>
            <span id="expenditure-value">0</span>
          </div>
          <div>
            <p>Balance</p>
            <span id="balance-amount">0</span>
          </div>
        </div>
      </div>
      <!-- List -->
      <div class="list">
          </div>
<style>
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: #f7f9fd;
}
.wrapper {
  width: 90%;
  font-size: 16px;
  max-width: 43.75em;
  margin: 1em auto;
}
.container {
  width: 100%;
}
.sub-container {
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3em;
}
.flex {
  display: flex;
  align-items: center;
}
.flex-space {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.wrapper h3 {
  color: #363d55;
  font-weight: 500;
  margin-bottom: 0.6em;
}
.container input {
  display: block;
  width: 100%;
  padding: 0.6em 0.3em;
  border: 1px solid #d0d0d0;
  border-radius: 0.3em;
  color: #414a67;
  outline: none;
  font-weight: 400;
  margin-bottom: 0.6em;
}
.container input:focus {
  border-color: #587ef4;
}
.total-amount-container,
.user-amount-container {
  background-color: #ffffff;
  padding: 1.25em 0.9em;
  border-radius: 0.3em;
  box-shadow: 0 0.6em 1.2em rgba(28, 0, 80, 0.06);
}
.output-container {
  background-color: #587ef4;
  color: #ffffff;
  border-radius: 8.3em;
  box-shadow: 0 0.6em 1.2em rgba(28, 0, 80, 0.06);
  margin: 2em 0;
  padding: 1.2em;
}
.output-container p {
  font-weight: 500;
  margin-bottom: 0.6em;
}
.output-container span {
  display: block;
  text-align: center;
  font-weight: 400;
  color: #e5e5e5;
}
.submit {
  font-size: 1em;
  margin-top: 0.8em;
  background-color: #587ef4;
  border: none;
  outline: none;
  color: #ffffff;
  padding: 0.6em 1.2em;
  border-radius: 0.3em;
  cursor: pointer;
}
.list {
  background-color: #ffffff;
  padding: 1.8em 1.2em;
  box-shadow: 0 0.6em 1.2em rgba(28, 0, 80, 0.06);
  border-radius: 0.6em;
}
.sublist-content {
  width: 100%;
  border-left: 0.3em solid #587ef4;
  margin-bottom: 0.6em;
  padding: 0.5em 1em;
  display: grid;
  grid-template-columns: 3fr 2fr 1fr 1fr;
}
.product {
  font-weight: 500;
  color: #363d55;
}
.amount {
  color: #414a67;
  margin-left: 20%;
}
.icons-container {
  width: 5em;
  margin: 1.2em;
  align-items: center;
}
.product-title {
  margin-bottom: 1em;
}
.hide {
  display: none;
}
.error {
  color: #ff465a;
}
.edit {
  margin-left: auto;
}
.edit,
.delete {
  background: transparent;
  cursor: pointer;
  margin-right: 1.5em;
  border: none;
  color: #587ef4;
}
@media screen and (max-width: 600px) {
  .wrapper {
    font-size: 14px;
  }
  .sub-container {
    grid-template-columns: 1fr;
    gap: 1em;
  }
}
</style>


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

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>

</html>
