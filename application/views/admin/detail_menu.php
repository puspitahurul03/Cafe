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
<?php echo anchor('admin/data_barang/edit/' .$mn->id,'<div class="btn btn-primary btn-sm"><i class="fa 
    fa-edit"></i></div>')?>
    <?php echo anchor('admin/data_barang/hapus/' .$mn->id,'<div class="btn btn-danger btn-sm"><i class="fa 
    fa-trash"></i></div>')?>
   <?php echo anchor('admin/data_barang','<div class="btn btn-sm btn-warning">Kembali</div>')?>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
</div>