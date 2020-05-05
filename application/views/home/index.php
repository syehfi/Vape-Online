<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/index.css">
    <title>Toko Vape Online Terlengkap dan Dah lah</title>
</head>
<body>

<!-- Banner -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url(); ?>/assets/image/ban1.jpg">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url(); ?>/assets/image/ban2.jpg">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url(); ?>/assets/image/ban3.jpg">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url(); ?>/assets/image/ban4.jpg">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url(); ?>/assets/image/ban5.jpg">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- End Banner -->

<!-- Product Catalogue -->
<h2>Produk Baru</h2>
<div class="bordermargin">
<div class="box">
    <div class="card-deck mx-auto mt-5">
    <?php
        $i = 1;
        foreach($produk as $pd){?>
        <div class="card mb-3">
            <img style="height: 300px; width:230px; margin-left:20px;" class="card-img-top" src="<?= base_url() ?>assets/upload/<?= $pd['gambar'] ?>" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $pd['nama_produk']?></h5>
            <p class="card-text"><?= $pd['deskripsi']?></p>
            <h5 class="card-title">Harga Rp. <?= number_format($pd['harga'])?></h5>
            <a href="<?= base_url();?>katalog/detail/<?= $pd['id_produk']?>" class="btn btn-primary">Add To Cart</a>
            </div>
        </div>
    <?php } ?>
    </div>
  </div>   
</div> 

<!-- End Product Catalogue -->

<!-- Hot Product -->
<h2>Produk Terlaris</h2>
<div class="bordermargin">
<div class="box">
    <div class="card-deck mx-auto mt-5">
    <?php
        $i = 1;
        foreach($produk as $pd){?>
        <div class="card mb-3">
            <img style="height: 300px; width:230px; margin-left:20px;" class="card-img-top" src="<?= base_url() ?>assets/upload/<?= $pd['gambar'] ?>" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $pd['nama_produk']?></h5>
            <p class="card-text"><?= $pd['deskripsi']?></p>
            <h5 class="card-title">Harga Rp. <?= number_format($pd['harga'])?></h5>
            <a href="<?= base_url();?>katalog/detail/<?= $pd['id_produk']?>" class="btn btn-primary">Add To Cart</a>
            </div>
        </div>
    <?php } ?>
    </div>   
  </div>
</div> 
<!-- End Hot Product -->

</body>
</html>