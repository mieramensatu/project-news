<?php echo form_open(base_url('admin/kategori/edit/'.$kategori['kategori_id']),' class="form-horizontal"') ?>
<input type="hidden" name="kategori_id" value="<?php echo $kategori['kategori_id'] ?>">
<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Nama Kategori<span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="text" name="kategori_nama" id="kategori_nama" class="form-control" placeholder="Nama Kategori" value="<?php echo $kategori['kategori_nama'] ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Urutan <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $kategori['urutan'] ?>">
  </div>
</div>



<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
    &nbsp
      <a href="<?php echo base_url('admin/kategori') ?>" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
    </div>
  </div>
</div>

<?php echo form_close(); ?>