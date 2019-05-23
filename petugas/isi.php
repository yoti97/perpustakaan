<?php
@$page=htmlentities($_GET['page']);
$halaman="$page.php";

if(!file_exists($halaman) || empty($page)){
	include "../petugas/home.php";
}else{
	include "$halaman";
}
?>