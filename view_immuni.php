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
  <style>
  .float-right {
    float: right;
  }
</style>

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
                                include "conn/conn.php";
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

                                <hr>
                                        <div style="display: inline-block ; text-align: end ; margin-bottom: 10px;" >
                                        <button type="button" class="btn btn-success row-md-3 ri-add-circle-fill float-right" data-bs-toggle="modal" data-bs-target="#largeModal">ADD</button>

                                        </div>

                                        <div class="modal fade" id="largeModal" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Info for Immunization</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="modal-body">

                                                                <form action="" method="post" >

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="hidden" name="child_id" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $user_id; ?>" >
                                                                        <label for="floatingInput"> </label>
                                                                    </div>
                                                            
                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="age" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Age in  months</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="number" name="wt" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Wt</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="ms" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">MS</label>
                                                                    </div>
                                                                    
                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="ht" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">HT</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="ns" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">NS</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="muac" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">MUAC</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="hs" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">HS</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="bt" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">BT</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="number" name="temp" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Temp</label>
                                                                    </div>

                                                                    <div class="form-floating mb-3 col-md-12">
                                                                        <input type="text" name="medicine" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Medicine</label>
                                                                    </div>
                                                

                                                                    <center><button type="submit" name="save" class="btn btn-primary">ADD</button></center>
                                                                </form>    
                                                                <?php
                                                                include "conn/conn.php";
                                                                if (isset($_POST['save'])) {
                                                                   
                                                                    $date = date('Y-m-d');
                                                                    $child_id = $_POST['child_id'];
                                                                    $age = $_POST['age'];
                                                                    $wt = $_POST['wt'];
                                                                    $ms = $_POST['ms'];
                                                                    $ht = $_POST['ht'];
                                                                    $ns = $_POST['ns'];
                                                                    $muac = $_POST['muac'];
                                                                    $hs = $_POST['hs'];
                                                                    $bt = $_POST['bt'];
                                                                    $temp = $_POST['temp'];
                                                                    $medicine = $_POST['medicine'];



                                                                    mysqli_query($conn, "INSERT INTO add_immuni (age, wt, ms, ht, ns, muac, hs, bt, temp, medicine, child_id, date) 
                                                                    VALUES ('$age', '$wt', '$ms', '$ht', '$ns', '$muac', '$hs', '$bt', '$temp', '$medicine', '$child_id', '$date')");

                                                                    
                                                                    echo "<script>alert('Saved Successfully!')</script>";
                                                                }
                                                                ?>


                                                            </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        
                                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- End Large Modal-->

                            <!-- End No Labels Form -->


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
                                    include "conn/conn.php";
                                        $resulte = mysqli_query($conn,"SELECT  * FROM add_immuni WHERE child_id = $edit_id ") or die ("database error:".mysqli_error($conn));
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
    header("Location: loggingin.php");
    exit();
}

?>