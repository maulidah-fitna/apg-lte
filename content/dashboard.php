<?php
    if(!defined('INDEX')) die();

    $jsiswa = mysqli_num_rows(mysqli_query($con, "select * from data_siswa"));
?>
<!-- <head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="main-content">
            <h1>Menu Utama</h1>
            <div class="info-box"> -->
                <!-- Kartu Panduan -->
                <!-- <div class="info-card">
                    <h3>Panduan Penggunaan Aplikasi</h3>
                    <a href="https://alfachree.github.io/Appasi/">Klik di sini</a>
                </div> -->
                <!-- Kartu Informasi -->
                <!-- <div class="info-card">
                    <h3>Aplikasi ini dibuat untuk mempermudah</h3>
                    <p>
                        "Aplikasi ini dibuat untuk mempermudah guru dan OSIS untuk
                        mengabsen, merekap, menyimpan data dari absen dan rekap
                        dengan aman dan efisien."
                    </p>
                </div>
            </div> -->




<!-- <h1>
        Page Header
        <small>Optional description</small>
</h1> -->

<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
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
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

              <h3><?=$jsiswa?></h3>

              <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-bag"></i> -->
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Hadir</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Izin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Alpa</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

</section>