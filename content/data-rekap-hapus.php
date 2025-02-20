<?php
if(!defined('INDEX')) die();

if (isset($_GET['id'])) {
    

    $id = $_GET['id'];

    $query = "DELETE FROM data_rekap WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Dihapus!'); window.location.href='?hal=data-rekap';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . mysqli_error($con) . "');</script>";
    }
} else {
    echo "<script>alert('Parameter nama tidak ditemukan!');</script>";
}
?>