<?php
if(!defined('INDEX')) die();

var_dump($_POST);

// $j = $_GET['j'];
// $k = $_GET['k'];
// $g = $_GET['g'];

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


$query = "SELECT nama_siswa FROM data_siswa";
// $query .= "LEFT JOIN data-absen ";
// $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
// $query .= "ORDER BY pegawai.id_jabatan DESC";
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
        $kaos_kaki = in_array("kaos-kaki", $atribut) ? 1 : 0;
        $sabuk = in_array("sabuk", $atribut) ? 1 : 0;
        $seragam = in_array("seragam", $atribut) ? 1 : 0;
        $songkok = in_array("songkok", $atribut) ? 1 : 0;
        $sepatu = in_array("sepatu", $atribut) ? 1 : 0;
        $hasduk = in_array("hasduk", $atribut) ? 1 : 0;

        if (!$con) {
            die("Koneksi ke database terputus!");
        }

        // Query untuk menyimpan data
        $stmt = $con->prepare("INSERT INTO data_rekap (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, songkok, sepatu, hasduk, atribut, tanggal_input) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");        $atribut_str = implode(", ", $atribut);
        $stmt->bind_param("ssiiiiiss", $nama_siswa, $kehadiran, $kaos_kaki, $sabuk, $seragam, $songkok, $sepatu, $hasduk, $atribut_str);


    // Checkbox (jika tidak dicentang, nilai tidak dikirim, maka kita set defaultnya '-')
    // $atribut = [
    //     'kaos_kaki' => isset($_POST['kaos_kaki']) ? 'Lengkap' : '-',
    //     'sabuk' => isset($_POST['sabuk']) ? 'Lengkap' : '-',
    //     'seragam' => isset($_POST['seragam']) ? 'Lengkap' : '-',
    //     'songkok' => isset($_POST['songkok']) ? 'Lengkap' : '-',
    //     'sepatu' => isset($_POST['sepatu']) ? 'Lengkap' : '-',
    //     'hasduk' => isset($_POST['hasduk']) ? 'Lengkap' : '-',
    // ];

    // $atribut = [
    //     'kaos_kaki' => in_array('kaos_kaki', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    //     'sabuk' => in_array('sabuk', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    //     'seragam' => in_array('seragam', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    //     'songkok' => in_array('songkok', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    //     'sepatu' => in_array('sepatu', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    //     'hasduk' => in_array('hasduk', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
    // ];


//     $atribut = [
//     'kaos_kaki' => in_array('kaos_kaki', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
//     'sabuk' => in_array('sabuk', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
//     'seragam' => in_array('seragam', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
//     'songkok' => in_array('songkok', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
//     'sepatu' => in_array('sepatu', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
//     'hasduk' => in_array('hasduk', $_POST['atribut'] ?? []) ? 'Lengkap' : '-',
// ];


    // Query untuk memasukkan data ke dalam database
    // $sql = "INSERT INTO data_rekap (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, songkok, sepatu, hasduk) 
    //         VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // $stmt = $con->prepare($sql);
    // $stmt->bind_param("ssssssss", 
    //     $nama, $kehadiran, 
    //     $atribut['kaos_kaki'], $atribut['sabuk'], $atribut['seragam'], 
    //     $atribut['songkok'], $atribut['sepatu'], $atribut['hasduk']
    // );

    

    // if ($stmt->execute()) {
    //     echo "<script>alert('Data berhasil disimpan!'); window.location.href='data-rekap.php';</script>";
    // } else {
    //     echo "<script>alert('Gagal menyimpan data!');</script>";
    // }


    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
    // $con->close();
}

}

$sql_move = "INSERT INTO rekap_tahunan (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, songkok, sepatu, hasduk, atribut, tanggal_input)
             SELECT nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, songkok, sepatu, hasduk, atribut, tanggal_input 
             FROM data_rekap 
             WHERE tanggal_input < NOW() - INTERVAL 1 DAY";

$con->query($sql_move);

// 2. Hapus data yang sudah dipindahkan
$sql_delete = "DELETE FROM data_rekap WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
$con->query($sql_delete);

echo "Data lebih dari 24 jam telah dipindahkan dan direset!";
?>

