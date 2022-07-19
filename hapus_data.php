<?php
session_start();
if($_SESSION['status'] != "login"){
  header("location:login.php");
}

include "koneksi.php";

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM biodata where id = '$id' ");
if($sql) { ?>
    <script>
        alert('Hapus Data Sukses');
        window.location.href = "home.php";
    </script>
<?php
} else {
    echo "Hapus Data Gagal";
}
?> 