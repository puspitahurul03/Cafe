<div class="container-fluid">
    <h3><i class="fas fa-edit"> </i> Data Menu </h3>
<?php foreach($Menu as $mn): ?> 

<form method="post" action="<?php echo base_url().'admin/data_barang/update'?>">
<div class="for-group">
    <label> Nama Produk</label>
<input type="text" name="nama" class="form-control"
value="<?php echo $mn->nama ?>">
</div>
<div class="for-group">
    <label> Keterangan</label>
<input type="hidden" name="id" class="form-control"
value="<?php echo $mn->id ?>">
<input type="text" name="keterangan" class="form-control"
value="<?php echo $mn->keterangan ?>">
</div>
<div class="for-group">
    <label> Kategori</label>
<input type="text" name="kategori" class="form-control"
value="<?php echo $mn->kategori ?>">
</div>
<div class="for-group">
    <label> Harga</label>
<input type="text" name="harga" class="form-control"
value="<?php echo $mn->harga ?>">
</div>
<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan </button>
</form>
<?php endforeach; ?>
</div>