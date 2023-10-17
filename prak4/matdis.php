<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>

</head>
<body>
   
<h2 style='text-align: center;'>Tugas Matematika Diskrit</h2>
    <hr style="font-weight: 800;">
    <?php 
        $txt4 = 'Alfian Maulana_22106050058';
        echo $txt4. ' <b> '.' // modul 2'.'</b>';
    ?>

<div class="container">
    <div>
<?php echo '<h3>'.'1) Tipe Data Integer'. '</h3>' ?>
    <?php
        echo 'Hello World'.'<br>';
        echo 'Hello World';
    ?>
    <br><br>

<?php echo '<h3>'.'2) Menyisipkan PHP dalam HTML'. '</h3>' ?>
    <?php
        echo 'My First PHP Script';
    ?>
    <br><br>
   
<?php echo '<h3>'.'3) Komentar dalam PHP'. '</h3>' ?>
    <?php
        echo '<h4>'. 'Gunakan'.'</h4>';
        echo '// This is a single-line comment'.'<br>';
        echo '# This is also a single-line comment' ;
        echo '<h4>'.'untuk comment satu baris'.'</h4>';
    ?>
    <?php 
        echo '<h4>'. 'Gunakan'.'</h4>';
        echo '/* This is a multiple-lines comment block
            that spans over multiple
            lines 
            */' ;
        echo '<h4>'.'untuk comment lebih dari satu baris'.'</h4>';
    ?>
    </div>
    <div class="dua">

    <?php echo '<h3>'.'4)  Mendeklarasikan Variable'. '</h3>' ?>
    <?php
        echo 'Gunakan $ untuk mendeklarasikan variabel';
    ?>
    <?php
        $txt = 'Hello World!';
        $x = 5;
        $y = 10.5;
    ?>
    <br><br>

    <?php echo '<h3>'.'5) Menampilkan Variable'. '</h3>' ?>
    <?php 
    $txt = 'Learn PHP';
    $txt2 = 'UIN SUKA';
    $x = 5;
    $y = 4;
     echo '<h2>'.$txt.'</h2>';
     echo 'study PHP at '. $txt2.'<br>';
     echo $x + $y;
     ?>
    </div>
    <div>
        <?php
        for($i = 0; $i < 10; $i++){
            echo "$i <br>";
        }
        ?>
         
    </div>
</div>

</body>
</html>

