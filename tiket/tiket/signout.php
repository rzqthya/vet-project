<?php
session_start();
session_destroy();
echo "<script>window.alert('Anda telah Keluar');window.close();</script>";
?>
