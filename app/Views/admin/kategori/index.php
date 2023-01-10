<p>
	<a style="color: white"  class="btn btn-success" href="<?php echo base_url('admin/kategori/add') ?>">
		Tambah Kategori
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
			<th width="20%">Nama</th>
			<th width="20%">Slug</th>
			<th width="20%">Urutan</th>
			<th width="15%"></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($kategori as $kategori) { ?>
			<tr>
				<td class="text-center"><?php echo $no ?></td>
				<td><?php echo $kategori['kategori_nama'] ?></td>
				<td><?php echo $kategori['kategori_slug'] ?></td>
				<td><?php echo $kategori['urutan'] ?></td>
				<td>
					<a style="color: black" class="btn btn-warning btn-sm" href="<?php echo base_url('admin/kategori/edit/'.$kategori['kategori_id']) ?>">
						Edit
					</a>
					<a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/kategori/delete/'.$kategori['kategori_id']) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
						Hapus
					</a>
				</td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>