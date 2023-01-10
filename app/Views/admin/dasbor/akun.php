<p class="alert alert-success">
  Silakan update profile Anda
</p>
<?php echo form_open(base_url('admin/dasbor/akun'),' class="form-horizontal"') ?>
<input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Nama lengkap<span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="text" name="user_nama" id="user_nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo $user['user_nama'] ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Username <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="text" name="username" readonly class="form-control" placeholder="Username" value="<?php echo $user['username'] ?>">
  </div>
</div>


<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Password <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="text" name="password" class="form-control" placeholder="Password" value="" required>
  </div>
</div>         


<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Email <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="user_email" name="user_email" class="form-control" placeholder="Email" value="<?php echo $user['user_email'] ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Level Hak Akses</label>
  <div class="col-sm-9">
    <input type="text" name="akses_level" readonly class="form-control" placeholder="Level Hak Akses" value="<?php echo $user['akses_level'] ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
      &nbsp
      <a href="<?php echo base_url('admin/user') ?>" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
    </div>
  </div>
</div>

<?php echo form_close(); ?>