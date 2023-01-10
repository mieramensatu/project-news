<div class="row">
	<div class="col-md-4 berita">
		<img src="<?php echo base_url('assets/upload/image/'.$berita['berita_gambar']) ?>" class="img img-thumbnail img-fluid">
	</div>
	<div class="col-md-8 berita">

		<h2><a href="<?php echo base_url('home/read/'.$berita['berita_slug']) ?>"><?php echo $berita['berita_judul'] ?></a></h2>
		<p><?php echo $berita['berita_isi'] ?></p>
	</div>
</div>
