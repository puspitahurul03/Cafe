<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        <div class="btn btn-sm btn-info">
            <?php
            $grand_total =0;
            if($keranjang = $this->cart->contents())
            {
                foreach ($keranjang as $item)
                {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h4>Total yang harus dibayar adalah :Rp. ".number_format($grand_total,0,',','.');
            
            ?>
        </div><br><br>
        <h3>Silahkan isi form reservasi ini!</h3>
        <form method ="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
        <div class="form-group">
            <label>Nama Pemesan</label>
            <input type="text" name="nama" placeholder="Masukkan nama pemesan" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukkan email anda" class="form-control">
        </div>
        <div class="form-group">
            <label>No Whatsapp</label>
            <input type="text" name="wa" placeholder="Masukkan nomor whatsapp anda" class="form-control">
        </div>
        <div class="form-group">
            <label>No Meja</label>
            <input type="text" name="meja" placeholder="Masukkan nomor meja" class="form-control">
        </div>
        <div class="form-group">
            <label>Jenis Pembayaran</label>
            <select class="form-control">
            <option>--Pilih Jenis Pembayaran --</option>
                <option>Transfer via bank(BCA -8282710932)</option>
                <option>Transfer via e-wallet(Dana -8881083113066518</option>
                <option>Bayar langsung ke kasir</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-success mb-3">Pesan </button>
        </form>
        <?php     
        }else 
        {echo "<h4>Anda belum memasukkan pesanan ke keranjang belanja";
        }
        ?>
        </div>

        
        <div class="col-md-2"></div> 
    </div>
</div>