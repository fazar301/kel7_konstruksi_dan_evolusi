
    <h3 class="mb-4">Daftar Mahasiswa</h3>
    <a href="?p=tambah_mhs" class="btn btn-primary mb-5">Tambah Data</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jekel</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include('koneksi.php');
            $getData = mysqli_query($db,"SELECT * FROM mahasiswa");
            $no = 1;
            while($arrData = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $arrData['nim'] ?></td>
                <td><?= $arrData['nama'] ?></td>
                <td><?= $arrData['email'] ?></td>
                <td><?= $arrData['jk'] ?></td>
                <td><?= $arrData['alamat'] ?></td>
                <td>
                    <a href="?p=edit_mhs&nim=<?= $arrData['nim'] ?>" class="btn btn-warning">edit</a>
                    <a href="hapus_mahasiswa.php?nim=<?= $arrData['nim'] ?>" class="btn btn-danger"  onclick="return confirm('yakin ingin menghapus data?')">hapus</a>
                </td>
            </tr>
        <?php 
            $no++;
            } 
        ?>
    </table>