<?php


  include 'koneksi.php';


  $sql = "SELECT * FROM tb_pegawai";
  $result = $connect->query($sql);

  if ($result->num_rows > 0) {
    $res['is_success'] = true;
    $res['message'] = "Berhasil get data pegawai";
    $res['data'] = array();
    while ($row = $result->fetch_assoc()) {
      $res['data'][] = $row;
    }
  } else {
    $res['is_success'] = false;
    $res['message'] = "Gagal get data pegawai";
    $res['data'] = null;
  }

  echo json_encode($res);

 ?>
