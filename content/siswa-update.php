<?php
if(!defined('INDEX')) die();

$nis = $_POST['nis'];
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];

$error = "";

    $query = "UPDATE data_siswa SET ";
    $query .= "nama_siswa = '$nama', ";
    $query .= "kelas = $kelas, ";
    $query .= "jurusan = '$jurusan', ";
    $query .= "gender = '$gender' ";
    $query .= "WHERE nis = '$nis'";

    $result = mysqli_query($con, $query);


if($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2; url=?hal=siswa-edit&nis=$nis'>";
}elseif($result) {
    echo "Berhasil Memperbaharui Data Pegawai <b>$nama</b>";
    echo "<meta http-equiv='refresh' content='1; url=?hal=data-siswa'>";
}else{
    echo "Tidak Dapat Menyimpan Data!<br>";
    echo mysqli_error();
}
?>