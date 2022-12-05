<?php 
$id_user = $_SESSION['id_user'];
// kurang user
$id_kategori_berita = $_POST['kategori_berita'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

if(empty($id_kategori_berita)){
	header("Location:index.php?include=tambah-berita&notif=tambahkategorikosong");
}else if(empty($judul)){
	header("Location:index.php?include=tambah-berita&notif=tambahjudulkosong");
}else if(empty($isi)){
	header("Location:index.php?include=tambah-berita&notif=tambahisikosong");
}else{
	$sql = "INSERT INTO `berita` (`id_user`, `id_kategori_berita`, `judul`, `isi`) VALUES ('$id_user', '$id_kategori_berita', '$judul', '$isi')";
	echo $sql;
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=berita&notif=tambahberitaberhasil");	
}
?>