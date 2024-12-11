
    <?php
        include('koneksi.php');
        $getData = mysqli_query($db,"SELECT * FROM prodi WHERE id = $_GET[id]");
        $no = 1;
        
        $prodi = mysqli_fetch_array($getData);

    ?>


    <div class="row justify-content-center  py-5">    
        <form action="" method="post" class="col-md-4">
        <h3 class="mb-5">Edit Prodi</h3>
            <div class="mb-3 pb-3">
                <label for="id" class="form-label">Id Prodi</label>
                <input type="number" name="" class="form-control" id="id" required autofocus value="<?= $prodi['id'] ?>" disabled>
                <input type="hidden" name="id" class="form-control" id="id" required autofocus value="<?= $prodi['id'] ?>">
            </div>
            <div class="mb-3 pb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" value="<?= $prodi['nama_prodi'] ?>" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="jenjang" class="form-label">Jenjang Studi</label>
                <select name="jenjang" class="form-select" id="jenjang" required>
                    <option value="" disabled>--- Pilih Jenjang ---</option>
                    <option value="d2" <?= $prodi['jenjang_studi'] == 'd2' ? 'selected' : '' ?>>D2</option>
                    <option value="d3" <?= $prodi['jenjang_studi'] == 'd3' ? 'selected' : '' ?>>D3</option>
                    <option value="d4" <?= $prodi['jenjang_studi'] == 'd4' ? 'selected' : '' ?>>D4</option>
                    <option value="s2" <?= $prodi['jenjang_studi'] == 's2' ? 'selected' : '' ?>>S2</option>
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="ket" class="form-label">Keterangan</label>
                <textarea class="form-control" id="ket" name="ket" required><?= $prodi['keterangan'] ?></textarea>
                
            </div>
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
            
        </form>

        <?php 
            
        ?>

    </div>
    