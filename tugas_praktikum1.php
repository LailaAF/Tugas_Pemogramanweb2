<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
      $ar_nilai = [
        ["id" => 1, "Nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78],

        ["id" => 1, "Nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68],

        ["id" => 1, "Nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70],

        ["id" => 1, "Nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82],
      ];

    ?>
    <h1 style="text-align: center; margin-top: 50px;">Data Siswa</h1>
      <table class="table table-success table-striped" style="width:600px; height: 100px; margin-left: 400px;">
        <tr>
          <td>No</td>
          <td>Nim</td>
          <td>Uts</td>
          <td>Uas</td>
          <td>Tugas</td>
          <td>Nilai Akhir</td>
        </tr>
        <?php
          $nomor = 1;
            foreach ($ar_nilai as $ns) {
            $nilai_akhir = ($ns["uts"] + $ns["uas"] + $ns["tugas"])/3;
            echo "<tr><td>".$nomor."</td>";
            echo "<td>".$ns["Nim"]."</td>";
            echo "<td>".$ns["uts"]."</td>";
            echo "<td>".$ns["uas"]."</td>";
            echo "<td>".$ns["tugas"]."</td>";
            echo "<td>".number_format($nilai_akhir,2,",",".")."</td></tr>";
            $nomor++;
            
          }
        ?>

      </table>

  </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>