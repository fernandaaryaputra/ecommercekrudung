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
        width : 100%;

      }
      .utama h1{
        color : yellow;
      }
      h1{
        text-transform : uppercase;s
        color : yellow;

      }
    </style>
    <title>DATA PEMESANAN | FRSTORE</title>
  </head>
  <body>
        <header class="home" id="home">
      <div class="utama">
        <center><h1>DATA PEMESANAN</h1></center>
        <center><a class="btn btn-danger" href="index.php">x &nbsp; Cancel</a></center>
       <center>
        <table class="table table-dark table-striped " >
        <thead>
            <tr class="bg-warning">
            <th scope="col">NO</th>
            <th scope="col">Id Transaksi</th>
            <th scope="col">Id Product</th>
            <th scope="col">Harga</th>
            <th scope="col">Quantity</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Opsi Pengiriman</th>
            <th scope="col">Opsi Pembayaran</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Terima</th>
            <th scope="col">Total</th>
            <th scope="col">Tanggal Order</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $query = "SELECT * FROM tbtransaksi ORDER BY idtransaksi ASC";
              $result = mysqli_query($mysqli, $query);

              if(!$result){
                die("Query Error : ".mysqli_error($mysqli)." - ".mysqli_error($mysqli));
              }
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)){           
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['idtransaksi'];?></td>
                <td><?php echo $row['idproduct'];?></td>
                <td>Rp. <?php echo number_format($row['harga'], 0,',','.');?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['nomorhp'];?></td>
                <td><?php echo $row['pengiriman'];?></td>
                <td><?php echo $row['pembayaran'];?></td>
                <td><?php echo $row['alamat'];?></td>
                <td><?php echo $row['tanggalterima'];?></td>
                <td><?php echo $row['total'];?></td>    
                <td><?php echo $row['tanggalorder'];?></td>    
                <td>
                  <a class="btn btn-warning" href="edit_produk.php?id=<?php echo $row['idproduct']; ?>">Edit </a>
                  <a class="btn btn-danger" href="../order/proses_hapus.php?idtransaksi=<?php echo $row['idtransaksi']; ?>" onclick="return confirm('Apkah anda ingin menghapus produk ini')">Delete </a>
                </td>
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