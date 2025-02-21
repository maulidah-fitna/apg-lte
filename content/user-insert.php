<?php
if(!defined('INDEX')) die();

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user SET ";
    $query .= "nama = '$nama', ";
    $query .= "username = '$username', ";
    $query .= "password = '$password'";

    if (empty($nama)  ||  empty($username) || empty($password)) {
        die("Error: Semua kolom harus diisi.");
    }

    $password = md5($password);

    // Insert data dengan Prepared Statement
$stmt = $con->prepare("INSERT INTO user (nama_lengkap, username, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nama, $username, $password);

if ($stmt->execute()) {
    echo "<script>alert('Data Berhasil Ditambah!'); window.location.href='?hal=data-user';</script>";
} else {
    echo "<script>alert('Gagal menambah data: " . mysqli_error($con) . "');</script>";
}

// Tutup statement dan koneksi database
$stmt->close();
$con->close();

     ?>
