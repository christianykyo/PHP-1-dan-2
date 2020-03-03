<?php
    $angka1='10';
    $angka2='2';

    $kali = $angka1 * $angka2;
    $bagi = $angka1 / $angka2;
    $tambah = $angka1 + $angka2;
    $kurang = $angka1 - $angka2;
    $mod = $angka1 % $angka2;

    echo "<h3> OPERASI MENGGUNAKAN OPERATOR MATEMATIKA </h3>";
    echo "Perkalian ".$angka1." * ".$angka2." = ".$kali." <br>";
    echo "Pembagian ".$angka1." / ".$angka2." = ".$bagi." <br>";
    echo "Penjumlahan ".$angka1." + ".$angka2." = ".$tambah." <br>";
    echo "Pengurangan ".$angka1." - ".$angka2." = ".$kurang." <br>";
    echo "Modulus ".$angka1." % ".$angka2." = ".$mod." <br>";
?>