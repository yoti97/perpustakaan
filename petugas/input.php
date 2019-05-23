<?php
include"../koneksi.php";
if (isset($_POST['simpan'])) {
  $id_buku=$_POST['id_buku'];
  $judul_buku=$_POST['judul_buku'];
  $pengarang=$_POST['pengarang'];
  $query=mysqli_query($koneksi,"INSERT INTO buku VALUES('$id_buku','$judul_buku','$pengarang')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=buku";</script>';
  }
}
?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah Buku</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="id_buku" placeholder="id buku" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="judul_buku" placeholder="judul buku" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #808080" name="pengarang"
          placeholder="pengarang" required=""><br>      
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>