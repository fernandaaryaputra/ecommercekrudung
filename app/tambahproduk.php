<?php
include ('../auth/koneksi.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
      
      .table {
        width : 70%;

      }
      .utama h1{
        color : blue;
      }
      h1{
        text-transform : uppercase;s
        color : blue;

      }
    </style>
    <title>Data Produk</title>
  </head>
  <body>
        <header class="home" id="home">
      <div class="utama">
        <center><h1>Stok Product</h1></center>
        <center><a class="btn btn-light" href="button_tambah.php">+ &nbsp; tambah produk</a></center>
        <center><a class="btn btn-danger" href="index.php">x &nbsp; Cancel</a></center>
       <center>
        <table class="table table-dark" width="70%">
        <thead>
            <tr class="bg-primary">
            <th scope="col">NO</th>
            <th scope="col">Id Product</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $query = "SELECT * FROM product ORDER BY idproduct ASC";
              $result = mysqli_query($mysqli, $query);

              if(!$result){
                die("Query Error : ".mysqli_error($mysqli)." - ".mysqli_error($mysqli));
              }
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)){           
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['idproduct'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td>Rp. <?php echo number_format($row['harga'], 0,',','.');?></td>
                <td><img  width="200px" height="200px" src="img/<?php echo $row['image'];?>"></td>
                <td>
                  <a class="btn btn-warning" href="edit_produk.php?idproduct=<?php echo $row['idproduct']; ?>">Edit </a>
                  <a class="btn btn-danger" href="proses_hapus.php?idproduct=<?php echo $row['idproduct']; ?>" onclick="return confirm('Apkah anda ingin menghapus produk ini')">Delete </a>
                </td>

                <!-- <td><?php echo $no;?></td> -->
            </tr>
            <?php
              $no++;
              }
            ?>
        </tbody>
        </table>
            </center>
      </div>
    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>