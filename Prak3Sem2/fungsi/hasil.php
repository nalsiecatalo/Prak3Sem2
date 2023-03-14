<?php 
    //jika belum mengisi form, maka tidak akan mendapatkan nilai hasil
    if( !isset($_POST['submit'])){
        header("location: index.php");
        exit;
    }




    //menyimpan hasil input user ke dalam variabel
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    //menentukan nilai akhir
    $nilai_akhir = ($uts + $uas + $tugas) / 3;


    //mengambil sekaligus menjalankan script di library fungsi utk mencetak kelulusan dan grade
    require_once 'libfungsi.php';
    $_nilai = $nilai_akhir;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

</body>
</html><table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">NO</th> 
      <th scope="col">Nama</th> 
      <th scope="col">Mata Kuliah</th> 
      <th scope="col">UTS</th> 
      <th scope="col">UAS</th> 
      <th scope="col">TUGAS</th> 
      <th scope="col">NILAI AKHIR</th> 
      <th scope="col">GRADE</th> 
      <th scope="col">KETERANGAN LULUS</th> 
       
    </tr> 
  </thead> 
  <tbody> 
     
    <tr> 
      <th scope="row">1</th> 
      <td><?=  $nama ?>  </td> 
      <td><?= $matkul  ?></td> 
      <td><?= $uts     ?></td> 
      <td><?= $uas      ?></td> 
      <td><?= $tugas      ?></td> 
      <td><?= $nilai_akhir      ?></td> 
      <td><?= grade($_nilai)   ?></td> 
      <td><?= kelulusan($_nilai)   ?></td> 
 
    </tr> 
  </tbody> 
</table>