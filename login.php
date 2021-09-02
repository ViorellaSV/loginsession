<?php
session_start();
if(isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if($_SESSION['username'] == 'viorellasvk' and $_SESSION['password']=='vio24') {
                        header("location:profile.php");
            } else {
                        // jika login salah //      
                        echo "Login gagal <a href='index.php'>Login</a>";

            }
}
?>


