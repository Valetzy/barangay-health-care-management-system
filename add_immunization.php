<?php
include "conn/conn.php";
if (isset($_POST['save'])) {
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



    mysqli_query($conn, "INSERT INTO add_immuni (age, wt, ms, ht, ns, muac, hs, bt, temp, medicine, child_id) 
     VALUES ('$age', '$wt', '$ms', '$ht', '$ns', '$muac', '$hs', '$bt', '$temp', '$medicine', '$child_id')");

    
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='record_immuni.php'</script>";
}
?>
