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
                            <form class="row g-3" action="add_record_familypaln.php" method="post" >
                            <?php 
                                include "conn/conn.php";
                                $edit_id = $_GET['records'];
                                $result = mysqli_query($conn,"SELECT * FROM family_planning WHERE user_id='$edit_id'") or die ("database error:".mysqli_error($conn));

                                while($row=mysqli_fetch_array($result)){
                                    $client = $row['client'];
                                    $philhealth = $row['philhealth'];
                                    $nhts = $row['nhts'];
                                    $pantawid = $row['pantawid'];
                                    $name = $row['name'];
                                    $dateb = $row['dateb'];
                                    $age = $row['age'];
                                    $educ = $row['educ'];
                                    $occupation = $row['occupation'];
                                    $address = $row['address'];
                                    $civil = $row['civil'];
                                    $religion = $row['religion'];
                                    $spouse = $row['spouse'];
                                    $date_birth = $row['date_birth'];
                                    $ageq = $row['ageq'];
                                    $occu = $row['occu'];
                                    $living = $row['living'];
                                    $more = $row['more'];
                                    $income = $row['income'];
                                    $newacceptor = $row['newacceptor'];
                                    $forfp = $row['forfp'];
                                    $otherss = $row['otherss'];
                                    $currentuser = $row['currentuser'];
                                    $reason = $row['reason'];
                                    $effects = $row['effects'];
                                    $method = $row['method'];
                                    $clinic = $row['clinic'];
                                    $restart = $row['restart'];
                                    $coc = $row['coc'];
                                    $pop = $row['pop'];
                                    $injectable = $row['injectable'];
                                    $implant = $row['implant'];
                                    $iud = $row['iud'];
                                    $interval = $row['intervals'];
                                    $partum = $row['partum'];
                                    $condom = $row['condom'];
                                    $bom = $row['bom'];
                                    $bbt = $row['bbt'];
                                    $stm = $row['stm'];
                                    $sdm = $row['sdm'];
                                    $lam = $row['lam'];
                                    $othersss = $row['othersss'];
                                    $severe = $row['severe'];
                                    $history = $row['history'];
                                    $nontrau = $row['nontrau'];
                                    $current = $row['current'];
                                    $chestpain = $row['chestpain'];
                                    $cough = $row['cough'];
                                    $jaundice = $row['jaundice'];
                                    $unexplained = $row['unexplained'];
                                    $intake = $row['intake'];
                                    $clientsmoker = $row['clientsmoker'];
                                    $withdisability = $row['withdisability'];
                                    $abnormalvigina = $row['abnormalvigina'];
                                    $pleasespecify = $row['pleasespecify'];
                                    $pregnanciesg = $row['pregnanciesg'];
                                    $pregnanciesp = $row['pregnanciesp'];
                                    $fullterm = $row['fullterm'];
                                    $abortion = $row['abortion'];
                                    $premature = $row['premature'];
                                    $livingchildren = $row['livingchildren'];
                                    $datedelivery = $row['datedelivery'];
                                    $typedelivery = $row['typedelivery'];
                                }

                                $edit_id = $_GET['records'];
                                $result = mysqli_query($conn,"SELECT * FROM family_plan WHERE user_id='$edit_id'") or die ("database error:".mysqli_error($conn));

                                while($row=mysqli_fetch_array($result)){

                                    $lastperiod = $row['lastperiod'];
                                    $previousperiod = $row['previousperiod'];
                                    $changingmethod = $row['changingmethod'];
                                    $dysmenorrhea = $row['dysmenorrhea'];
                                    $hydatidiform = $row['hydatidiform'];
                                    $ectopic = $row['ectopic'];
                                    $geniticalarea = $row['geniticalarea'];
                                    $ifyesindicate = $row['ifyesindicate'];
                                    $soreulcer = $row['soreulcer'];
                                    $sexually = $row['sexually'];
                                    $hiv_aids = $row['hiv_aids'];
                                    $unplesant = $row['unplesant'];
                                    $approvevisit = $row['approvevisit'];
                                    $domesticviolence = $row['domesticviolence'];
                                    $referedtop = $row['referedtop'];
                                    $referedspecigy = $row['referedspecigy'];
                                    $kg = $row['kg'];
                                    $m = $row['m'];
                                    $mmhg = $row['mmhg'];
                                    $min = $row['min'];
                                    $skinsa = $row['skinsa'];
                                    $CONJUNCTIVA = $row['CONJUNCTIVA'];
                                    $NECK = $row['NECK'];
                                    $BREAST = $row['BREAST'];
                                    $EXTREMITIES = $row['EXTREMITIES'];
                                    $PELVICEXAMINATION = $row['PELVICEXAMINATION'];
                                    $cervicalabnormalities = $row['cervicalabnormalities'];
                                    $cervicalconsistency = $row['cervicalconsistency'];
                                    $tenderness = $row['tenderness'];
                                    $adnexalmass = $row['adnexalmass'];
                                    $uterineposition = $row['uterineposition'];
                                    $uterinedepth = $row['uterinedepth'];



                                }

                            ?>

                                <center>
                                <h5 class="card-title">FAMILY PLANNING CLIENT ASSESSMENT RECORD</h5>
                                </center>

                                <div class="col-md-6">
                                  <input type="text" name="client" class="form-control" placeholder="CLIENT ID" value="CLIENT ID: <?php echo $client ?>" readonly >
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="philhealth" class="form-control" placeholder="PHILHEALTH NO." value="PHILHEALTH NO: <?php echo $philhealth ?>" readonly>
                                </div>

                                <div style="display: flex;">

                                    <div class="form-check" style="margin-right: 20px; margin-bottom: 50px;">
                                        <label class="form-check-label">
                                            NHTS?:
                                        </label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="text" name="philhealth" class="form-control" placeholder="N/A" value="<?php echo $nhts ?>" readonly>
                                    </div>

                                    <div class="form-check" style="margin-right: 20px; margin-left: 50px;">
                                        <label class="form-check-label">
                                            Pantawid Pamilya Pilipino Program(4Ps):
                                        </label>
                                    </div>

                                    <div class="col-md-2">
                                        <input type="text" name="philhealth" class="form-control" placeholder="N/A" value="<?php echo $pantawid ?>" readonly>
                                    </div>

                                </div>

                                <hr>


                                <div class="col-md-7">
                                  <input type="text" name="name" class="form-control" placeholder="NAME OF CLIENT (LastName, GivenName MI)" value=" NAME OF CLIENT: <?php echo $name ?>" readonly>
                                </div>

                                <div class="col-sm-3">
                                  <div style="display: flex;" >
                                    <div style="margin-top:5px; margin-right:5px; font-size: 10px;" >
                                      Date of Birth
                                    </div>
                                    <input type="text" name="dateb" class="form-control" value="<?php echo $dateb ?>" readonly>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <input type="numer" name="age" class="form-control" placeholder="Age" value="Age: <?php echo $age ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="educ" class="form-control" placeholder="Educ. Attain." value="Educ. Attain: <?php echo $educ ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="occupation" class="form-control" placeholder="Occupation" value="Occupation: <?php echo $occupation ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="address" class="form-control" placeholder="Address (No. Street, Barangay, Municipality/City, Province)" value="Address: <?php echo $address ?>" readonly>
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="civil" class="form-control" placeholder="Civil Status" value="<?php echo $civil ?>" readonly>
                                </div>

                                <div class="col-md-3" style="margin-bottom:30px;" >
                                  <input type="text" name="religion" class="form-control" placeholder="Religion" value="Religion: <?php echo $religion ?>" readonly>
                                </div>

                                <div class="col-md-7">
                                  <input type="text" name="spouse" class="form-control" placeholder="NAME OF SPOUSE (LastName, GivenName MI)" value="NAME OF SPOUSE: <?php echo $spouse ?>" readonly>
                                </div>

                                <div class="col-sm-3">
                                  <div style="display: flex;" >
                                    <div style="margin-top:5px; margin-right:5px; font-size: 10px;" >
                                      Date of Birth
                                    </div>
                                    <input type="date" name="date_birth" class="form-control" value="<?php echo $date_birth ?>" readonly>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <input type="text" name="ageq" class="form-control" placeholder="Age" value="Age: <?php echo $ageq ?>" readonly>
                                </div>

                                <div class="col-md-12">
                                  <input type="text" name="occu" class="form-control" placeholder="Occupation" value="Occupation: <?php echo $occu ?>" readonly>
                                </div>
                                
                                <div style="display: flex;" >

                                        <div class="col-sm-5">
                                            <div style="display: flex;" >
                                                <div style="margin-top:5px; margin-right:5px;" >
                                                NO. OF LIVING CHILDREN
                                                </div>
                                                <input type="text" name="living" class="form-control" value="<?php echo $living ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-check" style="margin-right: 20px; margin-left: 50px;">
                                    
                                            <label class="form-check-label">
                                                PLAN TO HAVE MORE CHILDREN
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" name="occu" class="form-control" placeholder="Occupation" value=" <?php echo $more ?>" readonly>
                                        </div>

                                </div>

                                    <div class="col-sm-12">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                                AVERAGE MONTHLY INCOME (₱)
                                            </div>
                                            <input type="text" name="income" class="form-control" value=" <?php echo $income ?>" readonly >
                                        </div>
                                    </div>

                                    <hr>

                                    <h5 class="card-title" style="margin-left: 15px;" >Type of Client</h5>


                                        <div class="form-check" style="margin-right: 10px;">
                                            <input class="form-check-input" name="newacceptor" type="text" id="gridCheck1" value=" <?php echo $newacceptor ?>" readonly>
                                                <label class="form-check-label" for="gridCheck1">
                                                    New Acceptor
                                                </label>
                                        </div>

                                    
                                    <div style="display: flex;">

                                            <div class="form-check" style="margin-right: 10px; ">
                                                <label class="form-check-label" style="margin-right: 100px;">
                                                    Reason_for_FP: 
                                                </label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="Occupation" value=" <?php echo $forfp ?>" readonly>
                                            </div>

                                            <div class="col-md-4" >
                                                <input type="text" name="otherss" class="form-control" placeholder="Others" value="Others: <?php echo $otherss ?>" readonly>
                                            </div>

                                    </div>

                                    <div class="form-check" style="margin-right: 10px;">
                                            <input class="form-check-input" name="currentuser" type="text" id="gridCheck1" value=" <?php echo $currentuser ?>" readonly >
                                                <label class="form-check-label" for="gridCheck1">
                                                    Current User
                                                </label>
                                        </div>

                                    <div style="display: flex;  ">

                                            <div class="form-check" style="margin-right: 65px; ">
                                                <label class="form-check-label" style="margin-right: 100px;">
                                                    Reason: 
                                                </label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $reason ?>" readonly>
                                            </div>

                                            <div class="col-md-4" >
                                                <input type="text" name="effects" class="form-control" placeholder="Side effects" value=" <?php echo $effects ?>" readonly>
                                            </div>


                                    </div>

                                    

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="method" type="text" id="gridCheck1" value=" <?php echo $method ?>" readonly >
                                        <label class="form-check-label" for="gridCheck1">
                                            Changing Method
                                        </label>      
                                    </div>

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="clinic" type="text" id="gridCheck1" value=" <?php echo $clinic ?>" readonly >
                                        <label class="form-check-label" for="gridCheck1">
                                            Changing Clinic
                                        </label>      
                                    </div>

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="restart" type="text" id="gridCheck1" value=" <?php echo $restart ?>" readonly >
                                        <label class="form-check-label" for="gridCheck1">
                                            Dropout / Restart
                                        </label>      
                                    </div>

                                    <h6 style="margin-left: 20px; font-size: 17px; color: gray;" >Method currently used (for Changing Method):</h6>

                                    <div style="display: flex;">

                                        <div>

                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="coc" id="gridCheck1" value=" <?php echo $coc ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        COC
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="pop" id="gridCheck1"  value=" <?php echo $pop ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        POP
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="injectable" id="gridCheck1"  value=" <?php echo $injectable ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Injectable
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="implant" id="gridCheck1" value=" <?php echo $implant ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Implant
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="iud" id="gridCheck1"  value=" <?php echo $iud ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        IUD
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="interval" id="gridCheck1" vvalue=" <?php echo $interval ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Interval
                                                    </label>      
                                                </div>

                                        </div>

                                        <div>

                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="partum" id="gridCheck1" value=" <?php echo $partum ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Post-Partum
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="condom" id="gridCheck1"  value=" <?php echo $condom ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Condom
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="bom" id="gridCheck1" value=" <?php echo $bom ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        BOM/CMM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="bbt" id="gridCheck1" value=" <?php echo $bbt ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        BBT
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="stm" id="gridCheck1" value=" <?php echo $stm ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        STM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="sdm" id="gridCheck1"  value=" <?php echo $sdm ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        SDM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="text" name="lam" id="gridCheck1" value=" <?php echo $lam ?>" readonly
                                                    <label class="form-check-label" for="gridCheck1">
                                                        LAM
                                                    </label>      
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-6" style="margin-bottom: 50px;" >
                                        <input type="text" name="othersss" class="form-control" placeholder="Others Specify" value=" <?php echo $othersss ?>" readonly>
                                    </div>
                                    

                                    <hr>

                                    <h5 class="card-title" style="margin-left: 15px;" >l. MEDICAL HISTORY</h5>

                                    <h6 style="margin-left: 20px; font-size: 17px; color: gray;" >Does the client have any of the following?</h6>
                                    
                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 347px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                severe headaches / migraine
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $severe ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 254px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of stroke / heart attack / migraine
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $history ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 100px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                non-traumatic hematoma / frequent bruising or gum bleeding
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $nontrau ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 200px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                current or history of breast cancer / breast mass
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $current ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 430px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                severe chest pain
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $chestpain ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 346px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                cough for more than 14 days
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $cough ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 500px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                jaundice
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $jaundice ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 340px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                unexplained vaginal discharge
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $unexplained ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 125px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                intake of phenobarbital (anti-seizure) or rifampicin (anti-TB)
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $intake ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 393px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                is the client a SMOKER?
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $clientsmoker ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 453px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                With Disability?
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $withdisability ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 360px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                abnormal vaginal discharge
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $abnormalvigina ?>" readonly>
                                            </div>
                                    </div>

                                    <div class="col-md-8" style="margin-left: 70px; margin-right: 600px;">
                                        <input type="text" name="pleasespecify" class="form-control" placeholder="if YES please specify" value=" <?php echo $pleasespecify ?>" readonly>
                                    </div>

                                    <h5 class="card-title" style="margin-left: 15px;" >ll. OBSTETRICAL HISTORY</h5>

                                    <div style="display: flex" >

                                        <div class="form-check" style="margin-right: 20px; margin-top: 5px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                Number of pregnancies:
                                            </label>
                                        </div>

                                        <div class="col-sm-3">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                            G
                                            </div>
                                            <input type="text" name="pregnanciesg" class="form-control" style="margin-right:15px;"value=" <?php echo $pregnanciesg ?>" readonly>
                                        </div>
                                        </div>

                                        <div class="col-sm-3">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                            P
                                            </div>
                                            <input type="text" name="pregnanciesp" class="form-control" value=" <?php echo $pregnanciesp ?>" readonly>
                                        </div>
                                        </div>

                                    </div>

                                    <div style="display: flex; margin-right: 20px; margin-top: 5px; margin-left: 75px;">

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:20px;" >
                                            Full_term
                                            </div>
                                            <input type="text" name="fullterm" class="form-control" style="margin-right: 20px;" value=" <?php echo $fullterm ?>" readonly >
                                        </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:50px;" >
                                            Abortion
                                            </div>
                                            <input type="text" name="abortion" class="form-control" value=" <?php echo $abortion ?>" readonly >
                                        </div>
                                        </div>

                                    </div>

                                    <div style="display: flex; margin-right: 20px; margin-top: 5px; margin-left: 75px;">

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:10px;"  >
                                            Premature
                                            </div>
                                            <input type="text" name="premature" class="form-control" style="margin-right: 20px;" value=" <?php echo $premature ?>" readonly>
                                        </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                            Living_children
                                            </div>
                                            <input type="text" name="livingchildren" class="form-control" value=" <?php echo $livingchildren ?>" readonly >
                                        </div>
                                        </div>

                                    </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px;" >
                                            Date_of_last_delivery
                                            </div>
                                            <input type="text" name="datedelivery" class="form-control" value=" <?php echo $datedelivery ?>" readonly>
                                        </div>
                                        </div>

                                        <div style="display: flex;">

                                            <div class="form-check" style="margin-right: 100px; margin-left: 50px;">
                                                <label class="form-check-label">
                                                    Type_of_last_delivery
                                                </label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $typedelivery ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px;" >
                                            Last_menstrual_period
                                            </div>
                                            <input type="date" name="lastperiod" class="form-control" value="<?php echo $lastperiod ?>" readonly >
                                        </div>
                                        </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px; " >
                                            Previous_menstrual_period
                                            </div>
                                            <input type="date" name="previousperiod" class="form-control" value="<?php echo $previousperiod ?>" readonly >
                                        </div>
                                        </div>

                                        <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >Method currently used (for Changing Method):</h6>

                                        <div style="display: block; margin-left: 150px; ">

                                        <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $changingmethod ?>" readonly>
                                            </div>

                                    
                                        </div>

                                        <div style="display: block; margin-left: 75px; ">

                                            <div class="form-check" style="margin-right: 10px;">
                                                <input class="form-check-input" name="dysmenorrhea" type="text" id="gridCheck1" value=" <?php echo $dysmenorrhea ?>" readonly >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    Dysmenorrhea
                                                    </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="hydatidiform" type="text" id="gridCheck1" value=" <?php echo $hydatidiform ?>" readonly >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    Hydatidiform mole (within the last 12 months)
                                                    </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="ectopic" type="text" id="gridCheck1" value=" <?php echo $ectopic ?>" readonly >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    History of ectopic pregnancy
                                                    </label>
                                            </div>
                                        </div>

                                        <h5 class="card-title" style="margin-left: 15px;" >lll. RISK FOR SEXUALLY TRANSMITTED INFECTIONS</h5>

                                        <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >Does the client or the client's partner have any of the following?</h6>
                                        
                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 277px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                abnormal discharge from the genitical area
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $geniticalarea ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 100px; margin-left: 150px;">
                                            <label class="form-check-label">
                                                <i>if "YES" please indicate it from:</i>
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $ifyesindicate ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 360px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                sores or ulcer in the genital area
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $soreulcer ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 192px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of treatment for sexually transmitted infections
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $sexually ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 304px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                HIV / AIDS / Pelvic inflammatory disease
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $hiv_aids ?>" readonly>
                                            </div>
                                    </div>

                                    <h5 class="card-title" style="margin-left: 15px;" >lV. RISK FOR VIOLENCE AGAINST WOMEN (VAW)</h5>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 340px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                unplesant relationship with partner
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $unplesant ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 249px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                partner does not approve of the visit to FP clinic
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $approvevisit ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 339px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of domestic violence or VAW
                                            </label>
                                        </div>

                                            <div class="col-md-2">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $domesticviolence ?>" readonly>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 40px; margin-left: 100px;">
                                            <label class="form-check-label">
                                                Referred to:
                                            </label>
                                        </div>

                                            <div style="display: block; " >

                                            <div class="col-md-12">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $referedtop ?>" readonly>
                                            </div>

                                                <div class="col-md-12" style="margin-bottom:30px;" >
                                                    <input type="text" class="form-control" name="referedspecigys" placeholder="Others (Specify)" value=" <?php echo $referedspecigy ?>" readonly>
                                                </div>

                                            </div>

                                    </div>

                                    <h5 class="card-title" style="margin-left: 15px;" >V. PHYSICAL EXAMINATION</h5>
                            
                                            
                                                
                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Weight</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="kg" class="form-control" placeholder="kg" value=" <?php echo $kg ?>" readonly >
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Height</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="m" class="form-control" placeholder="M" value=" <?php echo $m ?>" readonly >
                                                        </div>
                                                    </div>
                                                
                                                
                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Blood pressure</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="mmhg" class="form-control" placeholder="mmHg" value=" <?php echo $mmhg ?>" readonly >
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Pulse rate</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="min" class="form-control" placeholder="/min" value=" <?php echo $min ?>" readonly >
                                                        </div>
                                                    </div>
                                                
                                            
                                            
                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >SKINS:</h6>
                                            
                                    <div style="display: flex;" >
                                        <div style="margin-left:75px ;" >

                                            <div class="col-md-10">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $skinsa ?>" readonly>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >CONJUNCTIVA:</h6>

                                            <div class="col-md-10">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $CONJUNCTIVA ?>" readonly>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >NECK:</h6>

                                            <div class="col-md-10">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $NECK ?>" readonly>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >BREAST:</h6>

                                            <div class="col-md-10">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $BREAST ?>" readonly>
                                            </div>
                                        </div>
                                

                                        <div>

                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >EXTREMITIES</h6>

                                            <div class="col-md-10"  style="margin-left:150px;">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $EXTREMITIES ?>" readonly>
                                            </div>
                                            
                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >PELVIC EXAMINATION</h6>
                                            <i style="margin-left: 150px;" >(For IUD Acceptors)</i>

                                            <div class="col-md-10"  style="margin-left:150px;">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $PELVICEXAMINATION ?>" readonly>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical abnormalities
                                                    </label>
                                            </div>


                                            <div class="col-md-10"  style="margin-left:150px;">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $cervicalabnormalities ?>" readonly>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical consistency
                                                    </label>
                                            </div>
                                            

                                            
                                            <div class="col-md-10"  style="margin-left:200px;">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $cervicalconsistency ?>" readonly>
                                            </div>
                                                        

                                            <div class="form-check" style="margin-left:150px;">
                                                <input class="form-check-input" name="tenderness" type="text" id="gridCheck1" value=" <?php echo $tenderness ?>" readonly >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical tenderness
                                                    </label>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                <input class="form-check-input" name="adnexalmass" type="text" id="gridCheck1" value=" <?php echo $adnexalmass ?>" readonly>
                                                    <label class="form-check-label" for="gridCheck1">
                                                    adnexal mass / tenderness
                                                    </label>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    uterine position
                                                    </label>
                                            </div>

                                            <div class="col-md-3"  style="margin-left:200px;">
                                                <input type="text" name="occu" class="form-control" placeholder="N/A" value=" <?php echo $uterineposition ?>" readonly>
                                            </div>

                                            <div class="form-floating mb-3" style="margin-left:150px; margin-top: 5px; margin-right: 10px;">
                                                <input type="text" class="form-control" name="uterinedepth" id="floatingInput" placeholder="name@example.com" value=" <?php echo $uterinedepth ?>" readonly>
                                                <label for="floatingInput">uterine depth: (cm)</label>
                                            </div>
                                        </div>
                                    </div>

                                
                        </form>

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