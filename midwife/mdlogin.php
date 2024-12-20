<?php
session_start();
include "../conn/conn.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

        $sql = "SELECT * FROM midwife_user WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['usernameq'] = $row['username'];
                $_SESSION['nameq'] = $row['name'];
                $_SESSION['user_idq'] = $row['user_id'];
                header("Location: dashboard.php");
                exit();
            }
            else{
                header("Location: mwlogin.php?error=Incorrect Username or password!");
                exit();
            }
            
        }
        else{
            header("Location: mwlogin.php?error=Incorrect Username or password!");
            exit();
        }
    
}
else{
    header("Location: mwlogin.php");
}