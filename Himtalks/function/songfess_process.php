<?php

include_once ('../connect/connect.php');

$pengirim = $_POST['pengirim'];
$ig_penerima = $_POST['ig_penerima'];
$judul_lagu = $_POST['judul_lagu'];
$menit = $_POST['menit'];

$query = mysqli_query($db, "INSERT INTO songfess (pengirim, judul_lagu, ig_penerima, menit) VALUES ('$pengirim', '$ig_penerima', '$judul_lagu', '$menit')");

header('Location: ../pages/songfess_sukses.php');