<?php
include ('../auth/koneksi.php');
$id = $_GET['idproduct'];
$query = "DELETE FROM product where idproduct = '$id'";
$result = mysqli_query($mysqli, $query);

 if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {
            echo "<script> alert('Data berhasil dihapus!');window.location='index.php';</script>";
        }
?>