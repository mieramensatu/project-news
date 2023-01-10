<p>
	<a style="color: white" class="btn btn-success" href="<?php echo base_url('admin/user/add') ?>">
		Tambah User
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
			<th width="20%">Email</th>
			<th width="20%">Username</th>
			<th width="20%">Level</th>
			<th width="15%"></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($user as $user) { ?>
		<tr>
			<td class="text-center"><?php echo $no ?></td>
			<td><?php echo $user['user_nama'] ?></td>
			<td><?php echo $user['user_email'] ?></td>
			<td><?php echo $user['username'] ?></td>
			<td><?php echo $user['akses_level'] ?></td>
			<td>
				<a style="color: black" class="btn btn-warning btn-sm" href="<?php echo base_url('admin/user/edit/'.$user['user_id']) ?>">
					Edit
				</a>
				<a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/user/delete/'.$user['user_id']) ?>" onclick="return confirm('Yakin ingin menghapus user ini?')">
					Hapus
				</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>