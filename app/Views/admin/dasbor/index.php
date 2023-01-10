<p>
	<a style="color: white" class="btn btn-success" href="<?php echo base_url('admin/berita/add') ?>">
		Tambah Berita
	</a>
</p>

<?php $session = \Config\Services::session();
if($session->getFlashdata('sukses')) { ?>
	<p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
<?php } ?>

<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th class="text-center" width="5%">NO</th>
			<th width="10%">Gambar</th>
			<th width="20%">Judul</th>
			<th width="10%">Kategori</th>
			<th width="10%">Jenis</th>
			<th width="5%">Status</th>
			<th width="10%"></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($berita as $berita) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?></td>
				<td class="text-center"><img src="<?php echo base_url('assets/upload/image/'.$berita['berita_gambar']) ?>" class="img img-thumbnail" width="80"></td>
				<td><?php echo $berita['berita_judul'] ?></td>
				<td><?php echo $berita['kategori_nama'] ?></td>
				<td><?php echo $berita['berita_jenis'] ?></td>
				<td><?php echo $berita['berita_status'] ?></td>
				<td>
					<a style="color: black" class="btn btn-warning btn-sm" href="<?php echo base_url('admin/berita/edit/'.$berita['berita_id']) ?>">
						Edit
					</a>
					<a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/berita/delete/'.$berita['berita_id']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
						Hapus
					</a>
				</td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>