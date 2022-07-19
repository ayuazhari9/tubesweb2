<?php
    include "koneksi.php";

    $id = $_POST['id'];
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
    
    if (isset($_POST['edit'])) {
        $img_tmp = $_FILES['file']['tmp_name'];
        $img_name = $_FILES['file']['name'];
        move_uploaded_file($img_tmp, 'image/'.$img_name);
        $sql = mysqli_query($koneksi, "UPDATE biodata 
        SET Id = '$id',  nama='$nama', tl='$tl', tgl='$tgl', jk='$jk', agama='$agama', alamat='$alamat',
        status='$status', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', hobi='$hobi', motto='$motto', foto='$img_name'
        WHERE Id='$id'");
        if($sql){ ?>
            <script>
                alert('Update Data Sukses');
                window.location.href = "home.php";
            </script>
<?php
        } else {
            echo "Update Data Gagal";
        }
    }
?>