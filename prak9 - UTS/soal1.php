<?php
echo "Soal: ";
$doc = "Bagian pertama didalam cerpen adalah abstrak yang sifatnya opsional. Tidak semua bentuk karya sastra tersebut harus disertai abstrak. Abstrak merupakan bagian dari cerpen yang membuat inti dari sebuah cerita atau ringkasan pendeknya. Abstrak ini bisanya hanya terdiri dari beberapa kalimat saja untuk membuka cerpen atau sebagai pengantar saja. Bagian ini berguna untuk memudahkan pembaca untuk sedikit lebih memahami kisah yang dituliskan dalam cerpen sebab sudah disampaikan ringkasan singkatnya";
echo $doc;
echo "<br><br>";
// soal 1
echo strtolower($doc);

echo "<br><br>";
// soal 2
$kalimat = explode(".", $doc);

for($i=0; $i<count($kalimat); $i++){
    echo "Kalimat " . $i + 1 . ":";
    echo $kalimat[$i]."<br>";
}

echo "<br>";


// soal 3
for ($i = 0; $i < count($kalimat); $i++) {
    $kata_kata = explode(" ", $kalimat[$i]);
    echo "Kalimat " . ($i + 1) . ": ";
    foreach ($kata_kata as $index => $kata) {
        echo $kata;
        // Tambahkan koma jika bukan kata terakhir dalam kalimat
        if ($index < count($kata_kata) - 1) {
            echo ", ";
        }
    }
    echo "<br>";
}

echo "<br>";

//soal 4
for ($i = 0; $i < count($kalimat); $i++) {
    $kata_kata = explode(" ", trim($kalimat[$i]));
    $jumlah_kata_kalimat = count($kata_kata);
    echo "Jumlah kata dalam kalimat " . ($i + 1) . ": " . $jumlah_kata_kalimat;
    echo "<br>";
}


echo "<br>";
//soal no 5
// menghitung jumlah kata di doc
$kalimat = explode(".", $doc);
$kata_kata_total = explode(" ", $doc);
$jumlah_kata_total = count($kata_kata_total);
echo "Total jumlah kata dalam variabel doc: " . $jumlah_kata_total . "<br>";

// mencari prensentase tiap kalimat
for ($i = 0; $i < count($kalimat); $i++) {
    $kata_kata = explode(" ", trim($kalimat[$i]));
    $jumlah_kata_kalimat = count($kata_kata);
    $presentase = ($jumlah_kata_kalimat / $jumlah_kata_total) * 100;
    echo "Jumlah kata dalam kalimat " . ($i + 1) . ": " . $jumlah_kata_kalimat . " kata (Presentase: " . round($presentase, 2) . "%)<br>";
}


echo "<br><br><br><br><br>";
