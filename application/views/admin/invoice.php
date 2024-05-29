<div class="container-fluid">
<a class="btn  btn-sm btn-success  " align="right" href="<?php echo base_url('admin/invoice/print')?>"><i class="fa fa-print"></i>Print</a>
  
    <table class="table table-bordered table-hover table-striped">
    <h4 align="center">Invoice Pemesanan Produk</h4>
<tr>
    <th>Id Invoice</th>
    <th>Nama Pemesan</th>
    <th>Email</th>
    <th>Tanggal pemesanan</th>
    <th>Tanggal pembayaran</th>
    <th>Aksi</th>
</tr>
<tr>
    <?php foreach ($invoice as $inv): ?>
    <td><?php echo $inv->id_in ?></td>
    <td><?php echo $inv->nama_pemesan ?></td>
    <td><?php echo $inv->email ?></td>
    <td><?php echo $inv->tgl_pesan ?></td>
    <td><?php echo $inv->tgl_bayar ?></td>
    <td><?php echo anchor('admin/invoice/detail/'.$inv->id_in,'<div class="btn btn-sm btn-info">Detail</div>') ?></td>
</tr>
<?php endforeach; ?>
    </table>
</div>