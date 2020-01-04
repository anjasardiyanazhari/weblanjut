<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <?php if (isset($pesan)) echo $pesan; ?>

            <form action="<?= site_url('backend/dashboard/Simpan_barang') ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" name="txtnama">
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" class="form-control" name="txtgambar">
                </div>

                <div class="form-group row">
                    <label>Keterangan</label>
                    <textarea type="text" name="txtketerangan" id="txtketerangan" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

            </form>



        </div>
    </div>
</div>