<?php


  include 'koneksi.php';

  $nama = $_POST['namaPegawai'];
  $posisi = $_POST['posisiPegawai'];
  $gaji = $_POST['gajiPegawai'];

  $sql = "INSERT INTO tb_pegawai (nama, posisi, gaji) VALUES ('$nama', '$posisi', $gaji)";
  $isSuccess = $connect->query($sql);

  if ($isSuccess) {
    $res['is_success'] = true;
    $res['message'] = "Berhasil menambah data pegawai";
  } else {
    $res['is_success'] = false;
    $res['message'] = "Gagal menambah data pegawai";
  }

  echo json_encode($res);

 ?>
