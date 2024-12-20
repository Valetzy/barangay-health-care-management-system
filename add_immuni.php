<?php
session_start(); 
if (isset($_SESSION['user_id']) && isset($_SESSION['name']) ) {
?>


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

    <div class="pagetitle">
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"> </h5>

                            <!-- No Labels Form -->
                            <form class="row g-3" action="add_record_immuni.php" method="post" >

                                <center>
                                    <h5 class="card-title">IMMUNIZATION RECORD</h5>
                                </center>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="number" class="form-control" name="cell" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput"> Cell no.</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="number" class="form-control" name="childno" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Child no.</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Name</label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                <select class="form-select" id="floatingSelect" name="sex" aria-label="Floating label select example" required >
                                    <option hidden>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Sex</label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                    <input type="time" class="form-control" name="time" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Time</label>
                                </div>

                                <div class="form-floating mb-3 col-md-4">
                                    <input type="date" class="form-control" name="birth" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Birth Date</label>
                                </div>

                                <div class="form-floating mb-3 col-md-4">
                                    <input type="text" class="form-control" name="pod" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">POD</label>
                                </div>

                                <div class="form-floating mb-3 col-md-4">
                                    <input type="number" class="form-control" name="weight" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Weight</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="add" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Add</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="aod" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">AOD</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="f" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">F</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                
                                <input type="text" class="form-control" name="occ" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Occ</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="m" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">M</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6">
                                    <input type="text" class="form-control" name="nbs" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">New Born Screnning</label>
                                </div>

                                <div class="form-floating mb-3 col-md-6" style="margin-right: 500px;" >
                                    <input type="text" class="form-control" name="hepa" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Hepa B</label>
                                </div>
                                
                                <div class="form-floating mb-3 col-md-3">
                                    <input type="text" class="form-control" name="bcl" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">BCL6</label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="penta" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">1</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="opv" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">1</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="pcv" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">1</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                    <input type="text" class="form-control" name="ipv" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">IPV<span class="badge border-primary border-1 text-secondary">1</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                    <input type="text" class="form-control" name="measles" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Measles</label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="penta1" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">2</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="opv2" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">2</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="pcv2" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">2</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                    <input type="text" class="form-control" name="ipv2" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">IPV<span class="badge border-primary border-1 text-secondary">2</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-3">
                                    <input type="text" class="form-control" name="mmr" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">MMR</label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="penta3" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">3</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="opv3" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">3</span></label>
                                </div>

                                <div class="form-floating mb-3 col-md-2">
                                    <input type="text" class="form-control" name="pcv3" id="floatingInput" placeholder="name@example.com" required >
                                    <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">3</span></label>
                                </div>
                                
                                <div class="text-center">
                                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                                </div>
                            </form><!-- End No Labels Form -->

                    </div>
              </div>


            </div>
      </div>
    </section>

  </main><!-- End #main -->
<br><br><br><br><br><br><br><br><br><br><br><br>
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
    header("Location: loggingin.php");
    exit();
}

?>