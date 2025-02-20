<?php
if(!defined('INDEX')) die();

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah password diubah
if(!empty($password)) {
    $pw = md5($password);
    $query = "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', password='$pw' WHERE id_user='$id'";
} else {
    $query = "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username' WHERE id_user='$id'";
}

mysqli_query($con, $query) or die(mysqli_error($con));
header('Location: ?hal=data-user');
?>