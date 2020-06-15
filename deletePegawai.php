<?php


  include 'koneksi.php';

  $id = $_POST['idPegawai'];

  $sql = "DELETE FROM tb_pegawai WHERE id=$id";
  $isSuccess = $connect->query($sql);

  if ($isSuccess) {
    $res['is_success'] = true;
    $res['message'] = "Berhasil hapus data pegawai";
  } else {
    $res['is_success'] = false;
    $res['message'] = "Gagal hapus data pegawai";
  }

  echo json_encode($res);

 ?>
