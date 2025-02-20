<?php
if(!defined('INDEX')) die();

$nis = $_GET['nis'];

$query = "DELETE FROM data_siswa WHERE nis = '$nis'";
$result = mysqli_query($con, $query);

if($result) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location.href='?hal=data-siswa';</script>";
} else {
    echo "<script>alert('Gagal menghapus data: " . mysqli_error($con) . "');</script>";
}
?>