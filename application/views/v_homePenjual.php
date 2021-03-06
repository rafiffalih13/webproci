<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

    <!-- CSS NAVBAR -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navbar.css" />

    <!-- ICON -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  </head>

  <body>


    <?php
      include_once("navPembeli.php");     
    ?>

    <!-- Page Content -->
    <div class="container">

      <br>
      <br>
      
      <!-- loop show list barang -->
      <?php
        foreach ($barang as $b) {
      ?>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" style="min-height: 250px; max-height: 250px; max-width: auto; overflow: hidden;" src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-sm-10 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <form method="GET" >
                Nama : <br><input type="text" style="width: 400px" name="nama" value="<?php echo $b->nama_barang; ?>"><br>
                Kategori  : <br><input type="text" style="width: 400px" name="kategori" value="<?php echo $b->kategori; ?>"><br>
                Deskripsi : <br><input type="text" style="width: 400px" name="deskripsi" value="<?php echo $b->deskripsi; ?>"><br>
                Harga : <br><input type="text" style="width: 400px" name="harga" value="<?php echo $b->harga; ?>">
                <button style="margin-left: 150px" name="submit" formaction="<?php echo base_url()."index.php/c_homePenjual/edit_barang/".$b->id_barang; ?>">Edit</button>
                <input type="submit" name="submit" value="Delete" formaction="<?php echo base_url()."index.php/c_homePenjual/delete_barang/".$b->id_barang; ?>">

              </form>
            </div>
          </div>
        </div>
      </div>

      <?php
        }
      ?>
      <!-- <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="http://placehold.it/700x400" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-sm-10 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                [nama barang]
              </h4>
              <p class="card-text">[kategori]
                <br>[deskripsi]
                <br>[harga]
              </p>
            </div>
          </div>
        </div>
      </div> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
