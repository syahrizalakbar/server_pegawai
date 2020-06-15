<?php

  $connect = new mysqli("localhost", "root", "", "db_pegawai");

  if ($connect) {

  } else {
    echo "Koneksi gagal";
    exit();
  }


 ?>
