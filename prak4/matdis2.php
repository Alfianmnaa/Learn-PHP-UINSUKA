<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3</title>
    <style>
        .container {
            display: flex;
            margin-left: 50px;
        }

        .container .dua {
            margin: 10px;
            margin-left: 150px;
        }
    </style>
    
</head>
<body>
<h2 style='text-align: center;'>Tugas Matematika Diskrit</h2>
    <hr style="font-weight: 800;">
    <?php 
        $txt4 = 'Alfian Maulana_22106050058';
        echo $txt4. ' <b> '.' // modul 3'.'</b>';
    ?>

<div class="container">
    <div class="satu">
    <?php echo '<h2>'.'Mengetahui Tipe Data'. '</h2>' ?>
    <?php echo '<h3>'.'1) Tipe Data Integer'. '</h3>' ?>
    <?php
        $umur = 21;
        $harga = 15000;
        $keuntungan = -500000;

        var_dump($umur); // int(21)
        echo '<br/>';
        var_dump($harga); // int(15000)
        echo '<br/>';
        var_dump($keuntungan); // int(-500000)
    ?>

    <?php echo '<h3>'.'2) Tipe Data Integer'. '</h3>' ?>
        <?php
            $IPK = 3.19;
            $nilai_tukar = 13235.50;
            $keuntungan = 5000000000;
            $var_float1 = 1.5623E2;
            $var_float2 = 1.3E-4;


            var_dump($umur); // float(3.19)
            echo '<br/>';
            var_dump($nilai_tukar); // float(13235.50)
            echo '<br/>';
            var_dump($keuntungan); // float(5000000000)
            echo '<br/><br/>';
            var_dump($var_float1); // float(1.5623E2)
            echo '<br/>';
            var_dump($var_float2); // float(1.3E-4)
        ?>

    <?php echo '<h3>'.'3) Tipe Data String'. '</h3>' ?>
        <?php  
            $huruf = 'A';
            $nama = 'Anto';
            $situs = 'www.duniailkom.com';
            $kalimat = 'Sedang serius belajar PHP';
            
            var_dump($huruf); // string(1) "A"
            echo '<br/>'; 
            var_dump($nama); // string(4) "Anto"
            echo '<br/>';
            var_dump($situs); // string(18) "www.duniailkom.com"
            echo '<br/>';
            var_dump($kalimat); // string(25) "Sedang serius belajar PHP"        
        ?>
    </div>
    <div class="dua">
    <?php echo '<h3>'.'4) Tipe Data boolean'. '</h3>' ?>
        <?php
            $benar = true;
            $salah = false;

            var_dump($benar); // bool(true)
            echo '<br/>'; 
            var_dump($salah); // bool(false)
        ?>
        <br>
        <?php
            $benar = TRUE;
            if($benar){
                echo "Anda Benar!"; // Anda Benar!
            }
        ?>
    
    <?php echo '<h3>'.'5) Tipe Data Array'. '</h3>' ?>
        <?php
            $siswa = array("Andri", "Joko", "Sukma", "Rina", "Sari");
            echo $siswa[1]; // Joko
        ?>
        </div>
</div>

</body>
</html>

