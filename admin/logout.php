<?php
session_destroy();
echo "<script>alert('Anda telat logout');</script>";
echo "<script>location='login.php';</script>";
?>