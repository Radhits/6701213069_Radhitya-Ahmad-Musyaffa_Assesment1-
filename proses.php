<?php

// memeriksa apakah form telah dikirim dengan menggunakan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // memeriksa apakah nilai angka1 dan angka2 yang diterima adalah numerik
    if (is_numeric($_POST["angka1"]) && is_numeric($_POST["angka2"])) {
  
      // mengambil nilai angka1 dan angka2 dari input form
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
  
      // mengambil nilai operasi aritmatika dari dropdown box
      $operasi = $_POST["operasi"];
  
      // melakukan operasi penambahan jika "+,-,*,/" dipilih di dropdown box
      if ($operasi == "+") {
        $hasil = $angka1 + $angka2;
      } elseif ($hasil == "-") {
        $hasil = $angka1 - $angka2;
      } elseif ($hasil == "*") {
        $hasil = $angka1 * $angka2;
      } elseif ($hasil == "/") {
        $hasil = $angka1 / $angka2;
      }
      else {
        // jika operator selain "+,-,*,/" dipilih, tampilkan pesan error
        $pesan_error = "Operator yang dipilih tidak valid.";
      }
  
    } else {
      // jika angka1 atau angka2 tidak numerik, tampilkan pesan error
      $pesan_error = "Angka yang dimasukkan harus numerik.";
    }
  }
  
  ?>