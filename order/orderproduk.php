<?php
session_start();
include "../auth/koneksi.php";
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Order Pemesanan</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
  </head>

  <body>
<?php
		if(isset($_POST['namaproduct'])){
			$namaproduct = $_POST['namaproduct'];
      $kodeproduk = $_GET['idproduct'];

			$harga = (int)$_POST['harga'];
      $quantity =(int)$_POST['quantity'];
      // var_dump($harga, $quantity); // Tambahkan ini untuk memeriksa nilai

      // $totalproduk= $harga * $quantity;
      // $total =$_POST[$totalproduk];
      $total =$quantity * $harga;
      $nama =$_POST['nama'];
      $nomor_hp = $_POST['nomorhp'];
      $opsi_pengiriman= $_POST['opsi-pengiriman'];
      $opsi_pembayaran= $_POST['opsi-pembayaran'];
      $alamat=$_POST['alamat'];
      $tanggal=$_POST['tanggal'];

			$query =mysqli_query($mysqli, "INSERT INTO tbtransaksi(idproduct,namaproduct,harga,quantity,nama,nomorhp,pengiriman,pembayaran,alamat,tanggalterima,total) values('$kodeproduk','$namaproduct','$harga','$quantity','$nama','$nomor_hp','$opsi_pengiriman','$opsi_pembayaran','$alamat','$tanggal','$total')");
			// $query =mysqli_query($mysqli, "INSERT INTO tbtransaksi(`idtransaksi`, `idproduct`, `harga`, `quantity`, `nama`, `nomorhp`, `pengiriman`, `pembayaran`, `alamat`, `tanggalterima`, `total`, `tanggalorder`) VALUES ('$kodeproduk','$harga','$quantity','$nama','$nomor_hp','$nomor_hp','$opsi_pengiriman','$opsi_pembayaran','$alamat','$tanggal','$total')");
	  	if($query) {
			echo '<script>alert("Order Pemesanan Berhasil ");
			location.href="../app/index.php"</script>';
	  	}else {
			echo '<script>alert("Register Gagal")</script>';
	  	}
		}
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve user input
//     $kodeproduk = $_POST['kodeproduk'];
//     $harga = $_POST['harga'];
//     $quantity = $_POST['quantity'];
//     $totalproduk = $harga * $quantity;
//     $nama = $_POST['nama'];
//     $nomor_hp = $_POST['nomorhp'];
//     $opsi_pengiriman = $_POST['opsi-pengiriman'];
//     $opsi_pembayaran = $_POST['opsi-pembayaran'];
//     $alamat = $_POST['alamat'];
//     $tanggal = $_POST['tanggal'];

//     // Create a database connection (replace these credentials with your actual database credentials)
//     $mysqli = new mysqli("hostname", "username", "password", "database_name");

//     // Check the connection
//     if ($mysqli->connect_error) {
//         die("Connection failed: " . $mysqli->connect_error);
//     }

//     // Use prepared statements to insert data into the database
//     $stmt = $mysqli->prepare("INSERT INTO tbtransaksi (idproduct, harga, quantity, nama, nomorhp, pengiriman, pembayaran, alamat, tanggalterima, total, tanggalorder) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("iiissssssss", $kodeproduk, $harga, $quantity, $nama, $nomor_hp, $opsi_pengiriman, $opsi_pembayaran, $alamat, $tanggal, $totalproduk, $tanggal);

//     // Execute the statement
//     $stmt->execute();

//     // Close the statement and connection
//     $stmt->close();
//     $mysqli->close();

//     echo '<script>alert("Order Pemesanan Berhasil"); location.href="../app/index.php"</script>';
// }
?>


    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="booking-form">
              <div class="form-header">
                <h1>Order</h1>
              </div>
              <form method="post">
                <div class="form-group">
                  <span class="form-label">Product</span>
                  <input
                    class="form-control"
                    type="text"
                    name="namaproduct"
                    placeholder="Masukan Nama Produk" 
                    value="<?php echo $data['nama'] ?>"/>
                  <input
                    class="form-control"
                    type="hidden"
                    value="<?php echo $data['nama'] ?>"/>
                </div>
                 <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Harga</span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Masukan Harga"
                        name="harga" 
                        value="<?php echo $data['harga']?>"/>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Quantity</span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Masukan jumlah barang dibeli"
                        name="quantity" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Nama</span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Masukan Nama Anda"
                        name="nama" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Nomor HP</span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Masukan Nomer HP"
                        name="nomorhp" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <span class="form-label">Opsi Pengiriman</span>
                  <select class="form-control" name="opsi-pengiriman" required>
                    <option value="">Pilih Pengiriman</option>
                    <option value="reguler">Reguler</option>
                    <option value="hemat">Hemat</option>
                    <option value="Kargo">Kargo</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
                <div class="form-group">
                  <span class="form-label">Opsi Pembayaran</span>
                  <select class="form-control" name="opsi-pembayaran" required>
                    <option value="">Pilih Pembayaran</option>
                    <option value="dana">Dana</option>
                    <option value="bri">ATM BRI</option>
                    <option value="bca">ATM BCA</option>
                    <option value="mandiri">ATM MANDIRI</option>
                    <option value="bni">ATM BNI</option>
                    <option value="cod">Cash Of Delivery</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
                <div class="form-group">
                  <span class="form-label">Alamat</span>
                  <input
                    class="form-control"
                    type="text"
                    name="alamat"
                    placeholder="Masukan Alamat" />
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <span class="form-label">Diterima Tanggal</span>
                      <input
                        class="form-control"
                        type="date"
                        name="tanggal"
                        required />
                    </div>
                  </div>

                </div>
                <div class="form-btn">
                  <button class="submit-btn">Order Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
