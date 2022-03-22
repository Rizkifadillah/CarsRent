<div class="container mt-5 mb-5">
    <div class="card">
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="card-body">
            <?php foreach($detail as $dt) : ?> 
                <div class="row">
                    <div class="col-md-6">
                        <img width="70%" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>Nomer Plat</th>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi</th>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Harga Sewa / Hari</th>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?> / Hari</td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?> / Hari</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php 
                                        if ($dt->status == "0") {
                                            # code...
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Supir</th>
                                <td>
                                    <?php 
                                        if($dt->supir == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'> Tersedia</span>";
                                        }
                                    
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>AC</th>
                                <td>
                                    <?php 
                                        if($dt->ac == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'> Tersedia</span>";
                                        }
                                    
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>MP3 Player</th>
                                <td>
                                    <?php 
                                        if($dt->mp3_player == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'> Tersedia</span>";
                                        }
                                    
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Central Lock</th>
                                <td>
                                    <?php 
                                        if($dt->central_lock == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'> Tersedia</span>";
                                        }
                                    
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th></th>
                                <td>
                                    <?php 
                                         if($dt->status == "0"){
                                            echo '
                                            <a class="btn btn-danger" href="#">
                                                Sedang Dirental
                                            </a>
                                            ';
                                        }else{
                                            echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '
                                            <button class="btn btn-success">
                                                Rental
                                            </button>
                                            ');
                                        }
                                    ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>