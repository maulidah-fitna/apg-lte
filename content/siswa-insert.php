<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

$nis = $_POST['nis'];
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];

$error = "";

$query = "INSERT INTO data_siswa SET ";
$query .= "nis = '$nis', ";
$query .= "nama_siswa = '$nama', ";
$query .= "kelas = '$kelas', ";
$query .= "jurusan = '$jurusan', ";
$query .= "gender = '$gender', ";

$result = mysqli_query($con, $query);


// if($error != "") {
//     echo $error;
//     echo "<meta http-equiv='refresh' content='0; url=?hal=tambah-siswa'>";
// }elseif($query) {
//     echo "berhasil disimpan"
//     echo "<meta http-equiv='refresh' content='1; url=?hal=tambah-siswa'>";
// }else{
//     echo mysqli_error();
// }

if(mysqli_query($con, $query)) {
    echo "Data siswa berhasil disimpan!";
}else{
    echo "ERROR: " . $query . "<br>" . mysqli_error($con);
}
}
?>