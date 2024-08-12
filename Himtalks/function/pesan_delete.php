<?php

include_once ('../connect/connect.php');

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM pesan WHERE id='$id'");

echo "<script>alert('Data berhasil dihapus')</script>";