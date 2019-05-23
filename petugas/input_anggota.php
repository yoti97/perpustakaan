<?php
include"../koneksi.php";
if (isset($_POST['simpan'])) {
  $id_anggota=$_POST['id_anggota'];
  $Nama=$_POST['Nama'];
  $jk=$_POST['jk'];
  $alamat=$_POST['alamat'];
  $query=mysqli_query($koneksi,"INSERT INTO anggota VALUES('$id_anggota','$Nama','$jk','$alamat')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=anggota";</script>';
  }
}
?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah Anggota Baru</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="id_anggota" placeholder="id anggota" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="Nama" placeholder="nama anggota" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="jk"
          placeholder="P/L" required=""><br> 
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="alamat"
          placeholder="alamat" required=""><br>      
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>