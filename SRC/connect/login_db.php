<?php

    session_start();

    include('conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = md5($password);

    $sql = "SELECT * FROM employee WHERE username = '$username' AND pass = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);
    $query = mysqli_fetch_assoc($result);

    if($query) {
        echo "<script>alert('Success Fully');</script>";
        $_SESSION['username'] = $username;
        header('location: ../weblab/index.php');
        exit;
    } else {
        echo "Username หรือ Password ไม่ถูกต้อง";
        header('location: ../index.php');
        exit;
    }

?>