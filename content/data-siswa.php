<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h2 >Data Siswa</h2>
                </div>
                <div class="box-body">
                <div><a href="?hal=tambah-siswa" class="btn  btn-primary">Tambah</a></div><br>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>            
                                <th>Jurusan</th>
                                <th>Gender</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM data_siswa";
                            $result = mysqli_query($con, $query);
                            $no = 0;
                            
                            while($data = mysqli_fetch_assoc($result)){
                                $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nis']?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><?=$data['kelas']?></td>
                                <td><?=$data['jurusan']?></td>
                                <td><?=$data['gender']?></td>
                                <td>
                                    <a href="?hal=edit-siswa&nis=<?=$data['nis']?>" class="btn btn-block btn-warning">Edit</a>
                                    <a href="?hal=siswa-hapus&nis=<?=$data['nis']?>" class="btn btn-block btn-danger">Hapus</a>
                                </td>
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
