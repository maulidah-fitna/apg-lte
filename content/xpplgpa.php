 <!-- <head>
    <?php /*include "../parts/head.php"*/ ?>
</head> -->

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->

            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                        </span>
                </div>
            </form>

            <form action="data-absen-insert.php" method="post">
             <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <!-- <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr> -->


                    <th>No</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Alpa</th>
                    <th>Izin</th>
                                    
                    <th>Kaos Kaki</th>
                    <th>Sabuk</th>
                    <th>Seragam</th>
                    <th>Songkok</th>
                    <th>Sepatu</th>
                    <th>Hasduk</th>
                </thead>
                <tbody>
                
                <?php
                        $query = "SELECT * FROM siswa_putra WHERE kelas='10' && jurusan='PPLG'";
                        // $query .= "LEFT JOIN data-absen ";
                        // $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        // $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>

                <!-- <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr> -->

                <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><input type="radio" name="hadir"></td>
                                <td><input type="radio" name="alpa"></td>
                                <td><input type="radio" name="izin"></td>
                                
                                <td><input type="checkbox" name="kaos-kaki" checked></td>
                                <td><input type="checkbox" name="sabuk" checked></td>
                                <td><input type="checkbox" name="seragam" checked></td>
                                <td><input type="checkbox" name="songkok" checked></td>
                                <td><input type="checkbox" name="sepatu" checked></td>
                                <td><input type="checkbox" name="hasduk" checked></td>
                            </tr>
<?php
    }
?>

                </tbody>
                <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th> -->

                  <th>No</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Alpa</th>
                    <th>Izin</th>
                                    
                    <th>Kaos Kaki</th>
                    <th>Sabuk</th>
                    <th>Seragam</th>
                    <th>Songkok</th>
                    <th>Sepatu</th>
                    <th>Hasduk</th>
                </tr>
                </tfoot>

                
              </table>

              <input type="submit" value="Submit">
              
            </form>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



