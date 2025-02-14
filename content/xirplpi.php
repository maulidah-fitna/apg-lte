<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>

            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                        </span>
                </div>
            </form>
             <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
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
                        $query = "SELECT * FROM siswa_putri WHERE kelas='11' && jurusan='RPL'";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>

                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                            </tr>
<?php
    }
?>

                </tbody>
                <tfoot>
                <tr>
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
            </div> 
          </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>

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

          </div>

        </div>

      </div>

    </section>



