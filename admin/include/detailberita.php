<?php 
      if(isset($_GET['data'])){
        $id_berita = $_GET['data'];
      //get profil
      $sql = "SELECT `b`.`id_berita`, `k`.`kategori_berita`, `b`.`judul`, `b`.`tanggal`, `b`.`isi` FROM `berita` `b` INNER JOIN `kategori_berita` `k` ON `b`.`id_kategori_berita` = `k`.`id_kategori_berita` WHERE `b`.`id_berita` = '$id_berita'";
      //echo $sql;
      $query = mysqli_query($koneksi, $sql);
      while($data = mysqli_fetch_row($query)){
        $id_berita = $data[0];
        $kategori_berita = $data[1];
        $judul = $data[2];
        $tanggal = $data[3];
        $isi = $data[4];
      }}
?>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><i class="fas fa-user-tie"></i> Detail Data berita</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?include=berita">Data berita</a></li>
            <li class="breadcrumb-item active">Detail Data berita</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
          <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <a href="index.php?include=berita" class="btn btn-sm btn-warning float-right">
                <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                  <tbody>                 
                    <tr>
                      <td width="20%"><strong>Tanggal<strong></td>
                      <td width="80%"><?php echo $tanggal;?></td>
                    </tr>              
                    <tr>
                      <td width="20%"><strong>Kategori berita<strong></td>
                      <td width="80%"><?php echo $kategori_berita;?></td>
                    </tr>                 
                    <tr>
                      <td width="20%"><strong>Judul<strong></td>
                      <td width="80%"><?php echo $judul;?></td>
                    </tr> 
                    <tr>
                      <td width="20%"><strong>Isi<strong></td>
                      <td width="80%"><?php echo $isi;?></td>
                    </tr>
                  </tbody>
                </table>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">&nbsp;</div>
          </div>
          <!-- /.card -->

  </section>