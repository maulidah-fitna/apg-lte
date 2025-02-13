<?php
    // if (!defined('INDEX')) header('location: index.php');

    $halaman = [
        "dashboard",
        "data-absen",
        "data-rekap",
        "tambah-siswa",
        "xaklpa",
        "xaklpi",
        "xpplgpa",
        "xpplgpi",
        "xirplpa",
        "xirplpi",
        "xilpspa",
        "xilpspi"
    ];

    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else{
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if ($hal == $h) {
            include "content/$h.php";
            break;
        }
    }

?>