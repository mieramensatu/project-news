<div class="row">
	<div class="col-12">
		<h1 style="font-family: 'Galada', cursive; font-size: 40px">Portal Berita Gading</h1>
		<hr>
	</div>
	<?php $no=1; foreach($berita as $berita) { ?>
		<div class="col-md-4 berita">
			<p class="text-center">
				<img src="<?php echo base_url('assets/upload/image/'.$berita['berita_gambar']) ?>" class="img img-thumbnail img-fluid">
			</p>
			<h2><a href="<?php echo base_url('home/read/'.$berita['berita_slug']) ?>"><?php echo $berita['berita_judul'] ?></a></h2>
			<p><?php echo strip_tags(character_limiter($berita['berita_isi']),50) ?></p>

			<p class="text-right"><a href="<?php echo base_url('home/read/'.$berita['berita_slug']) ?>">Baca detail...</a></p>
		</div>
		<?php $no++; } ?>
	</div>
