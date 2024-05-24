<?php
$koneksi = mysqli_connect('localhost','root','','dbcontactapp');

if (isset($_POST['simpandata'])) {
    $nama = $_POST['owner'];
    $nomorid = $_POST['id'];
    $phonenumber = $_POST['phone_number'];

    $query = mysqli_query($koneksi, "insert into users (id, owner, phone_number) values ('$nomorid','$nama','$phonenumber')");

    if($query){
        header('location:Dashboard.php');
    } else{
        echo 'gagal';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 50px;">
  <h2>Tambah Data</h2>
  <form method="post">
    <div class="form-group">
      <label for="owner">Nama Owner</label>
      <input type="text" class="form-control" id="owner" placeholder="Masukkan Nama" name="owner">
    </div>    
    <div class="form-group">
      <label for="id">Nomor Id</label>
      <input type="number" class="form-control" id="id" placeholder="Masukkan Nomor Id" name="id">
    </div>
    <div class="form-group">
      <label for="phone_number">Nomor Handphone</label>
      <input type="number" class="form-control" id="phone_number" placeholder="Masukkan Nomor Handphone" name="phone_number">
    </div>

    <button type="submit" name="simpandata" class="btn btn-primary">Tambah</button>
  </form>
</div>

</body>
</html>
