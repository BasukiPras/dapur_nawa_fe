<?php 
session_start();
include('../koneksi/koneksi.php');
// $id_user = $_SESSION['id_user'];
// // kurang user
if(isset($_SESSION['id_berita'])){
$id_berita = $_SESSION['id_berita'];
$id_kategori_berita = $_POST['kategori'];
$judul = $_POST['juduls'];
$isi = $_POST['isi'];

if(empty($id_kategori_berita)){
	header("Location:index.php?include=edit-berita&notif=tambahkategorikosong");
}else if(empty($judul)){
	header("Location:index.php?include=edit-berita&notif=tambahjudulkosong");
}else if(empty($isi)){
	header("Location:index.php?include=edit-berita&notif=tambahisikosong");
}else{
	$sql = "UPDATE `berita` SET `id_kategori_berita`='$id_kategori_berita', `judul`='$judul', `isi`='$isi' WHERE `id_berita`='$id_berita'";

	mysqli_query($koneksi,$sql);
    unset($_SESSION['id_berita']);
header("Location:index.php?include=berita&notif=editberitaberhasil");	
}}
?>