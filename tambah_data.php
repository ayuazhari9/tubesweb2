<?php
    session_start();
    if($_SESSION['status'] != "login"){
      header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Form Tambah Data</title>
    
    <link rel="stylesheet" href="css/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
<body>
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
    <div style="font-size: 20px; color: white; margin:40px;">
    <form action="proses_tambah.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <input type="text" name="tl">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk">
                        <option></option>
                        <option value="lk">Laki-laki</option>
                        <option value="pr">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <input type="text" name="agama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option></option>
                        <option value="bk">Belum Kawin</option>
                        <option value="sk">Sudah Kawin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan">
                </td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>
                    <select name="kewarganegaraan">
                        <option></option>
                        <option value="wni">WNI</option>
                        <option value="wna">WNA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="text" name="hobi">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="./" type="button" class="btn btn-warning">Kembali</a>
                    <button name="tambah" value="tambah" class="btn btn-warning">Tambah Data</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>