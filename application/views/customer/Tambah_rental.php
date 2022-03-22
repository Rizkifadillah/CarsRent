<div class="container-fluid">

    <div class="card col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto mt-4 mb-4">
        <div class="card-header">
            Form Rental Mobil
        </div>
        <?php echo $this->session->flashdata('pesan') ?>

        <div class="card-body">
            <?php foreach($detail as $dt) : ?>
                <form action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>" method="post">
                    <div class="form-group">
                        <label >Harga Sewa / Hari</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                        <input type="number" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label >Denda / Hari</label>
                        <input type="number" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label >Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label >Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control" >
                    </div>

                    <button type="submit" class="btn btn-info">Rental</button>
                </form>
            <?php endforeach ;?>
        </div>
    </div>

</div>