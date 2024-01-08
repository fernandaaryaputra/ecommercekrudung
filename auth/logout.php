<?php
session_start();
session_destroy();

?>

<script type="text/Javascript">
    alert ("Anda Berhasil Log Out.");
    location.href="../index.php";
</script>