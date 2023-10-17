<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
    }

    td {
      text-align: center;
    }
    table {
        width: 300px;
        margin: 20px;
    }
    h2 {
        margin: 20px;
    }
  </style>
  <body>
    <?php 
    $jml = "3" + "4";
    echo $jml;
    ?>
    <!-- <div class="container-table">
      <h2>Nama Peserta</h2>
      <p id="clock"><p>
      <table border="1" cellspacing="0" cellpadding="4">
        <tr>
          <th>No.</th>
          <th>Nama Peserta</th>
        </tr>
        <?php 
     
        for($i = 1; $i<=10; $i++){
            echo " <tr>
            <td>$i</td>
            <td>Nama Peserta</td>
          </tr>";
        }

        ?>
    </div> -->
  </body>
  <script>
    let jml = "3" + "4";
    console.log(jml)

    </script>
</html>
