<?php 
    // include('../koneksi/koneksi.php');
    $id_kategori_menu = $_POST['kategori_menu'];
    $nama_menu = $_POST['nama_menu'];
    $harga_menu = $_POST['harga_menu'];
    $tag = $_POST['tag'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;

    if(empty($id_kategori_menu)){	   
        header("Location:index.php?include=tambah-menu&notif=tambahkosong&
        jenis=kategori");
    }else if(empty($nama_menu)){
	header("Location:index.php?include=tambah-menu&notif=tambahkosong&
        jenis=nama");
    }else if(empty($harga_menu)){
        header("Location:index.php?include=tambah-menu&notif=tambahkosong&
            jenis=harga");
    }else if(empty($tag)){
	header("Location:index.php?include=tambah-menu&notif=tambahkosong&
        jenis=tag");
    }
    else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:index.php?include=tambah-menu&notif=tambahkosong&
        jenis=cover");
    }
    else{   
	$sql = "INSERT INTO `menu` (`id_kategori_menu`, `nama_menu`, `harga_menu`, `foto_menu` ) VALUES ($id_kategori_menu, '$nama_menu', '$harga_menu' , '$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_menu = mysqli_insert_id($koneksi);

	if(!empty($_POST['tag'])){
		foreach($_POST['tag'] as $id_tag){
		$sql_i = "insert into `tag_menu` (`id_menu`, `id_tag`) 
		values ('$id_menu', '$id_tag')";
		mysqli_query($koneksi,$sql_i);
		}
	}
    header("Location:index.php?include=menu&notif=tambahberhasil");
    }
?>

