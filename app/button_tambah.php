<?php
    include ("../auth/koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk </title>
        <!-- Link CSS -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- remixiIcon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        * {
            color : white;
        }
        input {
            color:black;
        }
        .base {
            width:50%;
            padding :20px;
            margin-left:auto;
            margin-right:auto;
            background-color: grey;
        }
        h1 {
            color : blue;
        }
        label {
            margin-top = 10px;
            float : left;
            text-align = left;
            width : 100%;
        }
        input {
            padding: 6px;
            width :100%;
            box-sizing : border-box;
            background-color: #f8f8f8;
            border : 2px solid #ccc;
            outline-color: blue;
        }
        button {
            background-color: blue;
            color: white;
            padding : 10px;
            font-size : 12px;
            border : 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center><h1>Tambah Produk</h1></center>
        <center><a class="btn btn-danger" href="tambahproduk.php">x &nbsp; Cancel</a></center>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label >Nama Produk</label>
            <input type="text" name="nama" autofocus="" required=""/>
        </div>
        <div>
            <label >Harga Produk</label>
            <input type="text" name="harga" autofocus="" required=""/>
        </div>
        <div>
            <label >Gambar</label>
            <input type="file" name="image" required=""/>
        </div>
        <div>
            <button type="submit">Simpan Produk</button>
            
        </div>
        
    </section>
    </form>
    <!-- <button type="submit">CAN</button> -->
</body>
</html>