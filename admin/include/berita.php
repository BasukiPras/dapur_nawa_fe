<?php 

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_berita = $_GET['data'];
		//hapus kategori buku
		$sql_tg = "DELETE FROM `berita` WHERE `id_berita` = '$id_berita'";
		mysqli_query($koneksi,$sql_tg);
	}
}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fab fa-beritager"></i> Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Berita</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-berita" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Berita</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>

              <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberitaberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberitaberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberitaberhasil"){?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Dihapus</div>
                  <?php }?>
                    <?php }?>
              </div>

              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori</th>
                        <th width="30%">Judul</th>
                        <th width="20%">Tanggal</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $batas = 2;
                    if(!isset($_GET['halaman'])){
                        $posisi = 0;
                        $halaman = 1;
                    }else{
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman-1) * $batas;
                    } 
                    $sql_k = "SELECT `b`.`id_berita`, `k`.`kategori_berita`, `b`.`judul`, `b`.`tanggal` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` = `k`.`id_kategori_berita`";
                        if (isset($_POST["katakunci"])){
                        $katakunci_berita = $_POST["katakunci"];
                        $sql_k .= " WHERE `b`.`judul` LIKE '%$katakunci_berita%' OR `k`.`kategori_berita` LIKE '%$katakunci_berita%' OR `b`.`tanggal` LIKE '%$katakunci_berita%'";
                        } 
                        $sql_k .= " ORDER BY `b`.`judul` limit $posisi,$batas";
                        $query_k = mysqli_query($koneksi, $sql_k);
                        $no = $posisi+1;
                        while($data_k = mysqli_fetch_row($query_k)){
                            $id_berita = $data_k[0];
                            $kategori_berita = $data_k[1];
                            $judul = $data_k[2];
                            $tanggal = $data_k[3];
                    ?>

                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $kategori_berita;?></td>
                      <td><?php echo $judul;?></td>
                      <td><?php echo $tanggal;?></td>
                      <td align="center">
                        <a href="index.php?include=edit-berita&data=<?php echo $id_berita;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" class="btn btn-xs btn-info" name="detailberita" value="detailberita" title="Detailberita"><i class="fas fa-eye"></i> Detail</a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul; ?>?'))window.location.href='index.php?include=berita&aksi=hapus&data=<?php echo $id_berita;?>&notif=hapusberitaberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php $no++;}?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php 
              //hitung jumlah semua data 
              $sql_jum = "SELECT `b`.`id_berita`, `k`.`kategori_berita`, `b`.`judul`, `b`.`tanggal` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` = `k`.`id_kategori_berita`";
              $query_jum = mysqli_query($koneksi,$sql_jum);
              $jum_data = mysqli_num_rows($query_jum);
              $jum_halaman = ceil($jum_data/$batas);
              ?>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php 
              if($jum_halaman==0){
                //tidak ada halaman
              }else if($jum_halaman==1){
                  echo "<li class='page-item'><a class='page-link'>1</a></li>";
              }else{
                  $sebelum = $halaman-1;
                  $setelah = $halaman+1;
                  if (isset($_POST["katakunci"])){
                      $katakunci_berita = $_POST["katakunci"];
                      if($halaman!=1){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$katakunci_berita&halaman=1'>First</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$katakunci_berita&halaman=$sebelum'>«</a></li>";
                      }
                      for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$katakunci_berita&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                      }

                      if($halaman!=$jum_halaman){
                          echo "<li class='page-item'>
                          <a class='page-link' href='index.php?include=berita&katakunci=$katakunci_berita&halaman=$setelah'>»</a></li>";
                          echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$katakunci_berita&halaman=$jum_halaman'>Last</a></li>";
                      }
                  }else{
                    if($halaman!=1){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=1'>First</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$sebelum'>«</a></li>";
                      }
                      for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                      }

                      if($halaman!=$jum_halaman){
                          echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$setelah'>»</a></li>";
                          echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$jum_halaman'>Last</a></li>";
                        }
                      }
                    }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
