<?php
include ('../auth/koneksi.php');
$id = $_GET['idtransaksi'];
$query = "DELETE FROM tbtransaksi where idtransaksi = '$id'";
$result = mysqli_query($mysqli, $query);

 if(!$result){
            die ("Query Error : ".mysqli_error($mysqli)."-".mysqli_error($mysqli));
        }else {
            echo "<script> alert('Data berhasil didelete!');window.location='../app/index.php';</script>";
        }
?>