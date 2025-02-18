<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data User</h3>
                </div>
                <div class="box-body">
                <div><a href="?hal=tambah-user" class="btn  btn-primary">Tambah</a></div><br>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>            
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM user";
                            $result = mysqli_query($con, $query);
                            $no = 0;
                            
                            while($data = mysqli_fetch_assoc($result)){
                            // while($data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM data_siswa"))) {
                                $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_lengkap']?></td>
                                <td><?=$data['username']?></td>
                                <td><?=$data['password']?></td>
                            </tr>
<?php
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
