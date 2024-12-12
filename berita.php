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
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                
                $getData = mysqli_query($db,"SELECT *, berita.id AS berita_id FROM berita JOIN kategori ON berita.kategori_id = kategori.id");
                $no = 1;
                while($arrData = mysqli_fetch_array($getData)){
                    ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $arrData['judul_berita'] ?></td>
                <td><?= $arrData['nama_kategori'] ?></td>
                <td><?= $_SESSION['nama'] ?></td>
                <td><?= date('D d M Y',strtotime($arrData['date_created'])) ?></td>
                <td>
                    <a href="?p=berita&aksi=edit&id=<?= $arrData['berita_id'] ?>" class="btn btn-warning"><bi class="bi-pencil-square me-2"></bi>edit</a>
                    <a href="proses_berita.php?proses=delete&id=<?= $arrData['berita_id'] ?>" class="btn btn-danger"  onclick="return confirm('yakin ingin menghapus data?')"><i class="bi bi-trash-fill me-2"></i>hapus</a>
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
                <img src="#" alt="Preview Uploaded Image" id="file-preview" class="d-block d-none" width="180" alt="">
                <input type="file" name="gambar" class="form-control" id="file-upload" accept="image/*"  required autofocus>
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
        
        $no = 1;
        $berita = select("SELECT * FROM berita WHERE id = $_GET[id]")[0];
        $kategoris = select("SELECT * FROM kategori");
    ?>


<div class="row justify-content-center py-5">    
        <form action="proses_berita.php?proses=update" method="post" class="col-md-8" enctype="multipart/form-data">
        <h3 class="mb-5">Edit berita</h3>
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $berita['id'] ?>" required>
            <div class="mb-3 pb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" value="<?= $berita['judul_berita'] ?>" class="form-control" id="judul" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" class="form-select" id="kategori" required>
                    <option value="" disabled>--- Pilih kategori ---</option>
                    <?php foreach ($kategoris as $kategori) { ?>
                        <option value="<?= $kategori['id'] ?>" <?= $berita['kategori_id'] == $kategori['id'] ? 'selected' : '' ?>><?= $kategori['nama_kategori'] ?></option>
                    <?php } ?>
                    
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <img src="img/<?= $berita['file_upload'] ?>" id="file-preview" class="d-block" width="180" alt="">
                <p><?= $berita['file_upload'] ?></p>
                <input type="file" name="gambar" class="form-control" id="file-upload" accept="image/jpg,image/png,image/jpeg,image/gif" autofocus>
                <input class="form-control" type="hidden" name="gambar_lama" value="<?= $berita['file_upload'] ?>">
            </div>
            <div class="mb-3 pb-3">
                <label for="berita" class="form-label">Berita</label>
                <textarea class="form-control" id="berita" name="berita" rows="10"  required><?= $berita['isi_berita'] ?></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>

    </div>

<?php 
        break;
    }
?>


<script>
    const input = document.getElementById('file-upload');
    const previewPhoto = () => {
        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');
            preview.classList.remove('d-none');
            fileReader.onload = function (event) {
                preview.setAttribute('src', event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
    input.addEventListener("change", previewPhoto);
</script>