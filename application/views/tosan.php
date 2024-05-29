<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/sliderss.jpg')?>" class="d-block w-100" alt="..."  height="350" >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/sliders2.jpg')?>" class="d-block w-100" alt="..." height="350">
    </div>
       <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider3.jpg')?>" class="d-block w-100" alt="..." height="350">
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
    <div class="row text-center mt-4">
        <?php foreach ($tosan as $mn) : ?>

<div class="card ml-3 mb-3" style="width: 16rem;">
  <img src="<?php echo base_url(). '/uploads/' .$mn->gambar ?>" class="card-img-top" alt="..." height="300" width="100">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $mn->nama ?></h5>
    <small><?php echo $mn->keterangan ?></small><br>
    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($mn->harga,0,',','.')  ?></span><br>
  <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mn
  ->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-cart-plus"></i></div>')?>
  <?php echo anchor('dashboard/detail/'.$mn
  ->id,'<div class="btn btn-sm btn-success">Detail</div>')?>
  </div>
</div>

            <?php endforeach; ?>
    </div>
</div>