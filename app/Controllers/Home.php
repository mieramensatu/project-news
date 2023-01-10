<?php namespace App\Controllers;

// Load model
use App\Models\Berita_model;
// End load model

class Home extends BaseController
{
	// Main page
	public function index()
	{
		helper('text');
		$model = new Berita_model();
		$berita = $model->listing();
		$data = array(	'title'		=> 'Home',
			'berita'	=> $berita,
			'content'	=> 'home/index');
		return view('layout/wrapper',$data);
	}

	// Read berita
	public function read($berita_slug)
	{
		helper('text');
		$model = new Berita_model();
		$berita = $model->read($berita_slug);
		$data = array(	'title'		=> $berita['berita_judul'],
						'berita'	=> $berita,
						'content'	=> 'home/read');
		return view('layout/wrapper',$data);
	}
}
