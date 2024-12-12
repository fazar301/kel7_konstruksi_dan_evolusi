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
    if($_GET['proses'] == 'update'){
        if(isset($_POST['submit'])){
            
            $userId = $_SESSION['id'];
            $id = $_POST['id'];
            $judul = $_POST['judul'];
            $kategori = $_POST['kategori'];
            $berita = $_POST['berita'];
            $gambar = upload();
            if(!$gambar){
                $gambar = $_POST['gambar_lama'];
            }    

            $update = mysqli_query($db,"UPDATE berita SET 
                user_id = $userId,
                judul_berita = '$judul',
                kategori_id = $kategori,
                isi_berita = '$berita',
                file_upload = '$gambar'
                WHERE id = $id");
            if($update){
                echo("<script>window.location='index.php?p=berita'</script>");
            }else {
                echo "Error: " . mysqli_error($db);
            }

        }
    }
    if($_GET['proses'] == 'delete'){
        
        $hapus = mysqli_query($db, "DELETE FROM berita WHERE id = $_GET[id]");

        if($hapus){
            header("location:index.php?p=berita");
        }
    }
