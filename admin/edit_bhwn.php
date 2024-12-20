<?php
include "../conn/conn.php";

if (isset($_POST['edits'])) {
    $id = $_POST['id'];
    $ename = $_POST['ename'];
    $eusername = $_POST['eusername'];
    $epassword = $_POST['epassword'];
    $ecell = $_POST['ecell'];
    $eemail = $_POST['eemail'];

    $result = mysqli_query($conn, "SELECT * FROM bhw_user WHERE username='$eusername' AND user_id != '$id'") or die ("database error:" . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username is already taken!')</script>";
        echo "<script>window.location='bhw.php'</script>";
        exit;
    }

    mysqli_query($conn, "UPDATE bhw_user SET name='$ename', username='$eusername', password='$epassword', cell='$ecell', email='$eemail' WHERE user_id='$id'");
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>window.location='bhw.php'</script>";
} else {
    echo "<script>alert('Failed!')</script>";
    echo "<script>window.location='bhw.php'</script>";
}
?>
