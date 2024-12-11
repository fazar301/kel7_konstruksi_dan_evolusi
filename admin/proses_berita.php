<?php
    session_start();
    include('../koneksi.php');
    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $tmpLoc = $_FILES['gambar']['tmp_name'];

        $validExt = ['jpg','jpeg','png','gif'];
        $gambarExt = strtolower(end(explode('.',$namaFile)));

        if(!in_array($gambarExt,$validExt) || $ukuranFile > 10000000){
            return false;
        }

        $uid = uniqid();
        $namaFileBaru = $uid . '.' . $gambarExt;
        
        move_uploaded_file($tmpLoc,'img/' . $namaFileBaru);
        return $namaFileBaru;
        
    }
    if($_GET['proses'] == 'insert'){
        if(isset($_POST['submit'])){
            
            $userId = $_SESSION['id'];
            $judul = $_POST['judul'];
            $kategori = $_POST['kategori'];
            $berita = $_POST['berita'];
            $gambar = upload();


            $insert = mysqli_query($db,"INSERT INTO berita(user_id,judul_berita,kategori_id,isi_berita,file_upload) VALUES ($userId,'$judul',$kategori,'$berita','$gambar')");
            if($insert){
                echo("<script>window.location='index.php?p=berita'</script>");
            }

        }
    }
    if($_GET['proses'] == 'delete'){
        
        $hapus = mysqli_query($db, "DELETE FROM mahasiswa WHERE nim = $_GET[nim]");

        if($hapus){
            header("location:index.php?p=mhs");
        }
    }
    if($_GET['proses'] == 'update'){
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


            $update = mysqli_query($db,"UPDATE mahasiswa SET 
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
    }
