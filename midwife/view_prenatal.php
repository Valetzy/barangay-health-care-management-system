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
                            <form class="row g-3" action="add_record_prenatal.php" method="post" >
                            <?php 
                                include "../conn/conn.php";
                                $edit_id = $_GET['records'];
                                $result = mysqli_query($conn,"SELECT * FROM prenatal WHERE user_id='$edit_id'") or die ("database error:".mysqli_error($conn));

                                while($row=mysqli_fetch_array($result)){
                                    $user_id = $row['user_id'];
                                    $buntis = $row['buntis'];
                                    $cell = $row['cell'];
                                    $mother = $row['mother'];
                                    $phic = $row['phic'];
                                    $name = $row['name'];
                                    $age = $row['age']; 
                                    $status = $row['status'];
                                    $religion = $row['religion'];
                                    $address = $row['address'];
                                    $birth = $row['birth'];
                                    $birthplace = $row['birthplace'];
                                    $educ = $row['educ'];
                                    $occu = $row['occu'];
                                    $husband = $row['husband'];
                                    $occuhus = $row['occuhus'];
                                    $food = $row['food'];
                                    $drug = $row['drug'];
                                    $others = $row['others'];
                                    $smoke = $row['smoke'];
                                    $alco = $row['alco'];
                                    $menar = $row['menar'];
                                    $duration = $row['duration'];
                                    $menor = $row['menor'];
                                    $otherss = $row['otherss'];
                                    $nochild = $row['nochild'];
                                    $rank = $row['rank'];
                                    $deceased = $row['deceased'];
                                    $alive = $row['alive'];
                                    $foodalert = $row['foodalert'];
                                    $drugalert = $row['drugalert'];
                                    $illness = $row['illness'];
                                    $accident = $row['accident'];
                                    $hospi = $row['hospi'];
                                    $arti = $row['arti'];
                                    $b = $row['b'];
                                    $c = $row['c'];
                                    $g = $row['g'];
                                    $p = $row['p'];
                                    $a = $row['a'];
                                    $f = $row['f'];
                                    $pp = $row['pp'];
                                    $l = $row['l'];
                                    $lmp = $row['lmp'];
                                    $det = $row['det'];
                                    $ht = $row['ht'];
                                    $edc = $row['edc'];
                                    $blood = $row['blood'];
                                    $vdrl = $row['vdrl'];
                                    $astma = $row['astma'];
                                    $hyper = $row['hyper'];
                                    $cancer = $row['cancer'];
                                    $othersss = $row['othersss'];
                                }

                            ?>

                      <div class="col-md-6">
                        <input type="text" name="buntis" class="form-control" placeholder="BUNTIS PARES" required value="BUNTIS PARES: <?php echo $buntis ?>" readonly >
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="cell" class="form-control" placeholder="CELL #" required value="CELL #: <?php echo $cell ?>" readonly>
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="mother" class="form-control" placeholder="MOTHER" required value="MOTHER: <?php echo $mother ?>" readonly>
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="phic" class="form-control" placeholder="PHIC STATUS" required value="PHIC STATUS: <?php echo $phic ?>" readonly>
                      </div>

                      <center>
                      <h5 class="card-title">PRENATAL RECORD</h5>
                      </center>

                      <div class="col-md-5">
                        <input type="text" name="name" class="form-control" placeholder="Name" required value="Name: <?php echo $name ?>" readonly>
                      </div>

                      <div class="col-md-2">
                        <input type="numer" name="age" class="form-control" placeholder="Age" required value="Age: <?php echo $age ?>" readonly>
                      </div>

                      <div class="col-md-2">
                        <input type="numer" name="status" class="form-control" placeholder="Status" required value="Status: <?php echo $status ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="religion" class="form-control" placeholder="Religion" required value="Religion: <?php echo $religion ?>" readonly >
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="address" class="form-control" placeholder="Address" required value="Address: <?php echo $address ?>" readonly >
                      </div>


                      <div class="col-sm-3">
                        <div style="display: flex;" >
                          <div style="margin-top:5px; margin-right:5px;" >
                            Birthdate
                          </div>
                          <input type="date" name="birth" class="form-control" required value="<?php echo $birth ?>" readonly >
                        </div>
                      </div>
                          

                      <div class="col-md-3">
                        <input type="text" name="birthplace" class="form-control" placeholder="Birth Place" required value="Birth Place: <?php echo $birthplace ?>" readonly >
                      </div>

                      <div class="col-md-8">
                        <input type="text" name="educ" class="form-control" placeholder="Educational Attainment" required value="<?php echo $educ ?>" readonly >
                      </div>

                      <div class="col-md-4">
                        <input type="text" name="occu" class="form-control" placeholder="Occupation" required value="Occupation: <?php echo $occu ?>" readonly >
                      </div>

                      <div class="col-md-8">
                        <input type="text" name="husband" class="form-control" placeholder="Husband" required value="Husband: <?php echo $husband ?>" readonly >
                      </div>

                      <div class="col-md-4">
                        <input type="text" name="occuh" class="form-control" placeholder="Occupation" required value="Occupation: <?php echo $occuhus ?>" readonly >
                      </div>

                      <h5 class="card-title" style="margin-left: 15px;" >l. Personal / Social History</h5>

                      <h6 style="margin-left: 5px; font-size: 20px; color: gray;" ><b>History of Allergy</b></h6>

                      <div class="col-md-4">
                        <input type="text" class="form-control" name="food" placeholder="Foods" value="Foods: <?php echo $food ?>" readonly>
                      </div>

                      <div class="col-md-4">
                        <input type="text" class="form-control" name="drug" placeholder="Drugs" value="Drugs: <?php echo $drug ?>" readonly>
                      </div>

                      <div class="col-md-4">
                        <input type="text" class="form-control" name="other" placeholder="Others" value="Others: <?php echo $others ?>" readonly>
                      </div>

                      <div class="col-md-6">
                        <input type="text" class="form-control" name="smoke" placeholder="Smoker: Brand Specify" value="Smoker: <?php echo $smoke ?>" readonly>
                      </div>

                      <div class="col-md-6">
                        <input type="text" class="form-control" name="alco" placeholder="Alcoholic Drinker: Specicy" value="Alcoholic Drinker: <?php echo $alco ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="menar" class="form-control" placeholder="Menarche Age" value="Menarche Age: <?php echo $menar ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="duration" class="form-control" placeholder="Duration" value="Duration: <?php echo $duration ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="menorr" class="form-control" placeholder="Menorrea" value="Menorrea: <?php echo $menor ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="others" class="form-control" placeholder="Others, Specify" value="Others: <?php echo $otherss ?>" readonly>
                      </div>

                      <h5 class="card-title" style="margin-left: 15px;" >ll. Family History</h5>

                      <div class="col-md-3">
                        <input type="text" name="nochild" class="form-control" placeholder="No. of Children" value="No. of Children: <?php echo $nochild ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="rank" class="form-control" placeholder="Rank" value="Rank: <?php echo $rank ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="deceased" class="form-control" placeholder="Deceased" value="Deceased: <?php echo $deceased ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="alive" class="form-control" placeholder="Alive" value="Alive: <?php echo $alive ?>" readonly>
                      </div>

                      <div style="display: flex">

                          <div class="form-check" style="margin-left: 76px;">
                            <input class="form-check-input" name="asthma" type="text" value="<?php echo $astma ?>" readonly>
                              <label class="form-check-label">
                                Asthma
                              </label>
                              
                          </div>

                          <div class="form-check" style="margin-left: 76px;">
                            <input class="form-check-input" name="hyper" type="text" value="<?php echo $hyper ?>" readonly>
                              <label class="form-check-label">
                                Hypertension
                              </label>

                          </div>

                          <div class="form-check" style="margin-left: 76px;">
                            <input class="form-check-input" name="cancer" type="text" value="<?php echo $cancer ?>" readonly>
                              <label class="form-check-label">
                                Cancer
                              </label>
                              
                          </div>

                          <div class="col-md-5" style="margin-left: 50px;">
                            <input type="text" name="otherss" class="form-control" placeholder="Others, Specify" value="Others: <?php echo $othersss ?>" readonly>
                          </div>

                      </div>

                          <div class="col-md-6">
                            <input type="text" name="foodalert" class="form-control" placeholder="Food Allergy: Specify" value="Food Allergy: <?php echo $foodalert ?>" readonly>
                          </div>

                          <div class="col-md-6">
                            <input type="text" name="drugalert" class="form-control" placeholder="Durg Allergy: Specify" value="Durg Allergy: <?php echo $drugalert ?>" readonly>
                          </div>

                      <h5 class="card-title" style="margin-left: 15px;" >lll. Past History</h5>

                      <div class="col-md-10" style="margin-left: 70px;">
                        <input type="text" name="illness" class="form-control" placeholder="Illness" value="Illness: <?php echo $illness ?>" readonly>
                      </div>

                      <div class="col-md-5" style="margin-left: 70px;">
                        <input type="text" name="acci" class="form-control" placeholder="Accident" value="Accident: <?php echo $accident ?>" readonly>
                      </div>

                      <div class="col-md-5">
                        <input type="text" name="hospi" class="form-control" placeholder="Hospitalization" value="Hospitalization: <?php echo $hospi ?>" readonly>
                      </div>

                      <h5 class="card-title" style="margin-left: 15px;" >lV. Family Planning History</h5>

                      <div class="col-md-4" style="margin-left: 70px;">
                        <input type="text" name="a" class="form-control" placeholder="a. Artificial" value="a. Artificial: <?php echo $arti ?>" readonly>
                      </div>

                      <div class="col-md-4" >
                        <input type="text" name="b" class="form-control" placeholder="b. Natural" value="b. Natural: <?php echo $b ?>" readonly>
                      </div>

                      <div class="col-md-3">
                        <input type="text" name="c" class="form-control" placeholder="c. Others" value=" c. Others: <?php echo $c ?>" readonly>
                      </div>

                      <h5 class="card-title" style="margin-left: 15px;" >V. Obstetrical History</h5>

                      <h6 style="margin-left: 50px; font-size: 20px; color: gray;" ><b>OB Code</b></h6>

                          <div class="col-md-1" style="margin-left: 70px;">
                            <input type="text" name="g" class="form-control" placeholder="G" value="G: <?php echo $g ?>" readonly>
                          </div>

                          <div class="col-md-1" >
                            <input type="text" name="p" class="form-control" placeholder="P" value="P: <?php echo $p ?>" readonly>
                          </div>

                          <div class="col-md-1" >
                            <input type="text" name="aa" class="form-control" placeholder="A" value="A: <?php echo $a ?>" readonly>
                          </div>

                          <div class="col-md-1" >
                            <input type="text" name="f" class="form-control" placeholder="F" value="F: <?php echo $f ?>" readonly>
                          </div>

                          <div class="col-md-1" >
                            <input type="text" name="pp" class="form-control" placeholder="P" value="P: <?php echo $pp ?>" readonly>
                          </div>

                          <div class="col-md-1" style="margin-right: 300px;" >
                            <input type="text" name="l" class="form-control" placeholder="L" value="L: <?php echo $l ?>" readonly>
                          </div>

                          <div class="col-md-3"  style="margin-left: 70px;" >
                            <input type="text" name="lmp" class="form-control" placeholder="LMP" value="LMP: <?php echo $lmp ?>" readonly>
                          </div>

                          <div class="col-md-3" >
                            <input type="text" name="det" class="form-control" placeholder="Hgb. Det" value="Hgb. Det: <?php echo $det ?>" readonly>
                          </div>

                          <div class="col-md-3" >
                            <input type="text" name="ht" class="form-control" placeholder="Ht" value="Ht: <?php echo $ht ?>" readonly>
                          </div>

                          <div class="col-md-3"  style="margin-left: 70px;" >
                            <input type="text" name="edc" class="form-control" placeholder="EDC" value="EDC: <?php echo $edc ?>" readonly>
                          </div>

                          <div class="col-md-3" >
                            <input type="text" name="blood" class="form-control" placeholder="Blood Type" value="Blood Type: <?php echo $blood ?>" readonly>
                          </div>

                          <div class="col-md-3" >
                            <input type="text" name="vdrl" class="form-control" placeholder="VDRL" value="VDRL: <?php echo $vdrl ?>" readonly>
                          </div>

                      </form><!-- End No Labels Form -->


                              <form action="" method="post" >
                                    <div style="display: block ; text-align: end ; margin-bottom: 10px;" >
                                        <button type="button" class="btn btn-success row-md-3 ri-add-circle-fill" data-bs-toggle="modal" data-bs-target="#largeModal" >ADD</button>
                                    </div>

                                    <div class="modal fade" id="largeModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">----</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <div class="modal-body">
                                                        
                                                          <center><h5 class="card-title">Form</h5></center>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="gravity" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Gravidity</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="ttimmnuni" placeholder="name@example.com" required >
                                                                <label for="floatingInput">TT Immunization</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="parity" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Parity</label>
                                                            </div>
                                                        
                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="date" class="form-control" id="floatingInput" name="dateofdelivery" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Date of Delivery</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="typeofdelivery" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Type of Delivery</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="managename" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Manage by Name</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="professional" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Professional</label>
                                                            </div>
                                                        
                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="assisted" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Assisted By</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" class="form-control" id="floatingInput" name="place" placeholder="name@example.com" required >
                                                                <label for="floatingInput">Place</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <textarea class="form-control" placeholder="Leave a comment here" name="remarks" id="floatingTextarea" style="height: 100px;" required ></textarea>
                                                                <label for="floatingInput">Remarks</label>
                                                            </div>

                                                            <input type="hidden" name="p_id" value="<?php echo $user_id ?>" >
                                                        </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                  </form>  

                                  <?php


                                  if (isset($_POST['submit'])) {
                                      $p_id = $_POST['p_id'];
                                      $gravity = $_POST['gravity'];
                                      $ttimmnuni = $_POST['ttimmnuni'];
                                      $parity = $_POST['parity'];
                                      $dateofdelivery = $_POST['dateofdelivery'];
                                      $typeofdelivery = $_POST['typeofdelivery'];
                                      $managename = $_POST['managename'];
                                      $professional = $_POST['professional'];
                                      $assisted = $_POST['assisted'];
                                      $place = $_POST['place'];
                                      $remarks = $_POST['remarks'];

                                      mysqli_query($conn, "INSERT INTO add_prenatal_midwife (p_id, gravity, ttimmnuni, parity, dateofdelivery, typeofdelivery, managename, professional, assisted, place, remarks) 
                                                          VALUES ('$p_id','$gravity', '$ttimmnuni', '$parity', '$dateofdelivery', '$typeofdelivery', '$managename', '$professional', '$assisted', '$place', '$remarks')");

                                      echo "<script>alert('Saved Successfully!')</script>";
                                  }
                                  ?>


                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Gravidity</th>
                                            <th scope="col">TT Immunization</th>
                                            <th scope="col">Parity</th>
                                            <th scope="col">Date of Delivery</th>
                                            <th scope="col">Type of Delivery</th>
                                            <th scope="col">Manage by Name</th>
                                            <th scope="col">Professional</th>
                                            <th scope="col">Assisted</th>
                                            <th scope="col">Place</th>
                                            <th scope="col">Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        
                                        $resultr = mysqli_query($conn,"SELECT * FROM add_prenatal_midwife WHERE p_id='$edit_id'") or die ("database error:".mysqli_error($conn));
                                        while($rowr=mysqli_fetch_array($resultr)){
                                          $gravity = $rowr['gravity'];
                                          $ttimmnuni = $rowr['ttimmnuni'];
                                          $parity = $rowr['parity'];
                                          $dateofdelivery = $rowr['dateofdelivery'];
                                          $typeofdelivery = $rowr['typeofdelivery'];
                                          $managename = $rowr['managename'];
                                          $professional = $rowr['professional'];
                                          $assisted = $rowr['assisted'];
                                          $place = $rowr['place'];
                                          $remarks = $rowr['remarks'];

                                        ?>

                                        <tr>
                                            <th><?php echo $gravity ?></th>
                                            <td><?php echo $ttimmnuni ?></td>
                                            <td><?php echo $parity ?></td>
                                            <td><?php echo $dateofdelivery ?></td>
                                            <td><?php echo $typeofdelivery ?></td>
                                            <td><?php echo $managename ?></td>
                                            <td><?php echo $professional ?></td>
                                            <td><?php echo $assisted ?></td>
                                            <td><?php echo $place ?></td>
                                            <td><?php echo $remarks ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- End Bordered Table -->

                                    <h5 class="card-title" style="margin-left: 15px;" >Vl. Prenatal Care</h5>

                                    <form action="" method="post" >
                                    <div style="display: block ; text-align: end ; margin-bottom: 10px;" >
                                        <button type="button" class="btn btn-success row-md-3 ri-add-circle-fill" data-bs-toggle="modal" data-bs-target="#haha" >ADD</button>
                                    </div>
                                  

                                    <div class="modal fade" id="haha" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add Prenatal Care</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <div class="modal-body">

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <input type="text" name="ttinjection" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">TT Injection</label>
                                                            </div>

                                                        <h5 class="card-title" style="margin-left: 15px;" >Leopold's Maneuver</h5>
                                                        
                                                        <div style="display: flex; justify-content: space-evenly;" >
                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="text" name="l1" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">L1</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="text" name="l2" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">L2</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="text" name="l3" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">L3</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="text" name="l4" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">L4</label>
                                                            </div>

                                                        </div>
                                                        
                                                            <div class="form-floating mb-3 col-md-12">
                                                                <textarea class="form-control" name="complaintsa" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                                                <label for="floatingInput">Complaints</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-12">
                                                                <textarea class="form-control" name="medication" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                                                <label for="floatingInput">Medication / Remarks</label>
                                                            </div>

                                                            <input type="hidden" name="id_p" value="<?php echo $edit_id ?>" >


                                                        </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="done" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    </form>
                                    <?php

                                    if (isset($_POST['done'])) {
                                      $id_p = $_POST['id_p'];
                                      $ttinjection = $_POST['ttinjection'];
                                      $l1 = $_POST['l1'];
                                      $l2 = $_POST['l2'];
                                      $l3 = $_POST['l3'];
                                      $l4 = $_POST['l4'];
                                      $complaintsa = $_POST['complaintsa'];
                                      $medication = $_POST['medication'];

                                      mysqli_query($conn, "INSERT INTO add_prenatal_table (id_p, ttinjection, l1, l2, l3, l4, complaintsa,medication) 
                                                          VALUES ('$id_p','$ttinjection', '$l1', '$l2', '$l3', '$l4', '$complaintsa', '$medication')");

                                      echo "<script>alert('Saved Successfully!')</script>";
                                  }
                                  ?>



                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">AOG/th>
                                            <th scope="col">Vital Signs</th>
                                            <th scope="col">FHT</th>
                                            <th scope="col">TT Injection</th>
                                            <th scope="col">Leopold's Maneuver</th>
                                            <th scope="col">Complaints</th>
                                            <th scope="col">Medication / Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                        $resultd = mysqli_query($conn,"SELECT * FROM add_prenatal INNER JOIN add_prenatal_table ON add_prenatal.p_id = add_prenatal_table.id_p WHERE p_id='$edit_id'") or die ("database error:".mysqli_error($conn));
                                        while($rowd=mysqli_fetch_array($resultd)){
                                            $datass = $rowd['date'];
                                            $days = $rowd['days'];
                                            $week = $rowd['week'];
                                            $months = $rowd['months'];
                                            $bp = $rowd['bp'];
                                            $wt = $rowd['wt'];
                                            $ht = $rowd['ht'];
                                            $bmi = $rowd['bmi'];
                                            $fh = $rowd['fh'];
                                            $fht = $rowd['fht'];

                                            $ttinjection = $rowd['ttinjection'];
                                            $l1 = $rowd['l1'];
                                            $l2 = $rowd['l2'];
                                            $l3 = $rowd['l3'];
                                            $l4 = $rowd['l4'];
                                            $complaintsa = $rowd['complaintsa'];
                                            $medication = $rowd['medication'];


                                        ?>
                                        <tr>
                                            <th><?php echo $datass; ?></th>
                                            <td>Days: <?php echo $days; ?><br><br>
                                                Wks: <?php echo $week; ?><br><br>
                                                Mos: <?php echo $months; ?></td>
                                            <td>BP: <?php echo $bp; ?><br><br>
                                                Wt: <?php echo $wt; ?><br><br>
                                                Ht: <?php echo $ht; ?>
                                                BMI: <?php echo $bmi; ?></td>
                                            <td>FH: <?php echo $fh; ?><br><br>
                                                FHT: <?php echo $fht; ?><br><br></td>
                                            <td><?php echo $ttinjection; ?></td>
                                            <td>L1: <?php echo $l1; ?><br><br>
                                                L2: <?php echo $l2; ?><br><br>
                                                L3: <?php echo $l3; ?></td>
                                            <td><?php echo $complaintsa; ?></td>
                                            <td><?php echo $medication; ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- End Bordered Table -->


                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            

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
  <script>
    function toggleInput() {
        var checkfood = document.getElementById("foody");
        var checkdrug = document.getElementById("drugy");
        var checksmoke = document.getElementById("smoke");
        var checkdrink = document.getElementById("drinker");
        var checksoks = document.getElementById("soks");
        var checkdrn = document.getElementById("drn");
        

        var inputfood = document.getElementById("food");
        var inputdrug = document.getElementById("drugs");
        var inputsmoke = document.getElementById("smokey");
        var inputdrink = document.getElementById("drinkery");
        var inputsok = document.getElementById("sok");
        var inputdrnk = document.getElementById("drnk");
        

        // Enable or disable the input text based on the checkbox state
        inputfood.disabled = !checkfood.checked;

        inputdrug.disabled = !checkdrug.checked;

        inputsmoke.disabled = !checksmoke.checked;

        inputdrink.disabled = !checkdrink.checked;

        inputsok.disabled = !checksoks.checked;

        inputdrnk.disabled = !checkdrn.checked;


    }
</script>
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