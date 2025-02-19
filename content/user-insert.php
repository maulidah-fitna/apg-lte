<?php
if(!defined('INDEX')) die();

$nama = $_POST['nama'];
// $kelas = $_POST['kelas'];
// $osis_divisi = $_POST['osis_divisi'];
// $email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user SET ";
    $query .= "nama = '$nama', ";
    // $query .= "kelas = '$kelas', ";
    // $query .= "divisi_osis = '$osis_divisi', ";
    // $query .= "email = '$email', ";
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
    echo "Data siswa berhasil disimpan!";
} else {
    echo "ERROR: " . $stmt->error;
}

// Tutup statement dan koneksi database
$stmt->close();
$con->close();

//     $result = mysqli_query($con, $query);

//     // echo "<meta http-equiv='refresh' content='1; url=?pengaturan'>";

//     if($error != "") {
//         echo $error;
//         echo "<meta http-equiv='refresh' content='2; url=?hal=pengaturan'>";
//     }elseif($query) {
//         echo "Berhasil Menambahkan Data Pegawai <b>$nama</b>";
//         echo "<meta http-equiv='refresh' content='1; url=?hal=pengaturan'>";
//     ?>
    
 <?php
//     echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>"
//     }else{
//       echo "Tidak Dapat Menyimpan Data!<br>";
//       echo mysqli_error();
//     }
?>