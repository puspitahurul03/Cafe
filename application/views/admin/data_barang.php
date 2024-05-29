<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Tambah Menu </button>
    
    <table class="table table-bordered">
        <tr>
            <th>No </th>
            <th>Nama  </th>
            <th>Keterangan </th>
            <th>Kategori </th>
            <th>Harga </th>
            <th colspan="3">Aksi </th>
        </tr>
        <?php
        $no=1;
         foreach($Menu as $mn) : ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $mn->nama ?></td>
    <td><?php echo $mn->keterangan ?></td>
    <td><?php echo $mn->kategori ?></td>
    <td><?php echo $mn->harga ?></td>
    <td><?php echo anchor('admin/data_barang/detail/' .$mn->id,'<div class="btn btn-success btn-sm"><i class="fas
    fa-search-plus"></i></div>')?></td>
    <td><?php echo anchor('admin/data_barang/edit/' .$mn->id,'<div class="btn btn-primary btn-sm"><i class="fa 
    fa-edit"></i></div>')?></td>
    <td><?php echo anchor('admin/data_barang/hapus/' .$mn->id,'<div class="btn btn-danger btn-sm"><i class="fa 
    fa-trash"></i></div>')?></td>
    
</tr>
<?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label> Nama Produk </label>
            <input type="text" name="nama" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Keterangan </label>
            <input type="text" name="keterangan" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Kategori </label>
            <select class="form-control" name="kategori">
              <option>Kopi Susu</option>
              <option>Espresso Base</option>
              <option>Mocktail</option>
              <option>Non Coffee</option>
              <option>Light Meal</option>
              <option>Eat and Rice</option>
              <option>Toast Sandwich</option>

            </select>
        </div>
        <div class="form-group">
            <label> Harga </label>
            <input type="text" name="harga" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Gambar Produk </label>
            <input type="file" name="gambar" class="form-control"> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>