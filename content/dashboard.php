<?php
    if(!defined('INDEX')) die();

    $jsiswa = mysqli_num_rows(mysqli_query($con, "select * from data_siswa"));
    $hsiswa = mysqli_num_rows(mysqli_query($con, "SELECT * FROM data_rekap WHERE kehadiran='hadir'"));
    $isiswa = mysqli_num_rows(mysqli_query($con, "SELECT * FROM data_rekap WHERE kehadiran='izin'"));
    $asiswa = mysqli_num_rows(mysqli_query($con, "SELECT * FROM data_rekap WHERE kehadiran='alpa'"));
?>

<section class="content-header">
      <h1>
        Dashboard
      </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <h4>Selamat Datang!</h4>

                <p>Aplikasi ini dibuat untuk mempermudah guru dan OSIS untuk
                        mengabsen, merekap, menyimpan data dari absen dan rekap
                        dengan aman dan efisien</p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">

              <h3><?=$jsiswa?></h3>

              <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="?hal=data-siswa" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$hsiswa?><sup style="font-size: 20px"></sup></h3>

              <p>Hadir</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="?hal=data-rekap" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$isiswa?></h3>

              <p>Izin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="?hal=data-rekap" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$asiswa?></h3>

              <p>Alpa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="?hal=data-rekap" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

</section>