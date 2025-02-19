<?php
if(!defined('INDEX')) die();

$id = $_GET['nama'];

$query = "DELETE FROM data_rekap WHERE nama_siswa = '$id'";
$result = mysqli_query($con, $query);

if($result) {
    echo "Data Berhasil Dihapus!";
    echo "<meta http-equiv='refresh' content='1, url=?hal=data-rekap'>";
}else{
    echo "Tidak Dapat Menghapus Data!<br>";
    echo mysqli_error();
}
?>