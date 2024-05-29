<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice <?php 
     echo $invoice->id_in?></div></h4>
     <table class="table table-bordered table-hover table-striped">
<tr>
    <th>Id Barang</th>
    <th>Nama Produk</th>
    <th>Jumlah Pesanan</th>
    <th>Harga </th>
    <th>Sub Total</th>
</tr>
<?php
$total = 0;
foreach ($pesanan as $psn) :
    $subtotal = $psn->jumlah * $psn->harga;
    $total += $subtotal;
    ?>
    <tr>
        <td><?php echo $psn->id ?></td>
        <td><?php echo $psn->nama ?></td>
        <td><?php echo $psn->jumlah ?></td>
        <td><?php echo number_format($psn->harga,0,',','.') ?></td>
        <td><?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="4" align="right">Grand Total </td>
        <td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
    </tr>
     </table>
     <a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    <div class="alert alert-warning">
<p class="text-center align-middle">Note: Detail pesanan hanya akan terbuka untuk pesanan baru , jika menampilkan pesan error berarti pesanan sudah expire,terimakasih:) </p>
    </div>
</div>
</div>