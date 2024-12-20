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

            <form class="row g-3" action="add_record_familypaln.php" method="post" >

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> </h5>

                           
                        

                                <center>
                                <h5 class="card-title">FAMILY PLANNING CLIENT ASSESSMENT RECORD</h5>
                                </center>

                                <div class="col-md-6">
                                  <input type="text" name="client" class="form-control" placeholder="CLIENT ID">
                                </div>

                                <div class="col-md-6">
                                  <input type="number" name="philhealth" class="form-control" placeholder="PHILHEALTH NO.">
                                </div>

                                <div style="display: flex;">

                                    <div class="form-check" style="margin-right: 20px; margin-bottom: 50px;">
                                        <label class="form-check-label">
                                            NHTS?:
                                        </label>
                                    </div>

                                    <div class="col-md-2">
                                    <select id="inputState" name="nhts" class="form-select">
                                        <option selected disabled>Select</option>
                                        <option value="Yes" >Yes</option>
                                        <option value="No" >No</option>
                                    </select>
                                    </div>

                                    <div class="form-check" style="margin-right: 20px; margin-left: 50px;">
                                        <label class="form-check-label">
                                            Pantawid Pamilya Pilipino Program(4Ps):
                                        </label>
                                    </div>

                                    <div class="col-md-2">
                                    <select id="inputState" name="pantawid" class="form-select">
                                        <option selected disabled>Select</option>
                                        <option value="Yes" >Yes</option>
                                        <option value="No" >No</option>
                                    </select>
                                    </div>

                                </div>

                                <hr>


                                <div class="col-md-7">
                                  <input type="text" name="name" class="form-control" placeholder="NAME OF CLIENT (LastName, GivenName MI)">
                                </div>

                                <div class="col-sm-3">
                                  <div style="display: flex;" >
                                    <div style="margin-top:5px; margin-right:5px; font-size: 10px;" >
                                      Date of Birth
                                    </div>
                                    <input type="date" name="dateb" class="form-control" >
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <input type="numer" name="age" class="form-control" placeholder="Age">
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="educ" class="form-control" placeholder="Educ. Attain.">
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="occupation" class="form-control" placeholder="Occupation">
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="address" class="form-control" placeholder="Address (No. Street, Barangay, Municipality/City, Province)">
                                </div>

                                        <div class="col-md-3">
                                        <select id="inputState" name="civil" class="form-select">
                                            <option selected disabled>Civil Status</option>
                                            <option value="Single" >Single</option>
                                            <option value="Married" >Married</option>
                                        </select>
                                        </div>

                                <div class="col-md-3" style="margin-bottom:30px;" >
                                  <input type="text" name="religion" class="form-control" placeholder="Religion">
                                </div>

                                <div class="col-md-7">
                                  <input type="text" name="spouse" class="form-control" placeholder="NAME OF SPOUSE (LastName, GivenName MI)">
                                </div>

                                <div class="col-sm-3">
                                  <div style="display: flex;" >
                                    <div style="margin-top:5px; margin-right:5px; font-size: 10px;" >
                                      Date of Birth
                                    </div>
                                    <input type="date" name="date_birth" class="form-control" >
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <input type="number" name="ageq" class="form-control" placeholder="Age">
                                </div>

                                <div class="col-md-12">
                                  <input type="text" name="occu" class="form-control" placeholder="Occupation">
                                </div>
                                
                                <div style="display: flex;" >

                                        <div class="col-sm-5">
                                            <div style="display: flex;" >
                                                <div style="margin-top:5px; margin-right:5px;" >
                                                NO. OF LIVING CHILDREN
                                                </div>
                                                <input type="text" name="living" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-check" style="margin-right: 20px; margin-left: 50px;">
                                    
                                            <label class="form-check-label">
                                                PLAN TO HAVE MORE CHILDREN
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                        <select id="inputState" name="more" class="form-select">
                                            <option selected disabled>Select</option>
                                            <option value="Yes" >Yes</option>
                                            <option value="No" >No</option>
                                        </select>
                                        </div>

                                </div>

                                    <div class="col-sm-12">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                                AVERAGE MONTHLY INCOME (₱)
                                            </div>
                                            <input type="number" name="income" class="form-control" >
                                        </div>
                                    </div>

                                    <hr>

                                    <h5 class="card-title" style="margin-left: 15px;" >Type of Client</h5>


                                        <div class="form-check" style="margin-right: 10px;">
                                            <input class="form-check-input" name="newacceptor" type="checkbox" id="gridCheck1" value="✓" >
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
                                            <select id="inputState" name="forfp" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="spacing" >spacing</option>
                                                <option value="limiting" >limiting</option>
                                            </select>
                                            </div>

                                            <div class="col-md-4" >
                                                <input type="text" name="otherss" class="form-control" placeholder="Others">
                                            </div>

                                    </div>

                                    <div class="form-check" style="margin-right: 10px;">
                                            <input class="form-check-input" name="currentuser" type="checkbox" id="gridCheck1" value="✓" >
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
                                            <select id="inputState" name="reason" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="spacing" >spacing</option>
                                                <option value="limiting" >limiting</option>
                                            </select>
                                            </div>

                                            <div class="col-md-4" >
                                                <input type="text" name="effects" class="form-control" placeholder="Side effects">
                                            </div>


                                    </div>

                                    

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="method" type="checkbox" id="gridCheck1" value="✓" >
                                        <label class="form-check-label" for="gridCheck1">
                                            Changing Method
                                        </label>      
                                    </div>

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="clinic" type="checkbox" id="gridCheck1" value="✓" >
                                        <label class="form-check-label" for="gridCheck1">
                                            Changing Clinic
                                        </label>      
                                    </div>

                                    <div class="form-check" style="margin-left:70px; ">
                                        <input class="form-check-input" name="restart" type="checkbox" id="gridCheck1" value="✓" >
                                        <label class="form-check-label" for="gridCheck1">
                                            Dropout / Restart
                                        </label>      
                                    </div>

                                    <h6 style="margin-left: 20px; font-size: 17px; color: gray;" >Method currently used (for Changing Method):</h6>

                                    <div style="display: flex;">

                                        <div>

                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="coc" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        COC
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="pop" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        POP
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="injectable" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Injectable
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="implant" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Implant
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="iud" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        IUD
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="interval" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Interval
                                                    </label>      
                                                </div>

                                        </div>

                                        <div>

                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="partum" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Post-Partum
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="condom" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Condom
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="bom" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        BOM/CMM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="bbt" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        BBT
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="stm" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        STM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="sdm" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        SDM
                                                    </label>      
                                                </div>
                                                <div class="form-check" style="margin-left:70px; ">
                                                    <input class="form-check-input" type="checkbox" name="lam" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                        LAM
                                                    </label>      
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-6" style="margin-bottom: 50px;" >
                                        <input type="text" name="othersss" class="form-control" placeholder="Others Specify">
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
                                            <select id="inputState" name="severe" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 254px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of stroke / heart attack / migraine
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="history" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 100px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                non-traumatic hematoma / frequent bruising or gum bleeding
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="nontrau" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 200px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                current or history of breast cancer / breast mass
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="current" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 430px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                severe chest pain
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="chestpain" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 346px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                cough for more than 14 days
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="cough" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 500px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                jaundice
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="jaundice" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 340px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                unexplained vaginal discharge
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="unexplained" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 125px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                intake of phenobarbital (anti-seizure) or rifampicin (anti-TB)
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="intake" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 393px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                is the client a SMOKER?
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="clientsmoker" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 453px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                With Disability?
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="withdisability" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 360px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                abnormal vaginal discharge
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="abnormalvigina" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div class="col-md-8" style="margin-left: 70px; margin-right: 600px;">
                                        <input type="text" name="pleasespecify" class="form-control" placeholder="if YES please specify">
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
                                            <input type="text" name="pregnanciesg" class="form-control" style="margin-right:15px;">
                                        </div>
                                        </div>

                                        <div class="col-sm-3">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                            P
                                            </div>
                                            <input type="text" name="pregnanciesp" class="form-control" >
                                        </div>
                                        </div>

                                    </div>

                                    <div style="display: flex; margin-right: 20px; margin-top: 5px; margin-left: 75px;">

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:20px;" >
                                            Full_term
                                            </div>
                                            <input type="text" name="fullterm" class="form-control" style="margin-right: 20px;" >
                                        </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:50px;" >
                                            Abortion
                                            </div>
                                            <input type="text" name="abortion" class="form-control" >
                                        </div>
                                        </div>

                                    </div>

                                    <div style="display: flex; margin-right: 20px; margin-top: 5px; margin-left: 75px;">

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:10px;" >
                                            Premature
                                            </div>
                                            <input type="text" name="premature" class="form-control" style="margin-right: 20px;">
                                        </div>
                                        </div>

                                        <div class="col-sm-4">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px;" >
                                            Living_children
                                            </div>
                                            <input type="text" name="livingchildren" class="form-control" >
                                        </div>
                                        </div>

                                    </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px;" >
                                            Date_of_last_delivery
                                            </div>
                                            <input type="date" name="datedelivery" class="form-control" >
                                        </div>
                                        </div>

                                        <div style="display: flex;">

                                            <div class="form-check" style="margin-right: 100px; margin-left: 50px;">
                                                <label class="form-check-label">
                                                    Type_of_last_delivery
                                                </label>
                                            </div>

                                            <div class="col-md-2">
                                            <select id="inputState" name="typedelivery" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Vaginal" >Vaginal</option>
                                                <option value="Cesarean Section" >Cesarean Section</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px;" >
                                            Last_menstrual_period
                                            </div>
                                            <input type="date" name="lastperiod" class="form-control" >
                                        </div>
                                        </div>

                                        <div class="col-sm-7">
                                        <div style="display: flex;" >
                                            <div style="margin-top:5px; margin-right:5px; margin-left:75px; " >
                                            Previous_menstrual_period
                                            </div>
                                            <input type="date" name="previousperiod" class="form-control" >
                                        </div>
                                        </div>

                                        <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >Method currently used (for Changing Method):</h6>

                                        <div style="display: block; margin-left: 150px; ">

                                            <div class="col-md-2">
                                                <select id="inputState" name="changingmethod" class="form-select">
                                                    <option selected disabled>Select</option>
                                                    <option value="scanty (1-2 pads per day)" >scanty (1-2 pads per day)</option>
                                                    <option value="moderate (3-5 pads per day)" >moderate (3-5 pads per day)</option>
                                                    <option value="heavy ( >5 pads per day)" >heavy ( >5 pads per day)</option>
                                                </select>
                                                </div>
                                            </div>

                                    
                                        </div>

                                        <div style="display: block; margin-left: 75px; ">

                                            <div class="form-check" style="margin-right: 10px;">
                                                <input class="form-check-input" name="dysmenorrhea" type="checkbox" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    Dysmenorrhea
                                                    </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="hydatidiform" type="checkbox" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    Hydatidiform mole (within the last 12 months)
                                                    </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="ectopic" type="checkbox" id="gridCheck1" value="✓" >
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
                                            <select id="inputState" name="geniticalarea" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 100px; margin-left: 150px;">
                                            <label class="form-check-label">
                                                <i>if "YES" please indicate it from:</i>
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="ifyesindicate" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 360px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                sores or ulcer in the genital area
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="soreulcer" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 192px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of treatment for sexually transmitted infections
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="sexually" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 304px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                HIV / AIDS / Pelvic inflammatory disease
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="hiv_aids" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
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
                                            <select id="inputState" name="unplesant" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 249px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                partner does not approve of the visit to FP clinic
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="approvevisit" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 339px; margin-left: 50px;">
                                            <label class="form-check-label">
                                                history of domestic violence or VAW
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select id="inputState" name="domesticviolence" class="form-select">
                                                <option selected disabled>Select</option>
                                                <option value="Yes" >Yes</option>
                                                <option value="No" >No</option>
                                            </select>
                                            </div>
                                    </div>

                                    <div style="display: flex;">

                                        <div class="form-check" style="margin-right: 40px; margin-left: 100px;">
                                            <label class="form-check-label">
                                                Referred to:
                                            </label>
                                        </div>

                                            <div style="display: block; " >

                                                <div class="form-floating mb-3">
                                                        <select class="form-select" name="referedtop" id="floatingSelect" aria-label="Floating label select example">
                                                            <option selected disabled>Select</option>
                                                            <option value="DSWD">DSWD</option>
                                                            <option value="WCPU">WCPU</option>
                                                            <option value="NGOs">NGOs</option>
                                                        </select>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom:30px;" >
                                                    <input type="text" class="form-control" name="referedspecigys" placeholder="Others (Specify)">
                                                </div>

                                            </div>

                                    </div>

                                    <h5 class="card-title" style="margin-left: 15px;" >V. PHYSICAL EXAMINATION</h5>
                            
                                            
                                                
                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Weight</label>
                                                        <div class="col-sm-3">
                                                            <input type="number" name="kg" class="form-control" placeholder="kg" >
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Height</label>
                                                        <div class="col-sm-3">
                                                            <input type="number" name="m" class="form-control" placeholder="M" >
                                                        </div>
                                                    </div>
                                                
                                                
                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Blood pressure</label>
                                                        <div class="col-sm-3">
                                                            <input type="number" name="mmhg" class="form-control" placeholder="mmHg" >
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3" style="margin-left: 75px;" >
                                                        <label for="inputText" class="col-sm-1 col-form-label">Pulse rate</label>
                                                        <div class="col-sm-3">
                                                            <input type="number" name="min" class="form-control" placeholder="/min" >
                                                        </div>
                                                    </div>
                                                
                                            
                                            
                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >SKINS:</h6>
                                            
                                    <div style="display: flex;" >
                                        <div style="margin-left:75px ;" >

                                            <div class="form-floating mb-3">
                                                    <select class="form-select" name="skinsa" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled >Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="pale">pale</option>
                                                        <option value="yellowish">yellowish</option>
                                                        <option value="hematoma">hematoma</option>
                                                    </select>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >CONJUNCTIVA:</h6>

                                            <div class="form-floating mb-3">
                                                    <select class="form-select" name="CONJUNCTIVA" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="pale">pale</option>
                                                        <option value="yellowish">yellowish</option>
                                                    </select>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >NECK:</h6>

                                            <div class="form-floating mb-3">
                                                    <select class="form-select" name="NECK" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="neck mass">neck mass</option>
                                                        <option value="enlarged lymph nodes">enlarged lymph nodes</option>
                                                    </select>
                                            </div>

                                            <h6 style="font-size: 17px; color: gray;" >BREAST:</h6>

                                            <div class="form-floating mb-3">
                                                    <select class="form-select" name="BREAST" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="mass">mass</option>
                                                        <option value="nipple discharge">nipple discharge</option>
                                                    </select>
                                            </div>
                                        </div>
                                

                                        <div>

                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >EXTREMITIES</h6>

                                            <div class="form-floating mb-3" style="margin-left: 150px;">
                                                    <select class="form-select" name="EXTREMITIES" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="edema">edema</option>
                                                        <option value="varicosities">varicosities</option>
                                                    </select>
                                            </div>
                                            
                                            <h6 style="margin-left: 75px; font-size: 17px; color: gray;" >PELVIC EXAMINATION</h6>
                                            <i style="margin-left: 150px;" >(For IUD Acceptors)</i>

                                            <div class="form-floating mb-3" style="margin-left: 150px;">
                                                    <select class="form-select" name="PELVICEXAMINATION" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="normal">normal</option>
                                                        <option value="mass">mass</option>
                                                        <option value="abnormal discharge">abnormal discharge</option>
                                                        <option value="cervical abnormalities">cervical abnormalities</option>
                                                    </select>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical abnormalities
                                                    </label>
                                            </div>


                                            <div class="form-floating mb-3" style="margin-left:200px;">
                                                    <select class="form-select" name="cervicalabnormalities" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="wants">wants</option>
                                                        <option value="polyp or cyst">polyp or cyst</option>
                                                        <option value="inflammation">inflammation</option>
                                                        <option value="bloody discharge">bloody discharge</option>
                                                    </select>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical consistency
                                                    </label>
                                            </div>
                                            

                                            
                                            <div class="form-floating mb-3" style="margin-left:200px;">
                                                    <select class="form-select" name="cervicalconsistency" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="firm">firm</option>
                                                        <option value="soft">soft</option>
                                                    </select>
                                            </div>
                                                        

                                            <div class="form-check" style="margin-left:150px;">
                                                <input class="form-check-input" name="tenderness" type="checkbox" id="gridCheck1" value="✓" >
                                                    <label class="form-check-label" for="gridCheck1">
                                                    cervical tenderness
                                                    </label>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                <input class="form-check-input" name="adnexalmass" type="checkbox" id="gridCheck1" value="✓">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    adnexal mass / tenderness
                                                    </label>
                                            </div>

                                            <div class="form-check" style="margin-left:150px;">
                                                    <label class="form-check-label" for="gridCheck1">
                                                    uterine position
                                                    </label>
                                            </div>

                                            <div class="form-floating mb-3" style="margin-left:200px;">
                                                    <select class="form-select" name="uterineposition" id="floatingSelect" aria-label="Floating label select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="mid">mid</option>
                                                        <option value="anteflexed">anteflexed</option>
                                                        <option value="retroflexed">retroflexed</option>
                                                    </select>
                                            </div>

                                            <div class="form-floating mb-3" style="margin-left:150px; margin-top: 5px; margin-right: 10px;">
                                                <input type="text" class="form-control" name="uterinedepth" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">uterine depth: (cm)</label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="text-center">
                                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
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