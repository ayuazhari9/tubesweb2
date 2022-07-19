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
    </div>
    </nav>

    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        else {
            die ("Error. No ID Selected!");    
        }
        include "koneksi.php";
        $query    =mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
        $result    =mysqli_fetch_array($query);
    ?>
    <h1 style="color: white; text-align:center;">BIODATA DIRI</h1>
    <div style="display: flex; margin:2px;">
    <img src="image/<?= $result['foto'] ?>" style="width :25%" class="card-img-top" alt="...">
    <div style="font-size: 25px; color: white; margin:10px;">
        <table border="0" cellpadding="4">
            <tr>
                <td size="90">Nama Lengkap</td>
                <td>: <?= $result['nama']?></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td>: <?= $result['tl']?>, 
                <?= $result['tgl']?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $result['jk']?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: <?= $result['agama']?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?= $result['alamat']?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?= $result['status']?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: <?= $result['pekerjaan']?></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: <?= $result['kewarganegaraan']?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>: <?= $result['hobi']?></td>
            </tr>
            <tr>
                <td>Motto Hidup</td>
                <td>: <?= $result['motto']?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>: <?= $result['foto']?></td>
            </tr>
            <tr>
                <td>
                    <a href="./" type="button" class="btn btn-warning">Kembali</a>
                    <a href="edit_data.php?id=<?= $result['id'] ?>" type="button" class="btn btn-warning">Edit data</a>
                    <a href="hapus_data.php?id=<?= $result['id'] ?>" type="button" class="btn btn-danger">Hapus data</a>
                </td>
            </tr>
        </table>
    </div>  
    </div>
</body>
</html>