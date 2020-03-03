<?php
    $arrNilai = array ("Chris" => 80, "Ica" => 90, "Devon" => 75, "James" => 85);

    echo "Menampilkan isi array dengan foreach : <br>";
    foreach ($arrNilai as$nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }
    reset ($arrNilai);
    echo "<br> Menampilkan isi array dengan while dan list : <br>";
    while (list ($nama, $nilai) = each($arrNilai)) {
        echo "Nilai $nama = $nilai<br>";
    }
?>