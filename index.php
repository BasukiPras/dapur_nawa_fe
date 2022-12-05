<!--  -->
<!doctype html>
<html lang="en">
  <head>
    <?php include("includes/head.php");?>
  </head>
  <body>
    <?php include("includes/navigasi.php");?>
    <?php include("koneksi/koneksi.php");?>

    <?php 
    //pemanggilan konten halaman index
    // include("include/index.php");
    if(isset($_GET["include"])){
      $include = $_GET["include"];

      if($include=="menu"){
        include("include/menu.php");
      }else if($include=="about"){    
        include("include/about.php");
      }else if($include=="contact"){    
        include("include/contact.php");
      }else if($include=="info"){    
        include("include/info.php");
      }else if($include=="info-detail"){    
        include("include/info-detail.php");
      }
    }else{
      include("include/index.php");
    }
    ?>
    
    <?php include("includes/footer.php");?>
    <!-- Optional JavaScript; choose one of the two! -->
    <?php include("includes/script.php");?>
    
  </body>
</html>
