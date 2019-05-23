<?php
include"../koneksi.php";
@$id_buku=$_GET['id_buku'];
$q=mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku='$id_buku'");
$r=mysqli_fetch_array($q);
if (isset($_POST['edit'])) {
	$id_buku=$_POST['id_buku'];
	$judul_buku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
	$query=mysqli_query($koneksi,"UPDATE buku set judul_buku ='$judul_buku',pengarang='$pengarang' WHERE id_buku='$id_buku'");
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=buku";</script>';
	}
}

if (isset($_GET['hapus'])) {
	$id_buku=$_GET['hapus'];
	$query=mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku='$id_buku'");
	if ($query) {
		echo'<script>alert("Data Berhasil Dihapus"); parent.location="?page=buku";</script>';
	}
}
?>

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
		<div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
			<br>
			<h2><font face="verdana">ubah buku</font></h2>
			<hr>
			<div class="col-md-8">
				<form method="post" action="">
					<input type="hidden"  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="id_buku" value="<?php echo $id_buku;?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="judul_buku" value="<?php echo $r['judul_buku'];?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="pengarang" value="<?php echo $r['pengarang'];?>"><br>
					<br>
					<button class="btn btn-primary btn-lg" type="submit" name="edit">Simpan</button>
				</form>
			</div>
			<br><br>
		</div>
	</div>
</section>