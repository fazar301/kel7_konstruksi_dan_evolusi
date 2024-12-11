<?php  
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
    switch($aksi){
        case 'list':
?>
            <h3 class="mb-4">Daftar Prodi</h3>
            <table id="example" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nama Prodi</th>
                        <th>Jenjang</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>

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

   