<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $tl = $_POST['tl'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $hobi = $_POST['hobi'];
    $motto = $_POST['motto'];

    if (isset($_POST['tambah'])){
        $img_tmp = $_FILES['file']['tmp_name'];
        $img_name = $_FILES['file']['name'];
        move_uploaded_file($img_tmp, 'image/'.$img_name);
        $sql = mysqli_query($koneksi, "INSERT INTO biodata
        VALUES('',  '$nama', '$tl', '$tgl', '$jk', '$agama', '$alamat', '$status', '$pekerjaan', 
        '$kewarganegaraan', '$hobi', '$motto', '$img_name')");
        if($sql){ ?>
            <script>
                alert('Tambah Data Sukses');
                window.location.href = "home.php";
            </script>
<?php
        } else {
            echo "Tambah Data Gagal";
        }
    }
?>