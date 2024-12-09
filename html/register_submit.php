<?php
    session_start();
    include "config.php";
    if(isset($_POST["submit"]) && $_POST["username"] != "" && $_POST["password"] != "" && $_POST["repassword"] != "")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if($password != $repassword)
        {
            $_SESSION["thongbao"] = "Mật khẩu nhập lại không đúng! ";
            header("location:register.php");
            die(); // Sau đó sẽ không xuất hiện j nữa
        }
        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $old = mysqli_query($sconn, $sql);
        $password = md5($password); // Mã hóa mật khẩu
        // mysqli_num_rows($old); // Kiem tra xem username da ton tai chua 
        if(mysqli_num_rows($old) > 0)
        {
            header("Location: register.php?error=Tài khoản đã tồn tại!");   
        }
        else
        {
            $sql = "INSERT INTO user (username,password,level) value ('$username', '$password', '$level')";
        mysqli_query($sconn, $sql);
        $_SESSION["thongbao"] = "Đăng ký thành công! ";
        header("location:login.html");
        }
        
    }
    else
    {
        header("Location: register.php?error=Vui lòng nhập đầy đủ thông tin!");   
    }
    // sleep(1); // Chờ 3 giây
?>
