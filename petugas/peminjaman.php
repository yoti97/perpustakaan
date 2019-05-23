<!DOCTYPE html>
<html>
<head>
  <title>anggota</title>  
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
 
</head>
<body>
   <div class="navbar nav-left" >
   <a href="?page=input_pinjaman" class="btn btn-warning" type="submit" name="edit">Tambah</a></div>
  <center>
    <h4>Data Peminjaman Buku</h4>
  </center>

  <div class="container">
     <div class="table-responsive">
    <table class="table table-striped table-bordered data">
     <thead>
    <tr>
      <th>No</th>
      <th>ID Anggota</th>
      <th>Nama Anggota</th>
      <th>ID Buku </th>
      <th>Judul Buku </th>
      <th>Tanggal Peminjaman </th>
      <th>Tanggal pengembalian </th>
      <th width="10">Operasi</th>

    </tr>
     </thead>
  <tbody>
    <?php 
    include '../koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from peminjaman");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['id_anggota']; ?></td>
        <td><?php echo $d['Nama']; ?></td>
        <td><?php echo $d['id_buku']; ?></td>
        <td><?php echo $d['judul_buku']; ?></td>
        <td><?php echo $d['tanggal_pinjam']; ?></td>
        <td><?php echo $d['tanggal_kembali']; ?></td>
          <td width="10">
            <a href="?page=edit_anggota&id_anggota=<?php echo $d['id_anggota'];?>" class="mdi mdi-pencil"></a>&nbsp;&nbsp;
      <a href="?page=edit_anggota&hapus=<?php echo $d['id_anggota'];?>" class="mdi mdi-delete"></a>&nbsp;&nbsp;
        </td>
      </tr>
      <?php 
    }
    ?>
  </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
</html>