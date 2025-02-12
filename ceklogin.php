<?php
    session_start();
    include "library/config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $password = md5($password); // Gunakan md5 hanya jika password tidak kosong
    } else {
        $password = ''; // Pastikan password tidak null
    }

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    
    // untuk menam
    $hasil = mysqli_query($con, $query);
    $data = mysqli_fetch_array($hasil);
    
    // menghitung jumlah baris data 
    $jml = mysqli_num_rows($hasil);

    if ($jml > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('location: index.php');
    }else{
        echo "<p align='center'>Login Gagal!</p>";
        echo "<meta http-equiv='refresh' content='2, url=login.php'>";
    }
?>



<!-- 
Warning: Undefined array key "username" in C:\laragon\www\appasi-projek\ceklogin.php on line 5

Warning: Undefined array key "password" in C:\laragon\www\appasi-projek\ceklogin.php on line 6

Deprecated: md5(): Passing null to parameter #1 ($string) of type string is deprecated in C:\laragon\www\appasi-projek\ceklogin.php on line 6
Login Gagal! -->