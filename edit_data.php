<?php
    session_start();
    if($_SESSION['status'] != "login"){
      header("location:login.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIODATA</title>

    <link rel="stylesheet" href="css/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    </head>
<body style="background-image: url(asset/4.JPG);">


                                                    <!-- awal navbar -->

    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">KELOMPOK 3</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Anggota
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                foreach ($query as $result) {
                    ?>
                <a class="dropdown-item" href="detail.php?id=<?=$result["id"]?>">
                    <li><?= $result['nama']?></li>
                    <li class="nav-item">
                </a>
                <?php
                }
                ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
    
    </div>
    </nav>

    <?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM biodata where id = '$id' ");

foreach ($sql as $data => $key) : ?>
    <body>
    <div style="font-size: 20px; color: white; margin:40px;">
        <form action="proses_edit.php" method ="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Id</td>
                    <td>
                        <input type="number" name="id" value="<?= $key['id'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>
                        <input type="text" name="nama" value="<?= $key['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>
                        <input type="text" name="tl" value="<?= $key['tl'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="date" name="tgl" value="<?= $key['tgl'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jk">
                            <option value="<?= $key['jk']?>">
                                <?= $key['jk']?>
                            </option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama" value="<?= $key['agama'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $key['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option value="<?= $key['status']?>">
                                <?= $key['status']?>
                            </option>
                            <option value="belum kawin">Belum Kawin</option>
                            <option value="sudah kawin">Sudah Kawin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" value="<?= $key['pekerjaan'] ?>"></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>
                        <select name="kewarganegaraan">
                            <option value="<?= $key['kewarganegaraan']?>">
                                <?= $key['kewarganegaraan']?>
                            </option>
                            <option value="wni">WNI</option>
                            <option value="wna">WNA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="hobi" value="<?= $key['hobi'] ?>"></td>
                </tr>
                <tr>
                    <td>Motto</td>
                    <td><input type="text" name="motto" value="<?= $key['motto'] ?>"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><img src="image/<?= $key['foto']?>" style="height: 100px;">
                    <input type="file" name="file" value="<?= $key['foto'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="edit" class="btn btn-warning" >update</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
<?php endforeach;?>
</html>