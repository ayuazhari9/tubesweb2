<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINAL WEB KELOMPOK 3</title>
    <link rel="stylesheet" href="css/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 70px 150px;
    }
    </style>
  
  <body style="background-image: url(asset/4.JPG);">
  <h1 align="center" style='margin: 50px; color: white;'>FINAL PEMROGRAMAN WEB KELOMPOK 3</h1>
  <br>
  
    <body>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<h3 style=color:red>Username atau Password anda tidak sesuai !<h3>";
            }
        }
        ?>
        <div style="margin: 0px 650px 0px 630px;" >
        <form action="cek_login.php" method="post" style="margin: -40px -80px;">
            <label>Username:</label>
            <input type=" text" name="username" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required> <br><br>
            <button class="btn">
                <input type="submit" value="Login" class="tombol">
            </button>
            <br>
            <p>Belum punya akun? silahkan <a href="register.php">mendaftar</a></p>
        </form>
        </div>

        
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  