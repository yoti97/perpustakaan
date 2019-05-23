<?php
include"../koneksi.php";
@$id_anggota=$_GET['id_anggota'];
$q=mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE id_anggota='$id_anggota'");
$r=mysqli_fetch_array($q);
if (isset($_POST['edit'])) {
	$id_anggota=$_POST['id_anggota'];
  	$Nama=$_POST['Nama'];
  	$id_buku=$_POST['id_buku'];
  	$judul_buku=$_POST['judul_buku'];
  	$tanggal_pinjam=$_POST['tanggal_pinjam'];
  	$tanggal_kembali=$_POST['tanggal_kembali'];
	$query=mysqli_query($koneksi,"UPDATE peminjaman set Nama ='$Nama',id_buku='$id_buku',judul_buku='$judul_buku',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' WHERE id_anggota='$id_anggota'");
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=peminjaman";</script>';
	}
}

if (isset($_GET['hapus'])) {
	$id_buku=$_GET['hapus'];
	$query=mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id_anggota='$id_anggota'");
	if ($query) {
		echo'<script>alert("Data Berhasil Dihapus"); parent.location="?page=anggota";</script>';
	}
}
?>

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
		<div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
			<br>
			<h2><font face="verdana">Ubah Data Anggota</font></h2>
			<hr>
			<div class="col-md-8">
				<form method="post" action="">
					<input type="hidden"  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="id_anggota" value="<?php echo $id_anggota;?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="Nama" value="<?php echo $r['Nama'];?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="id_buku" value="<?php echo $r['id_buku'];?>"><br>
					<br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="judul_buku" value="<?php echo $r['judul_buku'];?>"><br>
					<br>
					<button class="btn btn-primary btn-lg" type="submit" name="edit">Simpan</button>
				</form>
			</div>
			<br><br>
		</div>
	</div>
</section>