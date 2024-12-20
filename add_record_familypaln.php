<?php
include "conn/conn.php";
if (isset($_POST['save'])) {
    $client = $_POST['client'];
    $philhealth = $_POST['philhealth'];
    $nhts = $_POST['nhts'];
    $pantawid = $_POST['pantawid'];
    $name = $_POST['name'];
    $dateb = $_POST['dateb'];
    $age = $_POST['age'];
    $educ = $_POST['educ'];
    $occupation = $_POST['occupation'];
    $address = $_POST['address'];
    $civil = $_POST['civil'];
    $religion = $_POST['religion'];
    $spouse = $_POST['spouse'];
    $date_birth = $_POST['date_birth'];
    $ageq = $_POST['ageq'];
    $occu = $_POST['occu'];
    $living = $_POST['living'];
    $more = $_POST['more'];
    $income = $_POST['income'];
    $newacceptor = isset($_POST['newacceptor']) ? $_POST['newacceptor'] : '';
    $forfp = $_POST['forfp'];
    $otherss = $_POST['otherss'];
    $currentuser = isset($_POST['currentuser']) ? $_POST['currentuser'] : '';
    $reason = $_POST['reason'];
    $effects = $_POST['effects'];
    $method = isset($_POST['method']) ? $_POST['method'] : '';
    $clinic = isset($_POST['clinic']) ? $_POST['clinic'] : '';
    $restart = isset($_POST['restart']) ? $_POST['restart'] : '';
    $coc = isset($_POST['coc']) ? $_POST['coc'] : '';
    $pop = isset($_POST['pop']) ? $_POST['pop'] : '';
    $injectable = isset($_POST['injectable']) ? $_POST['injectable'] : '';
    $implant = isset($_POST['implant']) ? $_POST['implant'] : '';
    $iud = isset($_POST['iud']) ? $_POST['iud'] : '';
    $interval = isset($_POST['interval']) ? $_POST['interval'] : '';
    $partum = isset($_POST['partum']) ? $_POST['partum'] : '';
    $condom = isset($_POST['condom']) ? $_POST['condom'] : '';
    $bom = isset($_POST['bom']) ? $_POST['bom'] : '';
    $bbt = isset($_POST['bbt']) ? $_POST['bbt'] : '';
    $stm = isset($_POST['stm']) ? $_POST['stm'] : '';
    $sdm = isset($_POST['sdm']) ? $_POST['sdm'] : '';
    $lam = isset($_POST['lam']) ? $_POST['lam'] : '';
    $othersss = $_POST['othersss'];
    $severe = $_POST['severe'];
    $history = $_POST['history'];
    $nontrau = $_POST['nontrau'];
    $current = $_POST['current'];
    $chestpain = $_POST['chestpain'];
    $cough = $_POST['cough'];
    $jaundice = $_POST['jaundice'];
    $unexplained = $_POST['unexplained'];
    $intake = $_POST['intake'];
    $clientsmoker = $_POST['clientsmoker'];
    $withdisability = $_POST['withdisability'];
    $abnormalvigina = $_POST['abnormalvigina'];
    $pleasespecify = $_POST['pleasespecify'];
    $pregnanciesg = $_POST['pregnanciesg'];
    $pregnanciesp = $_POST['pregnanciesp'];
    $fullterm = $_POST['fullterm'];
    $abortion = $_POST['abortion'];
    $premature = $_POST['premature'];
    $livingchildren = $_POST['livingchildren'];
    $datedelivery = $_POST['datedelivery'];
    $typedelivery = $_POST['typedelivery'];


    $lastperiod = $_POST['lastperiod'];
    $previousperiod = $_POST['previousperiod'];
    $changingmethod = $_POST['changingmethod'];
    $dysmenorrhea = isset($_POST['dysmenorrhea']) ? $_POST['dysmenorrhea'] : '';
    $hydatidiform = isset($_POST['hydatidiform']) ? $_POST['hydatidiform'] : '';
    $ectopic = isset($_POST['ectopic']) ? $_POST['ectopic'] : '';
    $geniticalarea = $_POST['geniticalarea'];
    $ifyesindicate = $_POST['ifyesindicate'];
    $soreulcer = $_POST['soreulcer'];
    $sexually = $_POST['sexually'];
    $hiv_aids = $_POST['hiv_aids'];
    $unplesant = $_POST['unplesant'];
    $approvevisit = $_POST['approvevisit'];
    $domesticviolence = $_POST['domesticviolence'];
    $referedtop = $_POST['referedtop'];
    $referedspecigy = $_POST['referedspecigy'];
    $kg = $_POST['kg'];
    $m = $_POST['m'];
    $mmhg = $_POST['mmhg'];
    $min = $_POST['min'];
    $skinsa = $_POST['skinsa'];
    $CONJUNCTIVA = $_POST['CONJUNCTIVA'];
    $NECK = $_POST['NECK'];
    $BREAST = $_POST['BREAST'];
    $EXTREMITIES = $_POST['EXTREMITIES'];
    $PELVICEXAMINATION = $_POST['PELVICEXAMINATION'];
    $cervicalabnormalities = $_POST['cervicalabnormalities'];
    $cervicalconsistency = $_POST['cervicalconsistency'];
    $tenderness = isset($_POST['tenderness']) ? $_POST['tenderness'] : '';
    $adnexalmass = isset($_POST['adnexalmass']) ? $_POST['adnexalmass'] : '';
    $uterineposition = $_POST['uterineposition'];
    $uterinedepth = $_POST['uterinedepth'];

    mysqli_query($conn, "INSERT INTO family_planning ( client, philhealth, nhts, pantawid, name, dateb, age, educ, occupation, address, civil, religion,
    spouse, date_birth, ageq, occu, living, more, income, newacceptor, forfp, otherss, currentuser,
    reason, effects, method, clinic, restart, coc, pop, injectable, implant, iud, intervals, partum,
    condom, bom, bbt, stm, sdm, lam, othersss, severe, history, nontrau, current, chestpain, cough,
    jaundice, unexplained, intake, clientsmoker, withdisability, abnormalvigina, pleasespecify,
    pregnanciesg, pregnanciesp, fullterm, abortion, premature, livingchildren, datedelivery, typedelivery
    ) VALUES (
        '$client', '$philhealth', '$nhts', '$pantawid', '$name', '$dateb', '$age', '$educ', '$occupation',
    '$address', '$civil', '$religion', '$spouse', '$date_birth', '$ageq', '$occu', '$living', '$more',
    '$income', '$newacceptor', '$forfp', '$otherss', '$currentuser', '$reason', '$effects', '$method',
    '$clinic', '$restart', '$coc', '$pop', '$injectable', '$implant', '$iud', '$interval', '$partum',
    '$condom', '$bom', '$bbt', '$stm', '$sdm', '$lam', '$othersss', '$severe', '$history', '$nontrau',
    '$current', '$chestpain', '$cough', '$jaundice', '$unexplained', '$intake', '$clientsmoker',
    '$withdisability', '$abnormalvigina', '$pleasespecify', '$pregnanciesg', '$pregnanciesp', '$fullterm',
    '$abortion', '$premature', '$livingchildren', '$datedelivery', '$typedelivery'
    )");
    


    mysqli_query($conn, "INSERT INTO family_plan ( lastperiod, previousperiod, changingmethod, dysmenorrhea, hydatidiform, ectopic, geniticalarea, 
                                                    ifyesindicate, soreulcer, sexually, hiv_aids, unplesant, approvevisit, domesticviolence, 
                                                    referedtop, referedspecigy, kg, m, mmhg, min, skinsa, CONJUNCTIVA, NECK, BREAST, EXTREMITIES, 
                                                    PELVICEXAMINATION, cervicalabnormalities, cervicalconsistency, tenderness, adnexalmass, 
                                                    uterineposition, uterinedepth ) 
                                                    VALUES ( '$lastperiod', '$previousperiod', '$changingmethod', '$dysmenorrhea', '$hydatidiform', '$ectopic', 
                                                            '$geniticalarea', '$ifyesindicate', '$soreulcer', '$sexually', '$hiv_aids', '$unplesant', '$approvevisit', 
                                                            '$domesticviolence', '$referedtop', '$referedspecigy', '$kg', '$m', '$mmhg', '$min', '$skinsa', 
                                                            '$CONJUNCTIVA', '$NECK', '$BREAST', '$EXTREMITIES', '$PELVICEXAMINATION', '$cervicalabnormalities', 
                                                            '$cervicalconsistency', '$tenderness', '$adnexalmass', '$uterineposition', '$uterinedepth' )");
                                                        


    
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='record_famplan.php'</script>";
}
?>
