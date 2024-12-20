<?php
include "../conn/conn.php";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cell = $_POST['cell'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "SELECT * FROM midwife_user") or die ("database error:" . mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) {
        $usernamea = $row['username'];

        if ($username === $usernamea) {
            echo "<script>alert('Username is already taken!')</script>";
            echo "<script>window.location='midwife.php'</script>";
            exit; 
        }
    }

    mysqli_query($conn, "INSERT INTO midwife_user (name, username, password, cell, email) VALUES('$name','$username','$password','$cell','$email')");
    echo "<script>alert('Saved Successfully!')</script>";
    echo "<script>window.location='midwife.php'</script>";
}
?>
