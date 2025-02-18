<?php
// if($_SERVER['REQUEST_METHOD'] == "POST") {

$nis = $_POST['nis'];
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];

$error = "";

if (empty($nis) || empty($nama) || empty($kelas) || empty($jurusan) || empty($gender)) {
    die("Error: Semua kolom harus diisi.");
}

// Cek apakah NIS sudah ada di database
$cek_nis = "SELECT nis FROM data_siswa WHERE nis = ?";
$cek_stmt = $con->prepare($cek_nis);
$cek_stmt->bind_param("s", $nis);
$cek_stmt->execute();
$cek_stmt->store_result();

if ($cek_stmt->num_rows > 0) {
    die("Error: NIS '$nis' sudah terdaftar. Silakan gunakan NIS lain.");
}
$cek_stmt->close();

// Insert data dengan Prepared Statement
$stmt = $con->prepare("INSERT INTO data_siswa (nis, nama_siswa, kelas, jurusan, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nis, $nama, $kelas, $jurusan, $gender);

if ($stmt->execute()) {
    echo "Data siswa berhasil disimpan!";
} else {
    echo "ERROR: " . $stmt->error;
}

// Tutup statement dan koneksi database
$stmt->close();
$con->close();




// $query = "INSERT INTO data_siswa VALUES ";
// $query .= "nis = '$nis', ";
// $query .= "nama_siswa = '$nama', ";
// $query .= "kelas = $kelas, ";
// $query .= "jurusan = '$jurusan', ";
// $query .= "gender = '$gender'";

// $stmt = $con->prepare("INSERT INTO data_siswa (nis, nama_siswa, kelas, jurusan, gender) VALUES (?, ?, ?, ?, ?)");
// $stmt->bind_param("sssss", $nis, $nama, $kelas, $jurusan, $gender);

// if ($stmt->execute()) {
//     echo "Data siswa berhasil disimpan!";
// } else {
//     echo "ERROR: " . $stmt->error;
// }

// $result = mysqli_stmt($con, $stmt);
// echo "query: ". $query;


// if($error != "") {
//     echo $error;
//     echo "<meta http-equiv='refresh' content='0; url=?hal=tambah-siswa'>";
// }elseif($query) {
//     echo "berhasil disimpan"
//     echo "<meta http-equiv='refresh' content='1; url=?hal=tambah-siswa'>";
// }else{
//     echo mysqli_error();
// }

// if(mysqli_query($con, $query)) {
//     echo "Data siswa berhasil disimpan!";
// }else{
//     echo "ERROR: " . $query . "<br>" . mysqli_error($con);
// }
// }
?>


