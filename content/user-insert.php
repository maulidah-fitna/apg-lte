<?php
if(!defined('INDEX')) die();

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$osis_divisi = $_POST['osis_divisi'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user2 SET ";
    $query .= "nama = '$nama', ";
    $query .= "kelas = '$kelas', ";
    $query .= "divisi_osis = '$osis_divisi', ";
    $query .= "email = '$email', ";
    $query .= "password = '$password'";

    if (empty($nama) || empty($kelas) || empty($osis_divisi) || empty($email) || empty($password)) {
        die("Error: Semua kolom harus diisi.");
    }



    // Insert data dengan Prepared Statement
$stmt = $con->prepare("INSERT INTO user2 (nama, kelas, email, password, divisi_osis) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nama, $kelas, $email, $password, $osis_divisi);

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