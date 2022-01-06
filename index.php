
<!DOCTYPE html>
<html>
<head>
  <title>CRUD NANSY MANUAHE</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1 class="text-center">WEB CRUD</h1>
<h2 class="text-center">NANSY MANUAHE</h2>

<!-- Awal Card Form -->
<div class="card mt-3">
  <div class="card-header bg-primary text-white">
    Form Input Data Mahasiswa
  </div>
  <div class="card-body">
   <form method="post" action="">
    <div class="form-group">
        <label>Nim</label>
        <input type="text" name="tnim" value="<?=@$vnim?>" class="form-control" placeholder="Input Nim Anda Di Sini!" required>
      </div>


  <div class="form-group">
        <label>Nama</label>
        <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama Anda Di Sini!" required>
      </div>


  <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="talamat" placeholder=" Input Alamat Anda Di Sini!"><?=@$valamat?></textarea>
      </div>

    <div class="form-group">
        <label>Program Studi</label>
        <select class="form-control" name="tprodi"> 
          <option value="<?=@$vprodi?>"><?=@$vprodi?></option>
          <option value="D3-Sistem Informasi">Sistem Informasi</option>
          <option value="D3-Perikanan">Perikanan dan Kebaharian</option>
          <option value="D3-Keperawatan">Keperawatan</option>
        </select>

  <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="tjeniskelamin">
          <option value="<?=@$vjeniskelamin?>"><?=@$vjeniskelamin?></option>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>

  <div class="form-group">
        <label>Umur</label>
        <input type="text" name="tumur" value="<?=@$vumur?>" class="form-control" placeholder="Input Umur Anda Di Sini!" required>
      </div>

  <div class="form-group">
        <label>Nama Ayah</label>
        <input type="text" name="tnama_ayah" value="<?=@$vnama_ayah?>" class="form-control" placeholder="Input Nama Ayah Anda Di Sini!" required>
      </div>


      </div>

      <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
      <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
   </form>
  </div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card mt-3">
  <div class="card-header bg-success text-white ">
    Daftar Mahasiswa
  </div>
  <div class="card-body">

    <table class="table table-bordered table-striped">
      <tr>
        <th>No.</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Program Studi</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Nama Ayah</th>
        <th>Aksi</th>
      </tr>
      <?php
          $no = 1
          $tampil = mysqli_query($koneksi, "select * from crudnansy order by no asc");
          while ($tampil = mysqli_fetch_array($data));

      ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$data['nim']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['alamat']?></td>
        <td><?=$data['prodi']?></td>
        <td><?=$data['jk']?></td>
        <td><?=$data['umur']?></td>
        <td><?=$data['nama_ayah']?></td>
        <td>
          <a href="index.php?hal=edit&id=<?=$data['no']?>" class="btn btn-success"> Edit </a>
          <a href="index.php?hal=hapus&id=<?=$data['no']?>" 
            onclick ="return confirm('Apakah Yakin Data ini akan dihapus?')" class="btn btn-danger"> Hapus </a>
      

      </tr>
    <?php 
    ?>
    </table>
  </div>
</div>
<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>