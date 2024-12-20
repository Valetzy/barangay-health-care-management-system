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
                            
                            <form class="row g-3" action="add_record_prenatal.php" method="post" >
                            <?php 
                                include "conn/conn.php";
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


                            <h5 class="card-title" style="margin-left: 15px;" >Vl. Prenatal Care</h5>

                                    <div style="display: block ; text-align: end; margin-bottom: 10px;" >
                                        <button type="button" class="btn btn-success cow-md-3 ri-add-circle-fill" data-bs-toggle="modal" data-bs-target="#largeModal" >ADD</button>
                                    </div>
                                  <form action="" method="post" >

                                    <div class="modal fade" id="largeModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add Prenatal Care</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <div class="modal-body">

                                                        <h5 class="card-title" style="margin-left: 15px;" >Age of Gestation</h5>

                                                
                                                        
                                                        <div style="display: flex; justify-content: space-evenly; " >
                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="number" name="days" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Days</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="number" name="week" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Weeks</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="number" name="months" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Months</label>
                                                            </div>
                                                        </div>
                                                        
                                                        <h5 class="card-title" style="margin-left: 15px;" >Vital Signs</h5>
                                                        
                                                        <div style="display: flex; justify-content: space-evenly; " >
                                                            <div class="form-floating mb-3 col-md-2">
                                                                <input type="number" name="bp" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">BP</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-2">
                                                                <input type="number" name="wt" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Wt (kg)</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-2">
                                                                <input type="number" name="ht" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Ht (cm)</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-2">
                                                                <input type="number" name="bmi" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">BMI</label>
                                                            </div>
                                                        </div>

                                                        <h5 class="card-title" style="margin-left: 15px;" >Vital Signs</h5>
                                                        
                                                        <div style="display: flex; justify-content: space-evenly; " >
                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="number" name="fh" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">FH (cm)</label>
                                                            </div>

                                                            <div class="form-floating mb-3 col-md-3">
                                                                <input type="number" name="fht" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">FHT (bpm)</label>
                                                            </div>

                                                            <input type="hidden" name="p_idd" value="<?php echo  $edit_id ?>";>
                                                        </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="save" class="btn btn-primary">ADD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                    </form>

                                    <?php
                                    include "conn/conn.php";

                                    if (isset($_POST['save'])) {
                                        $p_id = $_POST['p_idd'];
                                        $days = $_POST['days'];
                                        $week = $_POST['week'];
                                        $months = $_POST['months'];
                                        $bp = $_POST['bp'];
                                        $wt = $_POST['wt'];
                                        $ht = $_POST['ht'];
                                        $bmi = $_POST['bmi'];
                                        $fh = $_POST['fh'];
                                        $fht = $_POST['fht'];
                                        $datess = date('Y-m-d');

                                        mysqli_query($conn, "INSERT INTO add_prenatal (days, week, months, bp, wt, ht, bmi, fh, fht, date, p_id) 
                                                            VALUES ('$days', '$week', '$months', '$bp', '$wt', '$ht', '$bmi', '$fh', '$fht', '$datess', '$p_id')");
                                        
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
                                        include "conn/conn.php";
                                        $resultd = mysqli_query($conn,"SELECT * FROM add_prenatal WHERE p_id='$edit_id'") or die ("database error:".mysqli_error($conn));
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
                                            <td> </td>
                                            <td>L1: <br><br>
                                                L2:<br><br>
                                                L3: </td>
                                            <td> </td>
                                            <td> </td>
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
    header("Location: loggingin.php");
    exit();
}

?>