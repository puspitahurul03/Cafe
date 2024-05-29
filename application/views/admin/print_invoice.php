<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>Tanggal Pemesanan</th>
            <th>Tanggal Pembayaran</th>
</tr>
        <?php 
        foreach ($invoice as $inv) :?>
        <tr>
            <td><?php echo $inv->id_in ?> </td>
            <td><?php echo $inv->nama_pemesan ?> </td>
            <td><?php echo $inv->email ?> </td>
            <td><?php echo $inv->tgl_pesan ?> </td>
            <td><?php echo $inv->tgl_bayar ?> </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print()
        </script>
</body>
</html>