<div class="container-fluid">

    <div class="card col-md-12 col-12 col-lg-8 col-xl-8 ml-auto mr-auto mt-4 mb-4">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <?php echo $this->session->flashdata('pesan') ?>

        <div class="card-body">
                <div class="panel-body no-padding ">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Customer</th>
                                <th>Mobil</th>
                                <th>Tgl. Rental</th>
                                <th>Tgl. Kembali</th>
                                <th>Harga/Hari</th>
                                <th>Denda/Hari</th>
                                <th>Aksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($transaksi as $tr):
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->nama ?></td>
                                <td><?php echo $tr->merk ?></td>
                                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                                <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?> /Hari</td>
                                <td>Rp. <?php echo number_format($tr->denda,0,',','.') ?> /Hari</td>
                               
                                <td>
                                    <?php
                                        if($tr->status_rental == "Selesai"){ ?>
                                            <button class="btn btn-sm btn-danger">Rental Selesai</button>
                                     <?php }else{ ?>
                                            <a href="<?php echo base_url('customer/transaksi/pembayaran/').$tr->id_rental ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($tr->status_rental == 'Belum Selesai') { ?>
                                        <a onclick="return confirm('Yakin Batal ?')" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>" class="btn btn-sm btn-danger">Batal</a>
                                    <?php }else{ ?>
                                        <button type="button" class="btn btn-danger btn-sm mt-3" style="width: 100%;" data-toggle="modal" data-target="#exampleModal"> Batal </button>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

        </div>
    </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    Maaf, transaksi inisudah selesai, dan tidak bisa dibatalkan!
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>