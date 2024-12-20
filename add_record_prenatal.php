<?php
include "conn/conn.php";
if (isset($_POST['save'])) {
    $buntis = $_POST['buntis'];
    $cell = $_POST['cell'];
    $mother = $_POST['mother'];
    $phic = $_POST['phic'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $status = $_POST['status'];
    $religion = $_POST['religion'];
    $address = $_POST['address'];
    $birth = $_POST['birth'];
    $birthplace = $_POST['birthplace'];
    $educ = $_POST['educ'];
    $occu = $_POST['occu'];
    $husband = $_POST['husband'];
    $occuh = $_POST['occuh'];
    $food = $_POST['food'];
    $drug = $_POST['drug'];
    $other = $_POST['other'];
    $smoke = $_POST['smoke'];
    $alco = $_POST['alco'];
    $menar = $_POST['menar'];
    $duration = $_POST['duration'];
    $menorr = $_POST['menorr'];
    $others = $_POST['others'];
    $nochild = $_POST['nochild'];
    $rank = $_POST['rank'];
    $deceased = $_POST['deceased'];
    $alive = $_POST['alive'];
    $asthma = isset($_POST['asthma']) ? $_POST['asthma'] : '';
    $hyper = isset($_POST['hyper']) ? $_POST['hyper'] : '';
    $cancer = isset($_POST['cancer']) ? $_POST['cancer'] : '';
    $otherss = $_POST['otherss'];
    $foodalert = $_POST['foodalert'];
    $drugalert = $_POST['drugalert'];
    $illness = $_POST['illness'];
    $acci = $_POST['acci'];
    $hospi = $_POST['hospi'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $g = $_POST['g'];
    $p = $_POST['p'];
    $aa = $_POST['aa'];
    $f = $_POST['f'];
    $pp = $_POST['pp'];
    $l = $_POST['l'];
    $lmp = $_POST['lmp'];
    $det = $_POST['det'];
    $ht = $_POST['ht'];
    $edc = $_POST['edc'];
    $blood = $_POST['blood'];
    $vdrl = $_POST['vdrl'];

    mysqli_query($conn, "INSERT INTO prenatal (
        buntis, cell, mother, phic, name, age, status, religion, address, birth, birthplace, educ, occu, husband, occuhus, 
        food, drug, others, smoke, alco, menar, duration, menor, otherss, nochild, rank, deceased, alive, 
        foodalert, drugalert, illness, accident, hospi, arti, b, c, g, p, a, f, pp, l, lmp, det, ht, edc, 
        blood, vdrl, astma, hyper, cancer, othersss
    ) VALUES (
        '$buntis', '$cell', '$mother', '$phic', '$name', '$age', '$status', '$religion', '$address', '$birth', '$birthplace', '$educ', '$occu', '$husband', '$occuh',
        '$food', '$drug', '$other', '$smoke', '$alco', '$menar', '$duration', '$menorr', '$others', '$nochild', '$rank', '$deceased', '$alive',
        '$foodalert', '$drugalert', '$illness', '$acci', '$hospi', '$a', '$b', '$c', '$g', '$p', '$aa', '$f', '$pp', '$l', '$lmp', '$det', '$ht', '$edc',
        '$blood', '$vdrl', '$asthma', '$hyper', '$cancer', '$otherss'
    )");
    
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='record_prenatal.php'</script>";
}
?>
