<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 4</title>
    <style>
        .container {
            display: flex;
            margin-left: 50px;
        }

        .container .dua {
            margin: 8px;
            margin-left: 200px;
        }
    </style>
    
</head>
<body>
    
<h2 style='text-align: center;'>Tugas Matematika Diskrit</h2>
    <hr style="font-weight: 800;">
    <?php 
        $txt4 = 'Alfian Maulana_22106050058';
        echo $txt4. ' <b> '.' // modul 4'.'</b>';
    ?>

<div class="container">
    <div class="satu">
<?php echo '<h3>'.'1) Operator Aritmatika'. '</h3>' ?>
    <?php
        $hasil1 = +11;
        $hasil2 = -3;
        $hasil3 = 3 + 5;
        $hasil4 = 8 - 4.5;
        $hasil5 = 2 * 5;
        $hasil6 = 3  + 8 / 5 - 3;
        $hasil7 = 10 % 4;
        $hasil8 = 2 ** 4;

        var_dump($hasil1); echo "<br>"; // int(11)
        var_dump($hasil2); echo "<br>"; // int(-3)
        var_dump($hasil3); echo "<br>"; // int(8)
        var_dump($hasil4); echo "<br>"; // float(3.5)
        var_dump($hasil5); echo "<br>"; // int(10)
        var_dump($hasil6); echo "<br>"; // float(1.6)
        var_dump($hasil7); echo "<br>"; // int(2)
        var_dump($hasil8);  // int(16)
    ?>
    <br><br>

    <?php
        $hasil1 = 3+8/5-3*9+9;
        var_dump($hasil1); //float(-13.4)

        echo "<br>";

        $hasil2 = (3+8)/(5-3)*(9+9);
        var_dump($hasil2); //float(99)
    ?>
    <br><br>
    <?php
        $hasil = "180" + 20;
        var_dump($hasil); echo "<br>";
        $hasil = "9.12" + 3.2;
        var_dump($hasil); echo "<br>";
        $hasil = true + true + false;
        var_dump($hasil);
    ?>

<?php echo '<h3>'.'2) Operator Increment dan Decrement'. '</h3>' ?>
    <?php
        $a = 5;
        echo ++$a; //6
        echo $a; //6
        echo "<br>";

        $b = 5;
        echo $b++; //5
        echo $b; //6
        echo "<br>";

        $a = 5;
        echo --$a; //4
        echo $a; //4
        echo "<br>";

        $b = 5;
        echo $b--; //5
        echo $b; //4
    ?>
    </div>

    <div class="dua">
<?php echo '<h3>'.'3) Operator Perbandingan'. '</h3>' ?>
    <?php
        var_dump(12 < 14); echo "<br>"; //bool(true)
        var_dump(12 < 14); echo "<br>"; //bool(true)
        var_dump(12 < 14); echo "<br>"; //bool(true)
    ?>
    <br>
    <?php
        var_dump('andi' < 'andri'); //bool(true)
        echo "<br>";
        var_dump('anto' < 'anti'); //bool(false)
    ?>
    <br><br>
    <?php
        $siswa1 = array("anto", "andra");
        $siswa2 = array("anto", "andr1");
        var_dump($siswa1 < $siswa2); //bool(false)
    ?>

<?php echo '<h3>'.'4) Operator Logika'. '</h3>' ?>
    <?php
        $hasil = (true and false);
        var_dump($hasil); echo "<br/>";  // bool(false)

        $hasil = (true or false);
        var_dump($hasil); echo "<br/>";  // bool(true)

        $hasil = (true xor false);
        var_dump($hasil); echo "<br/>";  // bool(true)

        $hasil = false;
        var_dump($hasil); echo "<br/>";  // bool(false)

        $hasil = (false or true && false);
        var_dump($hasil); echo "<br/>";  // bool(false)
        
        $hasil = ('duniailkom' and true);
        var_dump($hasil); echo "<br/>";  // bool(true)

        $hasil = ('000' or false);
        var_dump($hasil); echo "<br/>";  // bool(true)
    ?>
    </div>
</div>

</body>
</html>

