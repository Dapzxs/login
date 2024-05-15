<?php
$conn = mysqli_connect("localhost", "root", "", "jokijago");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  } else {
    echo "Koneksi berhasil";
  }
  ?>