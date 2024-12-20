<?php
session_start(); 
if (isset($_SESSION['user_id']) && isset($_SESSION['name']) ) {
?>

<?php include "conn/conn.php"; ?>
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

                                <div class="col-md-6">
                                  <input type="text" name="buntis" class="form-control" placeholder="BUNTIS PARES" required>
                                </div>

                                <div class="col-md-6">
                                  <input type="number" name="cell" class="form-control" placeholder="CELL #" required>
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="mother" class="form-control" placeholder="MOTHER" required>
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="phic" class="form-control" placeholder="PHIC STATUS" required>
                                </div>

                                <center>
                                <h5 class="card-title">PRENATAL RECORD</h5>
                                </center>

                                <div class="col-md-5">
                                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="col-md-2">
                                  <input type="numer" name="age" class="form-control" placeholder="Age" required>
                                </div>

                                <div class="col-md-2">
                                  <select id="inputState" name="status" class="form-select" required >
                                    <option selected>Status</option>
                                    <option value="Single" >Single</option>
                                    <option value="Married" >Married</option>
                                  </select>
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="religion" class="form-control" placeholder="Religion" required >
                                </div>

                                <div class="col-md-6">
                                  <input type="text" name="address" class="form-control" placeholder="Address" required >
                                </div>

                                
                                <div class="col-sm-3">
                                  <div style="display: flex;" >
                                    <div style="margin-top:5px; margin-right:5px;" >
                                      Birthdate
                                    </div>
                                    <input type="date" name="birth" class="form-control" required  >
                                  </div>
                                </div>
                                    

                                <div class="col-md-3">
                                  <input type="text" name="birthplace" class="form-control" placeholder="Birth Place" required >
                                </div>

                                <div class="col-md-8">
                                  <input type="text" name="educ" class="form-control" placeholder="Educational Attainment" required >
                                </div>

                                <div class="col-md-4">
                                  <input type="text" name="occu" class="form-control" placeholder="Occupation" required >
                                </div>

                                <div class="col-md-8">
                                  <input type="text" name="husband" class="form-control" placeholder="Husband" required >
                                </div>

                                <div class="col-md-4">
                                  <input type="text" name="occuh" class="form-control" placeholder="Occupation" required >
                                </div>

                                <h5 class="card-title" style="margin-left: 15px;" >l. Personal / Social History</h5>

                                <h6 style="margin-left: 5px; font-size: 20px; color: gray;" ><b>History of Allergy</b></h6>

                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="food" placeholder="Foods">
                                </div>

                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="drug" placeholder="Drugs">
                                </div>

                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="other" placeholder="Others">
                                </div>

                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="smoke" placeholder="Smoker: Brand Specify">
                                </div>

                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="alco" placeholder="Alcoholic Drinker: Specify">
                                </div>

                                <div class="col-md-3">
                                <div class="form-floating">
                                  <input type="date" name="menar" class="form-control" id="floatingName" placeholder="Your Name">
                                  <label for="floatingName">Menarche Age</label>
                                </div>
                              </div>
                                <div class="col-md-3">
                                  <input type="text" name="duration" class="form-control" placeholder="Duration">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="menorr" class="form-control" placeholder="Menorrea">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="others" class="form-control" placeholder="Others, Specify">
                                </div>

                                <h5 class="card-title" style="margin-left: 15px;" >ll. Family History</h5>

                                <div class="col-md-3">
                                  <input type="text" name="nochild" class="form-control" placeholder="No. of Children">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="rank" class="form-control" placeholder="Rank">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="deceased" class="form-control" placeholder="Deceased">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="alive" class="form-control" placeholder="Alive">
                                </div>

                                <div style="display: flex">

                                    <div class="form-check" style="margin-left: 76px;">
                                      <input class="form-check-input" name="asthma" type="checkbox" value="✓">
                                        <label class="form-check-label">
                                          Asthma
                                        </label>
                                        
                                    </div>

                                    <div class="form-check" style="margin-left: 76px;">
                                      <input class="form-check-input" name="hyper" type="checkbox" value="✓">
                                        <label class="form-check-label">
                                          Hypertension
                                        </label>

                                    </div>

                                    <div class="form-check" style="margin-left: 76px;">
                                      <input class="form-check-input" name="cancer" type="checkbox" value="✓">
                                        <label class="form-check-label">
                                          Cancer
                                        </label>
                                        
                                    </div>

                                    <div class="col-md-5" style="margin-left: 50px;">
                                      <input type="text" name="otherss" class="form-control" placeholder="Others, Specify">
                                    </div>

                                </div>

                                    <div class="col-md-6">
                                      <input type="text" name="foodalert" class="form-control" placeholder="Food Allergy: Specify">
                                    </div>

                                    <div class="col-md-6">
                                      <input type="text" name="drugalert" class="form-control" placeholder="Drug Allergy: Specify">
                                    </div>

                                <h5 class="card-title" style="margin-left: 15px;" >lll. Past History</h5>

                                <div class="col-md-10" style="margin-left: 70px;">
                                  <input type="text" name="illness" class="form-control" placeholder="Illness">
                                </div>

                                <div class="col-md-5" style="margin-left: 70px;">
                                  <input type="text" name="acci" class="form-control" placeholder="Accident">
                                </div>

                                <div class="col-md-5">
                                  <input type="text" name="hospi" class="form-control" placeholder="Hospitalization">
                                </div>

                                <h5 class="card-title" style="margin-left: 15px;" >lV. Family Planning History</h5>

                                <div class="col-md-4" style="margin-left: 70px;">
                                  <input type="text" name="a" class="form-control" placeholder="a. Artificial">
                                </div>

                                <div class="col-md-4" >
                                  <input type="text" name="b" class="form-control" placeholder="b. Natural">
                                </div>

                                <div class="col-md-3">
                                  <input type="text" name="c" class="form-control" placeholder="c. Others">
                                </div>

                                <h5 class="card-title" style="margin-left: 15px;" >V. Obstetrical History</h5>

                                <h6 style="margin-left: 50px; font-size: 20px; color: gray;" ><b>OB Code</b></h6>

                                    <div class="col-md-1" style="margin-left: 70px;">
                                      <input type="text" name="g" class="form-control" placeholder="G">
                                    </div>

                                    <div class="col-md-1" >
                                      <input type="text" name="p" class="form-control" placeholder="P">
                                    </div>

                                    <div class="col-md-1" >
                                      <input type="text" name="aa" class="form-control" placeholder="A">
                                    </div>

                                    <div class="col-md-1" >
                                      <input type="text" name="f" class="form-control" placeholder="F">
                                    </div>

                                    <div class="col-md-1" >
                                      <input type="text" name="pp" class="form-control" placeholder="P">
                                    </div>

                                    <div class="col-md-1" style="margin-right: 300px;" >
                                      <input type="text" name="l" class="form-control" placeholder="L">
                                    </div>

                                    <div class="col-md-3"  style="margin-left: 70px;" >
                                      <input type="text" name="lmp" class="form-control" placeholder="LMP">
                                    </div>

                                    <div class="col-md-3" >
                                      <input type="text" name="det" class="form-control" placeholder="Hgb. Det">
                                    </div>

                                    <div class="col-md-3" >
                                      <input type="text" name="ht" class="form-control" placeholder="Ht">
                                    </div>

                                    <div class="col-md-3"  style="margin-left: 70px;" >
                                      <input type="text" name="edc" class="form-control" placeholder="EDC">
                                    </div>

                                    <div class="col-md-3" >
                                      <input type="text" name="blood" class="form-control" placeholder="Blood Type">
                                    </div>

                                    <div class="col-md-3" >
                                      <input type="text" name="vdrl" class="form-control" placeholder="VDRL">
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