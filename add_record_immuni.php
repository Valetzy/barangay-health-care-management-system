<?php
include "conn/conn.php";
if (isset($_POST['save'])) {
    $cell = $_POST['cell'];
    $childno = $_POST['childno'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $time = $_POST['time'];
    $birth = $_POST['birth'];
    $pod = $_POST['pod'];
    $weight = $_POST['weight'];
    $add = $_POST['add'];
    $aod = $_POST['aod'];
    $f = $_POST['f'];
    $occ = $_POST['occ'];
    $m = $_POST['m'];
    $nbs = $_POST['nbs'];
    $hepa = $_POST['hepa'];
    $bcl = $_POST['bcl'];
    $penta = $_POST['penta'];
    $opv = $_POST['opv'];
    $pcv = $_POST['pcv'];
    $ipv = $_POST['ipv'];
    $measles = $_POST['measles'];
    $penta1 = $_POST['penta1'];
    $opv2 = $_POST['opv2'];
    $pcv2 = $_POST['pcv2'];
    $ipv2 = $_POST['ipv2'];
    $mmr = $_POST['mmr'];
    $penta3 = $_POST['penta3'];
    $opv3 = $_POST['opv3'];
    $pcv3 = $_POST['pcv3'];


    mysqli_query($conn, "INSERT INTO immunization (cell, childno, name, sex, time, birth, pod, weight, adds, aod, f, occ,
     m, nbs, hepa, bcl, penta, opv, pcv, ipv, measles, penta1, opv2, pcv2, ipv2, mmr, penta3, opv3, pcv3) 
     VALUES ('$cell', '$childno', '$name', '$sex', '$time', '$birth', '$pod', '$weight', '$add', '$aod', '$f', '$occ',
      '$m', '$nbs', '$hepa', '$bcl', '$penta', '$opv', '$pcv', '$ipv', '$measles', '$penta1', '$opv2', '$pcv2', '$ipv2', '$mmr', '$penta3', '$opv3', '$pcv3')");

    
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='record_immuni.php'</script>";
}
?>
