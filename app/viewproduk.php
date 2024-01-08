<?php
include ('../auth/koneksi.php');
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

        $query= "INSERT INTO  product (nama, harga, image) VALUES ('$nama', '$harga', '$nama_gambar_baru')";
        $result = mysqli_query($mysqli, $query);

        if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {
            echo "<script> alert('Data berhasil ditambahkan!');</script>";
        }
    }else {echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');</script>";
}
}else {
        $query= "INSERT INTO  product (nama, harga) VALUES ('$nama', '$harga')";
        $result = mysqli_query($mysqli, $query);

        if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {echo "<script> alert('Data berhasil ditambahkan!');</script>";
        }


}

?>
