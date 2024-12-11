<?php
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'list';

    switch ($aksi) {
        case 'list':
?>

    <h3 class="mb-4">Daftar Mahasiswa</h3>
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Prodi</th>
                    <th>Jekel</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include('koneksi.php');
                $getData = mysqli_query($db,"SELECT * FROM mahasiswa JOIN prodi ON mahasiswa.prodi_id = prodi.id");
                $no = 1;
                while($arrData = mysqli_fetch_array($getData)){
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $arrData['nim'] ?></td>
                    <td><?= $arrData['nama'] ?></td>
                    <td><?= $arrData['email'] ?></td>
                    <td><?= $arrData['nama_prodi'] ?></td>
                    <td><?= $arrData['jk'] ?></td>
                    <td><?= $arrData['alamat'] ?></td>
                </tr>
                <?php 
                $no++;
            } 
            ?>
        </tbody>
    </table>

<?php 
        break;
    }
?>