<?php
if(!defined('INDEX')) die();

$query = "SELECT nama_siswa FROM data_siswa";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$nama = $data['nama_siswa'] ?? '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['kehadiran']) || empty($_POST['kehadiran'])) {
        die("Error: Harap pilih kehadiran!");
    }

    foreach ($_POST['kehadiran'] as $no => $kehadiran) {
        $nama_siswa = $_POST['nama_siswa'][$no] ?? NULL;
        $atribut = $_POST['atribut'][$no] ?? [];

        // Menentukan atribut satu per satu
        $kaos_kaki = in_array("kaos_kaki", $atribut) ? 1 : 0;
        $sabuk = in_array("sabuk", $atribut) ? 1 : 0;
        $seragam = in_array("seragam", $atribut) ? 1 : 0;
        $sepatu = in_array("sepatu", $atribut) ? 1 : 0;
        $hasduk = in_array("hasduk", $atribut) ? 1 : 0;

        if (!$con) {
            die("Koneksi ke database terputus!");
        }

        // Query untuk menyimpan data
        $stmt = $con->prepare("INSERT INTO data_rekap (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");        $atribut_str = implode(", ", $atribut);
        $stmt->bind_param("ssiiiiss", $nama_siswa, $kehadiran, $kaos_kaki, $sabuk, $seragam, $sepatu, $hasduk, $atribut_str);

    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Ditambah!'); window.location.href='?hal=data-user';</script>";
        echo "<meta http-equiv='refresh' content='0; url=?hal=data-absen'>";

    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
}

}


?>
