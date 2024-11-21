<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
    <?php 
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $hobis = $_POST['hobi'];
            $strHobi = '';
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $tgl = $_POST['tgl'];
            $bln = $_POST['bln'];
            $namaBln = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];
            $thn = $_POST['thn'];

            $JenisKelamin = $jk == 'lk' ? 'Laki-Laki' : 'Perempuan';
            $jurusan;


            switch($prodi){
                case 'mi':
                    $jurusan = 'Manajemen Informatika';
                    break;
                case 'trpl':
                    $jurusan = 'Teknologi Rekayasa Perangkat Lunak';
                    break;
                case 'tekom':
                    $jurusan = 'Teknik Komputer';
                    break;
                default:
                    $jurusan = 'Animasi';
            }

            echo 'Nama anda = <b>'. $nama . '</b>';
            echo '<br>NIM anda = <b>'. $nim . '</b>';
            echo '<br>Tanggal lahir anda = <b>'. $tgl . ' ' . $namaBln[$bln-1] . ' ' . $thn . '</b>';
            echo  '<br>Jenis Kelamin anda = <b>' . $JenisKelamin . '</b>';
            echo '<br>Email anda = <b>'. $email . '</b>';
            echo '</b><br>Prodi anda = <b>'. $jurusan . '</b>';
            echo '</b><br>Hobi anda = <b>' . implode(', ', $hobis) . '</b>';            
            echo '</b><br>Alamat anda = <b>'. $alamat . '</b>';
        }
    ?>
</body>
</html>