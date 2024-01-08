<?php
include ('../auth/koneksi.php');
$id = $_POST['idproduct'];
$nama =$_POST['nama'];
$harga =$_POST['harga'];
$image =$_FILES['image']['name'];

if($image != ""){
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.', $image);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['image']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak.'-'.$image;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru);

        // $query= "UPDATE product SET nama = '$nama',harga ='$harga',image='$nama_gambar_baru'";
        // $query .="WHERE idproduct = '$id'";
        $query="UPDATE  product  SET  nama = '$nama', harga ='$harga', image ='$nama_gambar_baru' WHERE idproduct = '$id'";
        $result = mysqli_query($mysqli, $query);

        if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {
            echo "<script> alert('Data berhasil diubah!');window.location='index.php';</script>";
        }
    }else {echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='edit_produk.php';</script>";
}
}else {
        // $query= "UPDATE product SET nama = '$nama',harga ='$harga'";
        // $query="WHERE idproduct .= '$id'";
       $query="UPDATE  product  SET  nama = '$nama', harga ='$harga' WHERE idproduct = '$id'";

        $result = mysqli_query($mysqli, $query);

        if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {
            echo "<script> alert('Data berhasil diubah!');window.location='index.php';</script>";
        }
}

?>
