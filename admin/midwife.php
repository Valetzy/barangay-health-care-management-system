<?php
session_start(); 
if (isset($_SESSION['user_id']) && isset($_SESSION['fname']) ) {
?>

<?php include "../conn/conn.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health Center Information Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logov.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">

    <center><h5 class="card-title">Barangay Health Center Midwifes</h5></center>


      <div class="card">
        <div class="card-body">
          
          <div style="margin-bottom: 30px; margin-top: 20px ; text-align: end;" >
            <button type="button" class="btn btn-success col-md-3 ri-add-circle-fill" data-bs-toggle="modal" data-bs-target="#largeModal" >ADD</button>
          </div>

                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Midwife</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                    <div class="modal-body">

                                        <form action="add_midwife.php" method="post" >

                                            <div class="form-floating mb-3 col-md-12">
                                                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Name</label>
                                            </div>

                                            <div class="form-floating mb-3 col-md-12">
                                                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Username</label>
                                            </div>

                                            <div class="form-floating mb-3 col-md-12">
                                                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Password</label>
                                            </div>

                                            <div class="form-floating mb-3 col-md-12">
                                                <input type="number" name="cell" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Cellphone No.</label>
                                            </div>

                                            <div class="form-floating mb-3 col-md-12">
                                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Email</label>
                                            </div>

                                    </div>
                            <div class="modal-footer">
                                <button type="submit" name="save" class="btn btn-primary">Confirm</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End Large Modal-->


          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>
                  <b>N</b>ame
                </th>
                <th>username</th>
                <th>password</th>
                <th>Cell Number</th>
                <th>Action</th>
              </tr>
            </thead>
            
            <tbody>
            <?php
                $result = mysqli_query($conn,"select * from midwife_user") or die ("database error:".mysqli_error($conn));
                while($row=mysqli_fetch_array($result)){
                $user_ids = $row['user_id'];
                $name = $row['name'];
                $password = $row['password'];
                $cell = $row['cell'];
                $email = $row['email'];
                $username = $row['username'];
                ?>
              <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $cell; ?></td>
                <td><a class="btn btn-primary row-md-3" href="edit_midwife.php?edit=<?php echo $user_ids;?>" >Update</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

  <?php include 'footer.php'; ?>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php 
}else{
    header("Location: login.php");
    exit();
}

?>