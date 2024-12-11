<?php  
    include '../koneksi.php';
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
    switch($aksi){
        case 'list':
?>
            <h1 class="h2 border-bottom pb-3">Kategori</h1>
            <a href="index.php?p=kategori&aksi=input" class="btn btn-primary mb-5"><i class="bi bi-plus-circle me-2"></i>Tambah Data</a>
            <table id="example" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    
                    $getData = mysqli_query($db,"SELECT * FROM kategori");
                    $no = 1;
                    while($kategori = mysqli_fetch_array($getData)){
                        ?>
                    <tr>
                        <td><?= $kategori['id'] ?></td>
                        <td><?= $kategori['nama_kategori'] ?></td>
                        <td>
                            <a href="index.php?p=kategori&aksi=edit&id=<?= $kategori['id'] ?>" class="btn btn-warning"><bi class="bi-pencil-square me-2"></bi>edit</a>
                            <a href="proses_kategori.php?proses=delete&id=<?= $kategori['id'] ?>" class="btn btn-danger"  onclick="return confirm('yakin ingin menghapus data?')"><i class="bi bi-trash-fill me-2"></i>hapus</a>
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
            <div class="row justify-content-center  py-5">    
                <form action="proses_kategori.php?proses=insert" method="post" class="col-md-4">
                <h3 class="mb-5">Form kategori</h3>
                    <div class="mb-3 pb-3">
                        <label for="nama_kategori" class="form-label">Nama kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required autofocus>
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
                
                $getData = mysqli_query($db,"SELECT * FROM kategori WHERE id = $_GET[id]");
                $no = 1;
                
                $kategori = mysqli_fetch_array($getData);

            ?>


            <div class="row justify-content-center  py-5">    
                <form action="proses_kategori.php?proses=update" method="post" class="col-md-4">
                <h3 class="mb-5">Edit kategori</h3>
                    <div class="mb-3 pb-3">
                        <label for="id" class="form-label">Id kategori</label>
                        <input type="number" name="" class="form-control" id="id" required autofocus value="<?= $kategori['id'] ?>" disabled>
                        <input type="hidden" name="id" class="form-control" id="id" required autofocus value="<?= $kategori['id'] ?>">
                    </div>
                    <div class="mb-3 pb-3">
                        <label for="nama_kategori" class="form-label">Nama kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?= $kategori['nama_kategori'] ?>" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-warning" name="submit">Update</button>
                    
                </form>

                <?php 
                    if(isset($_POST['submit'])){
                        
                        
                        $id = $_POST['id'];
                        $nama_kategori = $_POST['nama_kategori'];

                        $update = mysqli_query($db,"UPDATE kategori SET 
                            nama_kategori='$nama_kategori',
                            WHERE id='$id'");
                        if($update){
                            echo("<script>window.location='index.php?p=kategori'</script>");
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

   