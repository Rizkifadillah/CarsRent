<h3 style="text-align: ccenter;">Laporan Transaksi Rental Mobil</h3>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
    </tr>
</table>

<table class="table table-hover">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Customer</th>
            <th>Mobil</th>
            <th>Tgl. Rental</th>
            <th>Tgl. Kembali</th>
            <th>Harga/Hari</th>
            <th>Denda/Hari</th>
            <th>Total Denda</th>
            <th>Tgl. Dikembalikan</th>
            <th>Status Pengembalian</th>
            <th>Status Rental</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($laporan as $lp):
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $lp->nama ?></td>
            <td><?php echo $lp->merk ?></td>
            <td><?php echo date('d/m/Y', strtotime($lp->tanggal_rental)) ?></td>
            <td><?php echo date('d/m/Y', strtotime($lp->tanggal_kembali)) ?></td>
            <td><?php echo number_format($lp->harga,0,',','.') ?></td>
            <td><?php echo number_format($lp->denda,0,',','.') ?></td>
            <td><?php echo number_format($lp->total_denda,0,',','.') ?></td>
            <td>
                <?php 
                    if($lp->tanggal_pengembalian == "0000-00-00"){
                        echo "-";
                    }else{
                        echo date('d/m/Y', strtotime($lp->tanggal_pengembalian));
                    }
                ?>
            </td>
            <td><?php 
                if($lp->status_pengembalian == "Belum Kembali"){
                    echo "<span class='label label-danger'>Sedang Dirental</span>";
                }else{
                    echo "<span class='label label-success'>Stay Pull</span>";
                }
            ?></td>
            <td><?php 
                if($lp->status_rental == "Belum Selesai"){
                    echo "<span class='label label-danger'>Sedang Dirental</span>";
                }else{
                    echo "<span class='label label-success'>Stay Pull</span>";
                }
            ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
    window.print()
</script>