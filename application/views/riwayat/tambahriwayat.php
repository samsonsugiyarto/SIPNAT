<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Riwayat</h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('riwayat/tambahriwayat'); ?>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-3 col-form-label">Tahun Jabatan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="masukan tahun jabatan" value="<?= set_value('jabatan'); ?>">
                    <?= form_error('jabatan', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="nokandidat" class="col-sm-3 col-form-label">No Kandidat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nokandidat" name="nokandidat" placeholder="masukan no kandidat" value="<?= set_value('nokandidat'); ?>">
                    <?= form_error('nokandidat', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkapketua" class="col-sm-3 col-form-label">Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapketua" name="namalengkapketua" placeholder="masukan nama ketua" value="<?= set_value('namalengkapketua'); ?>">
                    <?= form_error('namalengkapketua', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkapwakil" class="col-sm-3 col-form-label">Wakil Ketua</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namalengkapwakil" name="namalengkapwakil" placeholder="masukan nama wakil ketua" value="<?= set_value('namalengkapwakil'); ?>">
                    <?= form_error('namalengkapwakil', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="visikan" class="col-sm-3 col-form-label">Visi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="visi" name="visi" placeholder="masukan visi" value="<?= set_value('visi'); ?>">
                    <?= form_error('visi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="misikan" class="col-sm-3 col-form-label">Misi</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="misi" name="misi" placeholder="isikan misi" rows="5"><?= set_value('misi'); ?></textarea>
                    <?= form_error('misi', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto Ketua</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fotoketua" name="fotoketua">
                                <label class="custom-file-label" for="fotoketua">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Foto Wakil Ketua</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fotowakil" name="fotowakil">
                                <label class="custom-file-label" for="fotowakil">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= base_url('riwayat/riwayat'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->