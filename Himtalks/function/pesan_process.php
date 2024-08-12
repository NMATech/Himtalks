<?php

include_once ('../connect/connect.php');

$from = $_POST['from'];
$to = $_POST['to'];
$pesan_kategori = $_POST['kategori'];
$pesan = $_POST['pesan'];

$query = mysqli_query($db, "INSERT INTO pesan (dari, untuk, kategori, pesan) VALUES ('$from', '$to', '$pesan_kategori', '$pesan')");

header('Location: ../pages/pesan_sukses.php');