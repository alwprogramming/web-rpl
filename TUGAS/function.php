<?php
if (isset($_POST['cek'])) {
  $kebutuhan = $_POST['kebutuhan'];
  $kompleksitas = $_POST['kompleksitas'];
  $delivery = $_POST['delivery'];
  $tim = $_POST['tim'];
  $skill = $_POST['skill'];
  $klien = $_POST['klien'];
}



$hasil = [];
if ($kebutuhan == "Dapat Dijelaskan") {
  if ($klien == "Terlibat") {
    if ($delivery == "< 1 bulan" || $delivery == "1-3 bulan") {
      $hasil[] = $data5;
      $hasil[] = $data6;
      $hasil[] = $data8;
    } else {
      $hasil[] = $data4;
    }
  } else {
    if ($delivery == "< 1 bulan" || $delivery == "1-3 bulan") {
      $hasil[] = $data6;
    } else {
      $hasil[] = $data1;
    }
  }
} else {
  if ($klien == "Terlibat") {
    if ($delivery == "< 1 bulan" || $delivery == "1-3 bulan") {
      $hasil[] = $data2;
      $hasil[] = $data7;
    } else {
      $hasil[] = $data3;
    }
  }
}
