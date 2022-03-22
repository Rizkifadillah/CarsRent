<table class="table">
    <h2>Invoice Pembayaran Anda</h2>
    <?php foreach($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>
        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>

        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
        </tr>

        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>

        <tr>
            <td>Biaya Sewa /Hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
        </tr>
        <tr>
            <?php
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jumlah_hari = abs(($x - $y)/(60*60*24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo round($jumlah_hari) ?> Hari</td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php 
                    if ($tr->status_pembayaran == '0') {
                        # code...
                        echo "Belum Lunas";
                    }else{
                        echo "Lunas";
                    }
                ?>
                
            </td>
        </tr>
        <tr>
            <td class="text-success">Total Pembayaran </td>
            <td>:</td>
            <td>
                Rp. <?php echo number_format($tr->harga * $jumlah_hari,0,',','.') ?>
            </td>
        </tr>

        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li>Bank Mandiri 7896785378576343</li>
                    <li>Bank BCA 3631517493748368</li>
                    <li>Bank BRI 381578212183496</li>
                </ul>
            </td>
        </tr>

        <!-- <tr>
            <td class="text-success"> </td>
            <td></td>
            <td>
                <a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-secondary">Print Invoice</a>
            </td>
        </tr> -->

    <?php endforeach ; ?>
</table>

<script type="text/javascript">
    window.print();
</script>