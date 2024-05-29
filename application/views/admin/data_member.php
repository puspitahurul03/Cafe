<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_member"><i class="fas fa-plus fa-sm"></i> Tambah Member baru </button>
    <table class="table table-bordered">
        <tr>
            <th>Id </th>
            <th>Nama  </th>
            <th>username </th>
            <th>Keterangan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no=1;
         foreach($user as $us) : ?>
<tr>
    <td><?php echo $us->id_user ?></td>
    <td><?php echo $us->nama_user ?></td>
    <td><?php echo $us->username ?></td>
    <td><?php echo $us->role_id ?></td>
    <td><?php echo anchor('admin/data_member/detail/' .$us->id_user,'<div class="btn btn-success btn-sm"><i class="fas
    fa-search-plus"></i></div>')?></td>
    <td><?php echo anchor('admin/data_member/hapus/' .$us->id_user,'<div class="btn btn-danger btn-sm"><i class="fa 
    fa-trash"></i></div>')?></td>

    
</tr>
<?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_member/tambah_aksi';?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label> Nama  </label>
            <input type="text" name="nama" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Password </label>
            <input type="text" name="password" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Keterangan </label>
            <select class="form-control" name="keterangan">
              <option>1 (Admin)</option>
              <option>2(user) </option>

            </select>
        </div>
        <div class="form-group">
            <label> Alamat </label>
            <input type="text" name="alamat" class="form-control"> 
        </div>
        <div class="form-group">
            <label> Email </label>
            <input type="text" name="email" class="form-control"> 
        </div>
        <div class="form-group">
            <label> No WA </label>
            <input type="text" name="nowa" class="form-control"> 
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