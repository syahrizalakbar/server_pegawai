<?php


  include 'koneksi.php';

  $id = $_POST['idPegawai'];
  $nama = $_POST['namaPegawai'];
  $posisi = $_POST['posisiPegawai'];
  $gaji = $_POST['gajiPegawai'];

  $sql = "UPDATE tb_pegawai SET nama='$nama', posisi='$posisi', gaji=$gaji WHERE id=$id";
  $isSuccess = $connect->query($sql);

  if ($isSuccess) {
    $res['is_success'] = true;
    $res['message'] = "Berhasil edit data pegawai";
  } else {
    $res['is_success'] = false;
    $res['message'] = "Gagal edit data pegawai";
  }

  echo json_encode($res);

 ?>
