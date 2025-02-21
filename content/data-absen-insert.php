<?php
if (!defined('INDEX')) die();

$j = htmlspecialchars($_POST['j'] ?? '');
$k = htmlspecialchars($_POST['k'] ?? '');
$g = htmlspecialchars($_POST['g'] ?? '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['kehadiran'])) {
        die("Error: Harap pilih kehadiran!");
    }
    
    foreach ($_POST['kehadiran'] as $no => $kehadiran) {
        $nama_siswa = $_POST['nama_siswa'][$no] ?? '';
        $kelas = $_POST['kelas'][$no] ?? '';
        $jurusan = $_POST['jurusan'][$no] ?? '';
        $atribut = $_POST['atribut'][$no] ?? [];
        
        // Konversi atribut ke nilai numerik
        $kaos_kaki = in_array("kaos_kaki", $atribut) ? 1 : 0;
        $sabuk = in_array("sabuk", $atribut) ? 1 : 0;
        $seragam = in_array("seragam", $atribut) ? 1 : 0;
        $sepatu = in_array("sepatu", $atribut) ? 1 : 0;
        $hasduk = in_array("hasduk", $atribut) ? 1 : 0;
        $atribut_str = implode(", ", $atribut);
        
        // Query untuk menyimpan data
        $query = "INSERT INTO data_rekap (nama_siswa, kelas, jurusan, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input) 
                  VALUES ('$nama_siswa', '$kelas', '$jurusan', '$kehadiran', '$kaos_kaki', '$sabuk', '$seragam', '$sepatu', '$hasduk', '$atribut_str', NOW())";
        
        if (!mysqli_query($con, $query)) {
            echo "Gagal menyimpan data: " . mysqli_error($con);
            exit;
        }
    }
    
    echo "<script>alert('Data Berhasil Ditambah!'); window.location.href='?hal=data-absen';</script>";
}
?>
