
    <h3 class="mb-4">Daftar Prodi</h3>
    <a href="index.php?p=tambah_prodi" class="btn btn-primary mb-5">Tambah Data</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Nama Prodi</th>
            <th>Jenjang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include('koneksi.php');
            $getData = mysqli_query($db,"SELECT * FROM prodi");
            $no = 1;
            while($prodi = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $prodi['id'] ?></td>
                <td><?= $prodi['nama_prodi'] ?></td>
                <td><?= $prodi['jenjang_studi'] ?></td>
                <td><?= $prodi['keterangan'] ?></td>
                <td>
                    <a href="index.php?p=edit_prodi&id=<?= $prodi['id'] ?>" class="btn btn-warning">edit</a>
                    <a href="hapus_prodi.php?id=<?= $prodi['id'] ?>" class="btn btn-danger"  onclick="return confirm('yakin ingin menghapus data?')">hapus</a>
                </td>
            </tr>
        <?php 
            $no++;
            } 
        ?>
    </table>
