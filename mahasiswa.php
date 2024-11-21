
    <div class="row justify-content-center  py-5">    
        <form action="" method="post" class="col-md-4">
        <h3 class="mb-5">Form Mahasiswa</h3>
            <div class="mb-3 pb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" id="nim" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required autofocus>
            </div>
            <div class="mb-3 row g-3 pb-3">
                <label for="" class="form-label col-12" style="margin-bottom: -5px;">Tanggal Lahir</label>
                <select name="tgl" id="" class="form-select col me-4">
                        <option value="" disabled selected>-dd-</option>
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="bln" id="" class="form-select col me-4">
                        <option value="" disabled selected>-mm-</option>
                        <?php
                            $bln = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];

                            foreach ($bln as $i => $value) {
                                echo "<option value=".($i+1).">".$value."</option>";
                            }
                        ?>
                    </select>
                    <select name="thn" id="" class="form-select col">
                        <option value="" disabled selected>-thn-</option>
                        <?php
                            for($i = date('Y'); $i >= 1945; $i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <input type="radio" class="form-check-input me-2" name="jk" id="lk" value="L" checked><label for="lk">Laki-Laki</label>
                <input type="radio" class="form-check-input ms-4 me-2" name="jk" id="pr" value="P"><label for="pr">Perempuan</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" class="form-select" id="prodi" required>
                    <option value="" disabled selected>--- Pilih Prodi ---</option>
                    <?php 
                        include 'koneksi.php';
                        $ambil_prodi = mysqli_query($db,"SELECT * FROM prodi");

                        while($data_prodi = mysqli_fetch_array($ambil_prodi)){
                            echo("<option value=".$data_prodi['id'].">".$data_prodi['nama_prodi']."</option>");
                        }
                    ?>
                    
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="hobi" class="form-label">Hobi</label><br>
                <input type="checkbox" name="hobi[]" id="coding" value="coding" class="me-2 form-check-input"><label for="coding" class="me-3">Coding</label>
                <input type="checkbox" name="hobi[]" id="game" value="game" class="me-2 form-check-input"><label for="game" class="me-3">Bermain Game</label>
                <input type="checkbox" name="hobi[]" id="memancing" class="me-2 form-check-input"value="memancing"><label for="memancing" class="me-3">Memancing</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>

        <?php 
            if(isset($_POST['submit'])){
                include('koneksi.php');
                
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


                $insert = mysqli_query($db,"INSERT INTO mahasiswa(nim,nama,tgl_lahir,jk,email,alamat,prodi_id,hobi) VALUES ('$nim','$nama','$tgl_lhr','$jk','$email','$alamat','$prodi','$hobby')");
                if($insert){
                    echo("<script>window.location='index.php?p=mhs'</script>");
                }

            }
        ?>

    </div>