<!--  
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     foreach ($_POST['kehadiran'] as $id_siswa => $kehadiran) {
//         // Ambil atribut (checkbox) yang dipilih untuk siswa ini
//         $atribut = isset($_POST['atribut'][$id_siswa]) ? implode(", ", $_POST['atribut'][$id_siswa]) : "Tidak ada";
        
//         // Query untuk menyimpan ke database
//         $atribut = isset($_POST['atribut'][$id_siswa]) ? implode(", ", $_POST['atribut'][$id_siswa]) : "";
//         $query = "INSERT INTO data_rekap (id, kehadiran, atribut) 
//                   VALUES ('$id_siswa', '$kehadiran', '$atribut')";
//         // Eksekusi query
//         if (mysqli_query($con, $query)) {
//             echo "Data siswa ID $id_siswa berhasil disimpan.<br>";
//         } else {
//             echo "Error: " . mysqli_error($con);
//         }
//     }
// }






// Tutup koneksi
// mysqli_close($con);

?>

// if(!defined('INDEX')) die("");

// $nama_jabatan = $_POST['nama'];
// $query = "INSERT INTO jabatan SET nama_jabatan = '$nama_jabatan'";
// $result = mysqli_query($con, $query);

// if($result) {
//     echo "Jabatan <b>$nama_jabatan</b> Berhasil Disimpan!";
//     echo "<meta http-equiv='refresh' content='2, url=?hal=jabatan'";
// }else{
//     echo "Tidak Dapat Menyimpan Data!<br>";
//     echo mysqli_error();
// }


// $hadir1 = $_POST['hadir'];
// $hadir2 = $_POST['alpa'];
// $hadir3 = $_POST['izin'];

// $lengkap1 = $_POST['kaos_kaki'];
// $lengkap2 = $_POST['sabuk'];
// $lengkap3 = $_POST['seragam'];
// $lengkap4 = $_POST['songkok'];
// $lengkap5 = $_POST['hasduk'];

// $error = "";

// if()


// if (isset($_POST['submit'])) {
//     $nama_siswa = $_POST['nama_siswa'];
//     $kehadiran = $_POST['kehadiran'];
//     $atribut = isset($_POST['atribut']) ? implode(", ", $_POST['atribut']) : '';

//     $query = "INSERT INTO data_rekap (nama_siswa, kehadiran, atribut) 
//               VALUES ('$nama_siswa', '$kehadiran', '$atribut')";

//     $result = mysqli_query($con, $query);

//     if ($result) {
//         echo "Data berhasil disimpan!";
//         header("Location: data-rekap.php");
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     foreach ($_POST['kehadiran[]'] as $id_siswa => $kehadiran) {
//         // Ambil atribut (checkbox) yang dipilih untuk siswa ini
//         $atribut = isset($_POST['atribut'][$id_siswa]) ? implode(", ", $_POST['atribut'][$id_siswa]) : "Tidak ada";

//         if (isset($_POST['submit'])) {
//             $nama_siswa = $_POST['nama_siswa'];
//             $kehadiran = $_POST['kehadiran'];
//             $atribut = isset($_POST['atribut']) ? implode(", ", $_POST['atribut']) : '';
        
            // Menggunakan switch untuk validasi atau pengolahan data
        //     switch ($kehadiran) {
        //         case 'hadir':
        //             $status_kehadiran = "Hadir";
        //             break;
        //         case 'alpa':
        //             $status_kehadiran = "Alpa";
        //             break;
        //         case 'izin':
        //             $status_kehadiran = "Izin";
        //             break;
        //         default:
        //             $status_kehadiran = "Tidak diketahui";
        //             break;
        //     }

        // }

//         if($kehadiran['hadir']==true) {
//             $kehadiran['hadir'] = "checked";
//             $kehadiran['alpa'] = "";
//             $kehadiran['izin'] = "";
            
//          }else if($kehadiran['alpa'] == true) {
//             $kehadiran['hadir'] = "";
//             $kehadiran['alpa'] = "checked";
//             $kehadiran['izin'] = "";
//          }else if($kehadiran['izin'] == true) {
//             $kehadiran['hadir'] = "";
//             $kehadiran['alpa'] = "";
//             $kehadiran['izin'] = "checked";
//          }


//         // Query untuk menyimpan ke database
//         $query = "INSERT INTO data_rekap (id_siswa, kehadiran, atribut) 
//                   VALUES ('$id_siswa', '$kehadiran', '$atribut')";

//         // Eksekusi query
//         if (mysqli_query($con, $query)) {
//             echo "Data siswa ID $id_siswa berhasil disimpan.<br>";
//         } else {
//             echo "Error: " . mysqli_error($con);
//         }
//     }
// } //else {
//     echo "Form tidak dikirim dengan metode POST."; -->
      