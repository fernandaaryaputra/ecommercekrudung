<?php
    include ("../auth/koneksi.php");
    if(isset($_GET['idproduct'])){
        $id=$_GET['idproduct'];
        $query = "SELECT * FROM product where idproduct = '$id'";
        $result = mysqli_query($mysqli, $query);
        if(!$result){
            die("Query Error :".mysqli_error($mysqli)."-".mysqli_error($mysqli));

        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)){
            echo "<script>alert('Data Tidak DItemukan pada tabel.');window.location='index.php';</script>";
        }
    }else {
        echo "<script>alert('Masukan ID yang ingin di edit');window.location='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk </title>
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
            color : white;
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
    <center><h1>Edit Produk <?php echo $data['nama']; ?></h1></center>
        <center><a class="btn btn-danger" href="tambahproduk.php">x &nbsp; Cancel</a></center>
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label >Nama Produk</label>
            <input type="text" name="nama" autofocus="" required="" value="<?php echo $data['nama']; ?>"/>
            <input type="hidden" name="idproduct" value="<?php echo $data['idproduct']; ?>"/>
        </div>
        <div>
            <label >Harga Produk</label>
            <input type="text" name="harga" autofocus="" required="" value="<?php echo $data['harga']; ?>"/>
        </div>
        <div>
            <label >Gambar</label>
            <img src="img/<?php echo $data['image']; ?>" alt=""  style="width : 120px;float: left;margin-bottom: 5px; ">
            <input type="file" name="image"/>
            <i style="floay:11px; font-size:11px; color:red; ">Abaikan Jika Tidak Merubah Gambar Produk</i>
        </div>
        <div>
            <br>
            <button type="submit">Simpan Perubahan</button>
            
        </div>
        
    </section>
    </form>
    <!-- <button type="submit">CAN</button> -->
</body>
</html>