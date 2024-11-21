
    <div class="row justify-content-center  py-5">    
        <form action="" method="post" class="col-md-4">
        <h3 class="mb-5">Form Prodi</h3>
            <div class="mb-3 pb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                <select name="jenjang" class="form-select" id="jenjang" required>
                    <option value="" disabled selected>--- Pilih Jenjang ---</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4">D4</option>
                    <option value="s2">S2</option>
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="ket" class="form-label">Keterangan</label>
                <textarea class="form-control" id="ket" name="ket" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>

        <?php 
            if(isset($_POST['submit'])){
                include('koneksi.php');
                
                $nama_prodi = $_POST['nama_prodi'];
                $jenjang = $_POST['jenjang'];
                $ket = $_POST['ket'];


                $insert = mysqli_query($db,"INSERT INTO prodi(nama_prodi,jenjang_studi,keterangan) VALUES ('$nama_prodi','$jenjang','$ket')");
                if($insert){
                    echo("<script>window.location='index.php?p=prodi'</script>");
                }else {
                    echo "Error: " . mysqli_error($db);
                }

            }
        ?>

    </div>
