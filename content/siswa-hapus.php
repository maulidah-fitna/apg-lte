<?php
if(!defined('INDEX')) die();

$nis = $_GET['nis'];

$query = "DELETE FROM data_siswa WHERE nis = '$nis'";
$result = mysqli_query($con, $query);

if($result) {
    echo "Data Pegawai Berhasil Dihapus!";
    echo "<meta http-equiv='refresh' content='1, url=?hal=data-siswa'>";
}else{
    echo "Tidak Dapat Menghapus Data Pegawai!<br>";
    echo mysqli_error();
}
?>