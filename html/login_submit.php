<?php
    session_start();
    include "config.php";
    if(isset($_POST["submit"]) && $_POST["username"] != "" && $_POST["password"] != "")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password); // Ma hoa mat khau
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $user = mysqli_query($sconn, $sql);
        if(mysqli_num_rows($user) > 0)
        {
            $_SESSION["user"] = $username;
            sleep(1);
            header("location: thunghiem.html");
        }
        else
        {
            echo "Tai khoan hoac mat khau khong dung";
        }
    }
    else
    {
        header("location: login.html");
    }

?>