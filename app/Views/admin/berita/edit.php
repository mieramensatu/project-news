<form action="<?php echo base_url('admin/berita/edit/'.$berita['berita_id']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <input type="hidden" name="berita_id" value="<?php echo $berita['berita_id'] ?>">
  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Judul berita<span class="text-danger">*</span></label>
    <div class="col-sm-9">
      <input type="text" name="berita_judul" id="berita_judul" class="form-control" placeholder="Judul Berita" value="<?php echo $berita['berita_judul'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Kategori <span class="text-danger">*</span></label>
    <div class="col-sm-9">
      <select name="kategori_id" class="form-control">
        <?php foreach ($kategori as $key => $kategori) { ?>
          <option value="<?php echo $kategori['kategori_id'] ?>" <?php if($berita['kategori_id']==$kategori['kategori_id']) { echo "selected"; } ?>>
            <?php echo $kategori['kategori_nama'] ?>
          </option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Jenis Berita</label>
    <div class="col-sm-9">
      <select name="berita_jenis" class="form-control">
        <option value="Berita">Berita</option>
        <option value="Profil" <?php if($berita['berita_jenis']=="Profil") { echo "selected"; } ?>>Profil</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Status Berita</label>
    <div class="col-sm-9">
      <select name="berita_status" class="form-control">
        <option value="Publish">Publish</option>
        <option value="Draft" <?php if($berita['berita_status']=="Draft") { echo "selected"; } ?>>Draft</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Isi berita <span class="text-danger">*</span></label>
    <div class="col-sm-9">
      <textarea name="berita_isi" class="form-control editor" placeholder="Isi berita"><?php echo $berita['berita_isi']; ?></textarea>
    </div>
  </div>         


  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Keyword untuk Google <span class="text-danger">*</span></label>
    <div class="col-sm-9">
      <textarea name="keywords" class="form-control" placeholder="Keyword untuk Google"><?php echo $berita['keywords']; ?></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right">Upload Gambar <span class="text-danger">*</span></label>
    <div class="col-sm-9">
      <input type="file" name="berita_gambar" class="form-control" required>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 control-label text-right"></label>
    <div class="col-sm-9">
      <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
        &nbsp
        <a href="<?php echo base_url('admin/berita') ?>" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
      </div>
    </div>
  </div>

  <?php echo form_close(); ?>