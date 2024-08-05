<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-0">
      <div class="col-sm-12">
        <h1 align="center">Form Tambah Pasien Baru</h1>
      </div>
    </div>
  </div>
</section>
<!--Skrip Simpan Data Baru-->
<?php
  if(isset($_POST['tambah_pasien'])) {
    $kd_pasien=$_POST['kd_pasien'];
    $nm_pasien=$_POST['nm_pasien'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $agama=$_POST['agama'];
    $goldar=$_POST['goldar'];
    $jenkel=$_POST['jenkel'];
    $alamat=$_POST['alamat'];
    if(empty($kd_pasien)){
      echo '<div class="warning">Data pasien Tidak Boleh Kosong</div>';
    }else{
      $insert=mysqli_query($koneksi, "insert into pasien (
      kd_pasien,nm_pasien, tempat_lahir,tgl_lahir, agama, goldar, jenkel, alamat)
      values ('$kd_pasien', '$nm_pasien', '$tempat_lahir', '$tgl_lahir', '$agama', '$goldar', '$jenkel', '$alamat') ");
    if($insert){
      echo '<div class="alert alert-success alert-dismissible">Berhasil DiSimpan</div>';
      echo "<meta http-equiv='refresh' content='0 url=index.php?page=pasien'>";
    }else{
      echo '<div class="error">pasien Gagal Disimpan</div>';
    }
    }
  }
?>
<!--Batas Simpan data-->
<!--Main Content-->
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body p-2">
        <form method="post" action="">

          <br>kd_pasien
          <input type="text" name="kd_pasien" placeholder="kd_pasien" class="form-control">
          <br>Nama pasien
          <input type="text" name="nm_pasien" placeholder="Nama pasien" class="form-control">
          <br>tempat_lahir
          <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
          <br>Tanggal Lahir
          <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control">

          <br>Agama
          <select type="text" name="agama" placeholder="agama" class="form-control">
            <option value="Islam">Islam</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Kongucu">Kongucu</option>
          </select>

          <br>Golongan Darah
          <select type="text" name="goldar" placeholder="goldar" class="form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="0">0</option>
          </select>

          <br>Jenis Kelamin
          <select type="text" name="jenkel" placeholder="jenkel" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>

          <br>alamat
          <input type="text" name="alamat" placeholder="alamat" class="form-control">

          <input type="submit" name="tambah_pasien" value="SIMPAN" class="submit_btn btn-md btn-success"> </form>
      </div>
    </div>
  </div>
</section>
