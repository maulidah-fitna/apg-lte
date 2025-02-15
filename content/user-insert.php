<?php
if(!defined('INDEX')) die();

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$osis_divisi = $_POST['osis_divisi'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user2 SET ";
    $query .= "nama = '$nama', ";
    $query .= "kelas = '$kelas', ";
    $query .= "osis_divisi = '$osis_divisi', ";
    $query .= "username = '$username', ";
    $query .= "password = '$password'";

    $result = mysqli_query($con, $query);

    // echo "<meta http-equiv='refresh' content='1; url=?pengaturan'>";

    if($error != "") {
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=pengaturan'>";
    }elseif($query) {
        echo "Berhasil Menambahkan Data Pegawai <b>$nama</b>";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pengaturan'>";
    ?>
    
<?php
    echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>"
    }else{
      echo "Tidak Dapat Menyimpan Data!<br>";
      echo mysqli_error();
    }
?>