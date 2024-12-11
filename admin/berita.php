<?php
    include '../koneksi.php';
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'list';

    switch ($aksi) {
        case 'list':
?>

        <h1 class="h2 border-bottom pb-3">Berita</h1>
        <a href="?p=berita&aksi=input" class="btn btn-primary mb-5"><i class="bi bi-plus-circle me-2"></i>Tambah Data</a>
        <table id="example" class="table table-bordered table-striped">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>kategori</th>
                    <th>Berita</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                
                $getData = mysqli_query($db,"SELECT * FROM berita JOIN kategori ON berita.kategori_id = kategori.id");
                $no = 1;
                while($arrData = mysqli_fetch_array($getData)){
                    ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $arrData['judul_berita'] ?></td>
                <td><img src="img/<?= $arrData['file_upload'] ?>" alt="" width="150"></td>
                <td><?= $arrData['nama_kategori'] ?></td>
                <td><?= $arrData['isi_berita'] ?></td>
                <td>
                    <a href="?p=mhs&aksi=edit&nim=<?= $arrData['nim'] ?>" class="btn btn-warning"><bi class="bi-pencil-square me-2"></bi>edit</a>
                    <a href="proses_berita.php?proses=delete&nim=<?= $arrData['nim'] ?>" class="btn btn-danger"  onclick="return confirm('yakin ingin menghapus data?')"><i class="bi bi-trash-fill me-2"></i>hapus</a>
                </td>
            </tr>
            <?php 
            $no++;
        } 
        ?>
        </tbody>
    </table>

<?php 
            break;
        case 'input':
?>
    <div class="row justify-content-center py-5">    
        <form action="proses_berita.php?proses=insert" method="post" class="col-md-8" enctype="multipart/form-data">
        <h3 class="mb-5">Form berita</h3>
            <div class="mb-3 pb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" class="form-select" id="kategori" required>
                    <option value="" disabled selected>--- Pilih kategori ---</option>
                    <?php 
                        include 'koneksi.php';
                        $ambil_kategori = mysqli_query($db,"SELECT * FROM kategori");

                        while($data_kategori = mysqli_fetch_array($ambil_kategori)){
                            echo("<option value=".$data_kategori['id'].">".$data_kategori['nama_kategori']."</option>");
                        }
                    ?>
                    
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" accept="image/jpg,image/png,image/jpeg,image/gif" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="berita" class="form-label">Berita</label>
                <textarea class="form-control" id="berita" name="berita" rows="10"  required></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>

    </div>
<?php 
            break;
        case 'edit':

?>

<?php
        
        $getData = mysqli_query($db,"SELECT * FROM berita WHERE nim = $_GET[nim]");
        $no = 1;
        
        $arrData = mysqli_fetch_array($getData);
        $tgl = explode('-',$arrData['tgl_lahir']);
        $hobies = explode(',', $arrData['hobi']);
    ?>


    <div class="row justify-content-center  py-5">    
        <form action="proses_berita.php?proses=update" method="post" class="col-md-4">
        <h3 class="mb-5">Edit berita</h3>
            <div class="mb-3 pb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" name="" class="form-control" id="nim" required autofocus value="<?= $arrData['nim'] ?>" disabled>
                <input type="hidden" name="nim" class="form-control" id="nim" required autofocus value="<?= $arrData['nim'] ?>">
            </div>
            <div class="mb-3 pb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $arrData['nama'] ?>" required autofocus>
            </div>
            <div class="mb-3 row g-3 pb-3">
                <label for="" class="form-label col-12" style="margin-bottom: -5px;">Tanggal Lahir</label>
                <select name="tgl" id="" class="form-select col me-4">
                        <option value="" disabled selected>-dd-</option>
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                $selected = ($tgl[2] == $i) ? 'selected' : '';
                                echo "<option value='$i' $selected>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="bln" id="" class="form-select col me-4">
                        <option value="" disabled selected>-mm-</option>
                        <?php
                            $bln = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];

                            foreach ($bln as $i => $value) {
                                $selected = ($tgl[1] == $i+1) ? 'selected' : '';

                                echo "<option value=".($i+1)." $selected>".$value."</option>";
                            }
                        ?>
                    </select>
                    <select name="thn" id="" class="form-select col">
                        <option value="" disabled selected>-thn-</option>
                        <?php
                            for($i = date('Y'); $i >= 1945; $i--){
                                $selected = ($tgl[0] == $i) ? 'selected' : '';

                                echo "<option value='$i' $selected>$i</option>";
                            }
                        ?>
                    </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <input type="radio" class="form-check-input me-2" name="jk" id="lk" value="L" <?= $arrData['jk'] == 'L' ? 'checked' : '' ?>><label for="lk">Laki-Laki</label>
                <input type="radio" class="form-check-input ms-4 me-2" name="jk" id="pr" value="P"  <?= $arrData['jk'] == 'P' ? 'checked' : '' ?>><label for="pr">Perempuan</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" class="form-select" id="prodi" required>
                    <option value="" disabled>--- Pilih Prodi ---</option>
                    <?php 
                        include 'koneksi.php';
                        $ambil_prodi = mysqli_query($db,"SELECT * FROM prodi");

                        while($data_prodi = mysqli_fetch_array($ambil_prodi)){
                            echo("<option value=".$data_prodi['id']." ".($arrData['prodi_id'] == $data_prodi['id'] ? 'selected' : '').">".$data_prodi['nama_prodi']."</option>");
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?= $arrData['email'] ?>" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="hobi" class="form-label">Hobi</label><br>
                <input type="checkbox" name="hobi[]" id="coding" value="coding" class="me-2 form-check-input" <?php if(in_array("coding",$hobies)) echo "checked" ?>><label for="coding" class="me-3">Coding</label>
                <input type="checkbox" name="hobi[]" id="game" value="game" class="me-2 form-check-input" <?php if(in_array("game",$hobies)) echo "checked" ?>><label for="game" class="me-3">Bermain Game</label>
                <input type="checkbox" name="hobi[]" id="memancing" class="me-2 form-check-input" value="memancing" <?php if(in_array("memancing",$hobies)) echo "checked" ?>><label for="memancing" class="me-3">Memancing</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?= $arrData['alamat'] ?></textarea>
                
            </div>
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
            
        </form>

        <?php 
            if(isset($_POST['submit'])){
                
                
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                $jk = $_POST['jk'];
                $prodi = $_POST['prodi'];
                $hobis = $_POST['hobi'];
                $alamat = $_POST['alamat'];
                $email = $_POST['email'];
                $tgl = $_POST['tgl'];
                $bln = $_POST['bln'];
                $thn = $_POST['thn'];

                $JenisKelamin = $jk == 'L' ? 'Laki-Laki' : 'Perempuan';
                $jurusan;

                $tgl_lhr = $thn . '-' . $bln . '-' . $tgl;
                $hobby = implode(',', $hobis);


                $update = mysqli_query($db,"UPDATE berita SET 
                    nama='$nama',
                    tgl_lahir='$tgl_lhr',
                    jk='$jk',
                    email='$email',
                    alamat='$alamat',
                    prodi_id='$prodi',
                    hobi='$hobby'
                    WHERE nim='$nim'");
                if($update){
                    echo("<script>window.location='index.php?p=mhs'</script>");
                }else {
                    echo "Error: " . mysqli_error($db);
                }

            }
        ?>

    </div>

<?php 
        break;
    }
?>