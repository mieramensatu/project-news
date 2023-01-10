 </div></div></div>
 <footer class="footer-javawebmedia">
 	Web Design by <a href="https://instagram.com/gading.k_08" target="_blank">Gading Portal Berita</a>
 </footer>
</div>
</div>
<script src="<?php echo base_url() ?>/assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- ckeditor -->
<script src="<?php echo base_url() ?>/assets/ckeditor5/build/ckeditor.js"></script>
<script>ClassicEditor
.create( document.querySelector( '.editor' ), {
	toolbar: {
		items: [
		'heading',
		'|',
		'bold',
		'italic',
		'link',
		'bulletedList',
		'numberedList',
		'|',
		'indent',
		'outdent',
		'|',
		'imageUpload',
		'blockQuote',
		'insertTable',
		'mediaEmbed',
		'undo',
		'redo'
		]
	},
	language: 'en',
	image: {
		toolbar: [
		'imageTextAlternative',
		'imageStyle:full',
		'imageStyle:side'
		]
	},
	table: {
		contentToolbar: [
		'tableColumn',
		'tableRow',
		'mergeTableCells',
		'tableProperties'
		]
	},
	licenseKey: '',
} )
.then( editor => {
	window.editor = editor;
} )
.catch( error => {
	console.error( error );
} );
</script>
</body>
</html>