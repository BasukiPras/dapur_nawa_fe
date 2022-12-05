<link rel="stylesheet" href="fontawesome/css/all.css">

<section class="speciality" id="speciality">
<h1 class="heading"> Daftar<span> Menu Makanan dan Minuman</span> </h1>
<div class="box-container">
<div class="box">
<?php 
        $sql_b = "SELECT `b`.`id_menu`, `b`.`nama_menu`, `b`.`cover`, 
        `b`.`harga_menu` FROM `menu` `b` ORDER BY `b`.`id_menu` DESC LIMIT 6";
        $query_b = mysqli_query($koneksi, $sql_b);
        while($data_b = mysqli_fetch_row($query_b)){
            $id_menu = $data_b[0];
            $nama_menu = $data_b[1];
            $cover = $data_b[2];
            $harga_menu = $data_b[3];
        }?>
<img src="images/<?php echo $cover;?>" class="img-fluid" 
  alt="<?php echo $nama_menu;?>" 
    title="<?php echo $nama_menu;?>"></td>
    <td colspan="2"><h4><?php echo $nama_menu;?></h4></td>
</div>
<div class="box">
    <img class="image" src="images/ayamsaospedas.jpg">
    <div class="content">
        <h3>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Ayam Asam Pedas‎ ‎ ‎ ‎ ‎ ‎ ‎ </h3>
        <h4>Rp.17.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/udangsaosinggris.jpg" >
    <div class="content">
        <h3>‎ ‎ ‎ ‎ ‎‎ ‎ ‎ Udang Saos Inggris ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</h3>
        <h4>Rp.25.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/ayamsaos3rasa.jpg" >
    <div class="content">
        <h3>‎ ‎ ‎ ‎ Ayam Saos Tiga Rasa ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  </h3>
        <h4>Rp.17.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/capcaykamarbola.jpg" >
    <div class="content">
        <h3>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Capcay Kamar Bola ‎ ‎ ‎  ‎ ‎ ‎ ‎</h3>
        <h4>Rp.22.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/nasigorengjawa.jpg" >
    <div class="content">
        <h3>‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ Nasi Goreng Jawa‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</h3>
        <h4>Rp.12.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/capcay.jpg" >
    <div class="content">
        
        <h3>‎ ‎‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎Capcay‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</h3>
        <h4>Rp.18.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/nasigorengbumburujak.jpg" >
    <div class="content">
        <h3>Nasi Goreng Bumbu Rujak</h3>
        <h4>Rp.13.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/nasigorengrendang.jpg" >
    <div class="content">
        <h3>‎ ‎ ‎ ‎ ‎ ‎ Nasi Goreng Rendang‎ ‎ ‎ ‎ ‎</h3>
        <h4>Rp.12.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/migorengmalay.jpg" >
    <div class="content">
        
        <h3>  ‎ ‎ ‎ ‎‎ ‎ ‎ ‎Mie Goreng Malay ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</h3>
        <br>
        <h4>Rp.14.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/ayamsaosinggris.jpg" >
    <div class="content">
        <h3>  ‎ ‎ ‎ ‎‎ ‎ ‎ ‎Ayam Saos Inggris ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</h3>
        <br>
        <h4>Rp.17.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/migorengdapurnawa.jpg" >
    <div class="content">
        
        <h3>‎ ‎ ‎ ‎ ‎ ‎ Mie Goreng Dapur Nawa‎ ‎ ‎ ‎ ‎ ‎ </h3>
        <br>
        <h4>Rp.13.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/ayamgorengsaosnawa.jpg" >
    <div class="content">
        
        <h3>Ayam Goreng Saus Nawa</h3>
        <h4>Rp.20.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/nasigorengbulgogi.jpg" >
    <div class="content">
        
        <h3>‎ ‎ ‎ ‎Nasi Goreng Bulgogi‎ ‎ ‎ ‎</h3>
        <h4>Rp.17.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/udangsaossingapur.jpg" >
    <div class="content">
        <h3>Udang Saos Singapore‎ ‎ ‎ ‎</h3>
        <h4>Rp.17.000</h4>
    </div>
</div>
<div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>Es Teh</h3>
        <p>Rp.3000</p>
    </div>
</div>
<div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>Teh Hangat</h3>
        <p>Rp.3000</p>
    </div>
</div>
    <div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>Kopi Hitam</h3>
        <p>Rp.4000</p>
    </div>
</div>
    <div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>Es jeruk</h3>
        <p>Rp.5000</p>
    </div>
</div>
<div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>Kopi Susu</h3>
        <p>Rp.5000</p>
    </div>
</div>
<div class="box">
    <img class="image" src="images/img-01.jpg" >
    <div class="content">
        <h3>White Coffee</h3>
        <p>Rp.5000</p>
    </div>
</div>
</div>
</section>

<!-- Popular Section(Seção da Página Popular)  -->
<section class="popular" id="popular">
<h1 class="heading">Menu <span>Populer</span></h1>
<div class="box-container">
<div class="box">
    <span class="price">Rp.12000 </span>
    <img src="images/nasigorengbulgogi.jpg" >
    <h3>Nasi Goreng Bulgogi</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    
</div>
<div class="box">
    <span class="price">Rp.22000 </span>
    <img src="images/capcaykamarbola.jpg" >
    <h3>Capcay Kamar Bola</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
</div>
<div class="box">
    <span class="price">Rp.20000 </span>
    <img src="images/ayamgorengsaosnawa.jpg" >
    <h3>Ayam Soas Dapoer Nawa</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>

</div>
<div class="box">
    <span class="price">Rp.14000</span>
    <img src="images/migorengmalay.jpg" >
    <h3>Nasi Goreng Malay</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
</div>
<div class="box">
    <span class="price">Rp.17000 </span>
    <img src="images/udangsaossingapur.jpg" >
    <h3>Udang Saos Singpore</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
</div>
<div class="box">
    <span class="price">Rp.20000 </span>
    <img src="images/ayamgorengsaosdapurnawa.jpg" >
    <h3>Ayam Koloke</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
</div>
</div>
</section>

<div class="contact-imfo-box">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <i class="fa fa-volume-control-phone"></i>
            <div class="overflow-hidden">
                <h4>Phone</h4>
                <p class="lead">
                    082144367052
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <i class="fa fa-envelope"></i>
            <div class="overflow-hidden">
                <h4>Email</h4>
                <p class="lead">
                    dapoernawa@gmail.com
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <i class="fa fa-map-marker"></i>
            <div class="overflow-hidden">
                <h4>Location</h4>
                <p class="lead">
                    Jl. Sampiyan No.33 Malang,Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>
</div>