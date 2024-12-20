<?php
session_start(); 
if (isset($_SESSION['user_idq']) && isset($_SESSION['nameq']) ) {
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
                            <form class="row g-3">

<?php 
    include "../conn/conn.php";
    $edit_id = $_GET['records'];
    $result = mysqli_query($conn,"SELECT * FROM immunization WHERE user_id='$edit_id'") or die ("database error:".mysqli_error($conn));

    while($row=mysqli_fetch_array($result)){

        $user_id = $row['user_id'];
        $cell = $row['cell'];
        $childno = $row['childno'];
        $name = $row['name'];
        $sex = $row['sex'];
        $time = $row['time'];
        $birth = $row['birth'];
        $pod = $row['pod'];
        $weight = $row['weight'];
        $add = $row['adds'];
        $aod = $row['aod'];
        $f = $row['f'];
        $occ = $row['occ'];
        $m = $row['m'];
        $nbs = $row['nbs'];
        $hepa = $row['hepa'];
        $bcl = $row['bcl'];
        $penta = $row['penta'];
        $opv = $row['opv'];
        $pcv = $row['pcv'];
        $ipv = $row['ipv'];
        $measles = $row['measles'];
        $penta1 = $row['penta1'];
        $opv2 = $row['opv2'];
        $pcv2 = $row['pcv2'];
        $ipv2 = $row['ipv2'];
        $mmr = $row['mmr'];
        $penta3 = $row['penta3'];
        $opv3 = $row['opv3'];
        $pcv3 = $row['pcv3'];


    } 
    
?>

    <center>
        <h5 class="card-title">IMMUNIZATION RECORD</h5>
    </center>

    <div class="form-floating mb-3 col-md-6">
        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $cell; ?>" readonly  >
        <label for="floatingInput"> Cell no.</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $childno; ?>" readonly >
        <label for="floatingInput">Child no.</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $name; ?>" readonly >
        <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $sex; ?>" readonly >
        <label for="floatingInput">SEX</label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="time" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $time; ?>" readonly >
        <label for="floatingInput">Time</label>
    </div>

    <div class="form-floating mb-3 col-md-4">
        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $birth; ?>" readonly >
        <label for="floatingInput">Birth Date</label>
    </div>

    <div class="form-floating mb-3 col-md-4">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $pod; ?>" readonly >
        <label for="floatingInput">POD</label>
    </div>

    <div class="form-floating mb-3 col-md-4">
        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $weight; ?>" readonly >
        <label for="floatingInput">Weight</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $add; ?>" readonly >
        <label for="floatingInput">Add</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $aod; ?>" readonly >
        <label for="floatingInput">AOD</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $f; ?>" readonly >
        <label for="floatingInput">F</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $occ; ?>" readonly >
        <label for="floatingInput">Occ</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $m; ?>" readonly >
        <label for="floatingInput">M</label>
    </div>

    <div class="form-floating mb-3 col-md-6">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $nbs; ?>" readonly >
        <label for="floatingInput">NBS</label>
    </div>

    <div class="form-floating mb-3 col-md-6" style="margin-right: 500px;" >
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $hepa; ?>" readonly >
        <label for="floatingInput">Hepa B</label>
    </div>
    
    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $bcl; ?>" readonly >
        <label for="floatingInput">BCL6</label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $penta; ?>" readonly >
        <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">1</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $opv; ?>" readonly >
        <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">1</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $pcv; ?>" readonly >
        <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">1</span></label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $ipv; ?>" readonly >
        <label for="floatingInput">IPV<span class="badge border-primary border-1 text-secondary">1</span></label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $measles; ?>" readonly >
        <label for="floatingInput">Measles</label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $penta1; ?>" readonly >
        <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">2</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $opv2; ?>" readonly >
        <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">2</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $pcv2; ?>" readonly >
        <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">2</span></label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $ipv2; ?>" readonly >
        <label for="floatingInput">IPV<span class="badge border-primary border-1 text-secondary">2</span></label>
    </div>

    <div class="form-floating mb-3 col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $mmr; ?>" readonly >
        <label for="floatingInput">MMR</label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $penta3; ?>" readonly >
        <label for="floatingInput">Penta<span class="badge border-primary border-1 text-secondary">3</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $opv3; ?>" readonly >
        <label for="floatingInput">OPV<span class="badge border-primary border-1 text-secondary">3</span></label>
    </div>

    <div class="form-floating mb-3 col-md-2">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $pcv3; ?>" readonly >
        <label for="floatingInput">PCV<span class="badge border-primary border-1 text-secondary">3</span></label>
    </div>

    </form>


    <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Age in mos</th>
                                        <th scope="col">WT</th>
                                        <th scope="col">MS</th>
                                        <th scope="col">HT</th>
                                        <th scope="col">NS</th>
                                        <th scope="col">MUAC</th>
                                        <th scope="col">MS</th>
                                        <th scope="col">BT</th>
                                        <th scope="col">Temp</th>
                                        <th scope="col">Medicine</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                        $resulte = mysqli_query($conn,"select * from add_immuni") or die ("database error:".mysqli_error($conn));
                                        while($rowe=mysqli_fetch_array($resulte)){
                                            $datass = $rowe['date'];
                                            $child_id =$rowe['child_id'];
                                            $age =$rowe['age'];
                                            $wt =$rowe['wt'];
                                            $ms =$rowe['ms'];
                                            $ht =$rowe['ht'];
                                            $ns =$rowe['ns'];
                                            $muac =$rowe['muac'];
                                            $hs =$rowe['hs'];
                                            $bt =$rowe['bt'];
                                            $temp =$rowe['temp'];
                                            $medicine =$rowe['medicine'];
                                        ?>
                                    <tr>
                                        <th><?php echo $datass ?></th>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $wt ?></td>
                                        <td><?php echo $ms ?></td>
                                        <td><?php echo $ht ?></td>
                                        <td><?php echo $ns ?></td>
                                        <td><?php echo $muac ?></td>
                                        <td><?php echo $hs ?></td>
                                        <td><?php echo $bt ?></td>
                                        <td><?php echo $temp ?></td>
                                        <td><?php echo $medicine ?></td>
                                    </tr>
                                    <?php } ?>
                                    
                                    </tbody>
                                </table>
                                <!-- End Bordered Table -->

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
    header("Location: mwlogin.php");
    exit();
}

?>