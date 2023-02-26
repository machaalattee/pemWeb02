<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas1</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<h3 class="text-center">Daftar Nilai Siswa</h3>
<table border="1" class="table" width="100%">
  <thead>
    <tr class="table-dark">
      <th class="text-center">NO</th><th class="text-center">NIM</th><th class="text-center">UTS</th>
      <th class="text-center">UAS</th><th class="text-center">Tugas</th><th class="text-center">Nilai Akhir</th>
    </tr>
  </thead>
<tbody>
  <?php
  $nomor = 1;
  foreach($ar_nilai as $ns){
    echo '<tr><td>' . $nomor . '</td>';
    echo '<td>' . $ns['nim'] . '</td>';
    echo '<td>' . $ns['uts'] . '</td>';
    echo '<td>' . $ns['uas'] . '</td>';
    echo '<td>' . $ns['tugas'] . '</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
    echo'<td>' . number_format($nilai_akhir,2,',','.').'</td>';
    echo'<tr/>';
    $nomor++;
  }
  ?>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</tbody>
</table>  

</body>
</html>








