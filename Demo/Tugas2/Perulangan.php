<?php


function cetakBilangan($n) {
  
    if ($n <= 0 || !is_numeric($n) || intval($n) != $n) {
        echo "Masukkan bilangan bulat positif.\n";
        return;
    }

    for ($i = 1; $i <= $n; $i++) {
     
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024\n";
        } elseif ($i % 5 == 0) {
            echo "2024\n";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman\n";
        } elseif ($i % 6 == 0) {
            echo "Website\n";
        } else {
            echo $i . "\n";
        }
    }
}

// Menerima input dari terminal
echo "Masukkan sebuah bilangan bulat positif: ";
$n = trim(fgets(STDIN)); // Menggunakan fgets() untuk mengambil input dari terminal

// Panggil fungsi dengan input dari pengguna
cetakBilangan($n);

?>
