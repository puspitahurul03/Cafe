<div class="container-fluid">
<div class="card">
  <h5 class="card-header">Detail menu</h5>
  <div class="card-body">
    <div class="row">
        <?php foreach ($Menu as $mn): ?>
        <div class="col-md-4"> 
          <img src="<?php echo base_url(). '/uploads
          /'.$mn->gambar?>" width="150">
        </div>
        <div class="col-md-8"> 
<table class="table ">
    <tr>
        <td>Nama Menu</td>
        <td><strong><?php echo $mn->nama ?></strong></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td><strong><?php echo $mn->keterangan ?></strong></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td><strong><?php echo $mn->kategori ?></strong></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mn->harga,0,',','.')  ?></div></strong></td>
    </tr>
     
</table>
<?php echo anchor('dashboard/tambah_ke_keranjang/'.$mn
  ->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-cart-plus"></i></div>')?>
   <?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>')?>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
</div>