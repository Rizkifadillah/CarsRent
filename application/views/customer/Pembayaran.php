<div class="container mt-5 mb-5">
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <span>

<?php echo $this->session->flashdata('pesan') ?>
</span>

                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) : ?>

                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?php echo $tr->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_rental ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_kembali ?></td>
                            </tr>

                            <tr>
                                <th>Biaya Sewa /Hari</th>
                                <td>:</td>
                                <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jumlah_hari = abs(($x - $y)/(60*60*24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?php echo round($jumlah_hari) ?> Hari</td>
                            </tr>
                            <tr>
                                <th class="text-success">Total Pembayaran </th>
                                <td>:</td>
                                <td>
                                    <button class="btn btn-success">Rp. <?php echo number_format($tr->harga * $jumlah_hari,0,',','.') ?></button>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-success"> </th>
                                <td></td>
                                <td>
                                    <a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-secondary">Print Invoice</a>
                                </td>
                            </tr>

                        <?php endforeach ; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
    
                <div class="card-body">
                    <p class="text-secondary">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah Ini:</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 7865445263263</li>
                        <li class="list-group-item">Bank BCA 63734353732432362</li>
                        <li class="list-group-item">Bank BNI 23333238883833</li>
                    </ul>

                    <?php if(empty($tr->bukti_pembayaran)){ ?>
                        <button type="button" class="btn btn-danger btn-sm mt-3" style="width: 100%;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-upload"></i> Upload Bukti Pembayaran</button>
                    <?php }elseif($tr->status_pembayaran == '0'){ ?>
                        <button style="width: 100%;" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
                    <?php }elseif($tr->status_pembayaran == '1'){ ?>
                        <button style="width: 100%;" class="btn btn-sm btn-info mt-3"><i class="fa fa-check"></i> Pembayaran Selesai</button>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Upload Bukti Pembayaran</label>
                        <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
                        <input type="file" name="bukti_pembayaran" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="Submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>