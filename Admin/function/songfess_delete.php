<?php

include_once ('../connect/connect.php');

$id = $_GET['id'];

$query = mysqli_query($db, "DELETE FROM songfess WHERE id='$id'");

header('Location: ../pages/songfess.php');
echo "<script>alert('Data berhasil dihapus')</script>";