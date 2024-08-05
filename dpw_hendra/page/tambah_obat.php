<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-0">
      <div class="col-sm-12">
        <h1 align="center">Form Tambah obat Baru</h1>
      </div>
    </div>
  </div>
</section>
<!--Skrip Simpan Data Baru-->
<?php
  if(isset($_POST['tambah_obat'])) {
    $kd_obat=$_POST['kd_obat'];
    $nm_obat=$_POST['nm_obat'];
    $satuan=$_POST['satuan'];
    $jenis_obat=$_POST['jenis_obat'];
    $stok=$_POST['stok'];
    if(empty($kd_obat)){
      echo '<div class="warning">Data Obat Tidak Boleh Kosong</div>';
    }else{
      $query = "INSERT INTO obat (
      kd_obat, nm_obat, satuan, jenis_obat, stok)
      VALUES ('$kd_obat', '$nm_obat', '$satuan', '$jenis_obat', '$stok') ";
      $insert=mysqli_query($koneksi, $query);
    if($insert){
      echo '<div class="alert alert-success alert-dismissible">Berhasil DiSimpan</div>';
      echo "<meta http-equiv='refresh' content='0 url=index.php?page=obat'>";
    }else{
      echo '<div class="error">obat Gagal Disimpan</div>';
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

          <br>Kode Obat
          <input type="text" name="kd_obat" placeholder="kd_obat" class="form-control">
          <br>Nama Obat
          <input type="text" name="nm_obat" placeholder="Nama obat" class="form-control">
          <br>Satuan
          <select type="text" name="satuan" placeholder="Satuan" class="form-control">
            <?php
              show_option($satuan);
            ?>
          </select>

          <br>Jenis Obat
          <select type="text" name="jenis_obat" placeholder="Jenis Obat" class="form-control">
            <?php
              show_option($jenisObat);
            ?>
          </select>

          <br>Stok
          <input type="number" name="stok" placeholder="Stok" class="form-control">
          <br>
          <input type="submit" name="tambah_obat" value="SIMPAN" class="submit_btn btn-md btn-success"> </form>
      </div>
    </div>
  </div>
</section>
