<?php
include "../conn/conn.php";

if (isset($_POST['edits'])) {
    $id = $_POST['id'];
    $ename = $_POST['ename'];
    $eusername = $_POST['eusername'];
    $epassword = $_POST['epassword'];
    $ecell = $_POST['ecell'];
    $eemail = $_POST['eemail'];

    $result = mysqli_query($conn, "SELECT * FROM midwife_user WHERE username='$eusername' AND user_id != '$id'") or die ("database error:" . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        // Username already exists for another user
        echo "<script>alert('Username is already taken!')</script>";
        echo "<script>window.location='midwife.php'</script>";
        exit; // Stop execution if the username is already taken
    }

    mysqli_query($conn, "UPDATE midwife_user SET name='$ename', username='$eusername', password='$epassword', cell='$ecell', email='$eemail' WHERE user_id='$id'");
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.location='midwife.php'</script>";
} else {
    echo "<script>alert('Failed!')</script>";
    echo "<script>window.location='midwife.php'</script>";
}
?>
