<?php
if(!defined('INDEX')) die();

$query = "SELECT * FROM data_rekap";
$result = mysqli_query($con, $query);
?>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                            <th>Nama</th>
                            <th>Kehadiran</th>
            
                            <th>Kaos Kaki</th>
                            <th>Sabuk</th>
                            <th>Seragam</th>
                            <th>Songkok</th>
                            <th>Sepatu</th>
                            <th>Hasduk</th>
                    </tr>
                    </div>

    </thead>
          <!-- /.box -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['nama_siswa'] . "</td>";
        echo "<td>" . $row['kehadiran'] . "</td>";
        echo "<td>" . $row['atribut'] . "</td>";
        echo "</tr>";
    }

    if($row['atribut'] == "") {
        if($kehadiran['hadir']==true) {
            $kehadiran['hadir'] = "checked";
            $kehadiran['alpa'] = "";
            $kehadiran['izin'] = "";
            
         }else if($kehadiran['alpa'] == true) {
            $kehadiran['hadir'] = "";
            $kehadiran['alpa'] = "checked";
            $kehadiran['izin'] = "";
         }else if($kehadiran['izin'] == true) {
            $kehadiran['hadir'] = "";
            $kehadiran['alpa'] = "";
            $kehadiran['izin'] = "checked";
         }
    }
    ?>
</table>