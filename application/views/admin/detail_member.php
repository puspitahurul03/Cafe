<div class="container-fluid">
<div class="card">
  <h5 class="card-header">Detail data member</h5>
  <div class="card-body">
    <div class="row">
        <?php foreach ($user as $us): ?>
        <div class="col-md-8"> 
<table class="table ">
    <tr>
        <td>Nama User</td>
        <td><strong><?php echo $us->nama_user ?></strong></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><strong><?php echo $us->username ?></strong></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td><strong><?php echo $us->role_id ?></strong></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><strong><?php echo $us->alamat ?></strong></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><strong><?php echo $us->email ?></strong></td>
    </tr>
    <tr>
        <td>No Whatsapp</td>
        <td><strong><?php echo $us->NoHP ?></strong></td>
    </tr>
    
     
</table>
   <?php echo anchor('admin/data_member','<div class="btn btn-sm btn-warning">Kembali</div>')?>
   <?php echo anchor('admin/data_member/hapus/' .$us->id_user,'<div class="btn btn-danger btn-sm"><i class="fa 
    fa-trash"></i></div>')?>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
</div>