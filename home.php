<?php
    session_start();
    if($_SESSION['status'] != "login"){
      header("location:login.php");
    }
    include "koneksi.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM biodata WHERE id");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINAL WEB KELOMPOK 3</title>
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
          <a class="nav-link active " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <!-- akhir navbar -->

                                                <!-- awal slide -->

<div id="carouselExampleCaptions" class="carousel slide w-" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner p-3"  style="width: 90%; left:85px"'>
    <div class="carousel-item active">
      <img src="asset/slide1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/slide2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/slide3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                                                <!-- akhir slide -->

                                                <!-- awal info -->
<?php
foreach ($query as $result) {
?>
    <div class="d-flex p-2">
    <div class="card" style="width: 18rem; margin: 20px;" enctype="multipart/form-data">
        <img src="image/<?= $result['foto'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $result['nama']?></h5>
            <p class="card-text"><?= $result['motto']?></p>
            <a href="detail.php?id=<?=$result["id"]?>" class="btn btn-warning btn-outline-dark">Detail</a>
    </div>
    </div>
<?php
    }        
?>
<div class="card" style="height: 500px; width: 18rem; top:25px;">
  <img src="image/profil.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="tambah_data.php" class="btn btn-warning btn-outline-dark">Tambah Anggota</a>    
  </div>
</div>
                                                    <!-- akhir info -->
   
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>