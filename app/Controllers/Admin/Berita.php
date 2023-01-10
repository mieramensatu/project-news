<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
// End load model

use CodeIgniter\Controller;

class Berita extends Controller
{
	// Listing all
	public function index()
	{
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model = new Berita_model();
		$berita = $model->listing();
		$data = array(	'title'		=> 'Data Berita',
			'berita'	=> $berita,
			'content'	=> 'admin/berita/index');
		return view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function add()
	{
		helper(['form', 'url']);
		$image = \Config\Services::image();
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$mk 		= new Kategori_model();
		$kategori 	= $mk->listing();

		// Start validasi
		$validated =  $this->validate([
			'berita_judul' 	=> 'required',
			'berita_isi' 	=> 'required',
			'berita_gambar'	=> [
				'uploaded[berita_gambar]',
				'mime_in[berita_gambar,image/jpg,image/jpeg,image/gif,image/png]',
				'max_size[berita_gambar,4096]',
			],
		]);
		
		if ($validated) {
			// Image upload
			$avatar  	= $this->request->getFile('berita_gambar');
			$namabaru 	= $avatar->getRandomName();
			$avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
        	// Masuk database
			$data = array(	'user_id'		=> 1,
				'kategori_id'	=> $this->request->getVar('kategori_id'),
				'berita_slug'	=> strtolower(url_title($this->request->getVar('berita_judul'))),
				'berita_judul'	=> $this->request->getVar('berita_judul'),
				'berita_isi'	=> $this->request->getVar('berita_isi'),
				'berita_status'	=> $this->request->getVar('berita_status'),
				'berita_jenis'	=> $this->request->getVar('berita_jenis'),
				'keywords'		=> $this->request->getVar('keywords'),
				'berita_gambar'	=> $namabaru,
				'tanggal_post'	=> date('Y-m-d H:i:s')
			);
			$model = new Berita_model();
			$model->save($data);
			$session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/berita'));
			// End masuk database
		}
		$data = array(	'title'		=> 'Tambah Berita',
			'kategori'	=> $kategori,
			'content'	=> 'admin/berita/add');
		return view('admin/layout/wrapper',$data);
		
	}

	// Edit
	public function edit($berita_id)
	{
		helper('form');
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$mk 		= new Kategori_model();
		$mb 		= new Berita_model();
		$kategori 	= $mk->listing();
		$berita 	= $mb->detail($berita_id);

		// Start validasi
		$validated =  $this->validate([
			'berita_judul' 	=> 'required',
			'berita_isi' 			=> 'required',
			'berita_gambar'	 	=> [
				'uploaded[berita_gambar]',
				'mime_in[berita_gambar,image/jpg,image/jpeg,image/gif,image/png]',
				'max_size[berita_gambar,4096]',
			],
		]);
		
		if ($validated) {
			// Image upload
			$avatar  	= $this->request->getFile('berita_gambar');
			$namabaru 	= $avatar->getRandomName();
			$avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
        	// Masuk database
			$data = array(	'berita_id'		=> $this->request->getVar('berita_id'),
				'user_id'		=> 1,
				'kategori_id'	=> $this->request->getVar('kategori_id'),
				'berita_slug'	=> strtolower(url_title($this->request->getVar('berita_judul'))),
				'berita_judul'	=> $this->request->getVar('berita_judul'),
				'berita_isi'			=> $this->request->getVar('berita_isi'),
				'berita_status'	=> $this->request->getVar('berita_status'),
				'berita_jenis'	=> $this->request->getVar('berita_jenis'),
				'keywords'		=> $this->request->getVar('keywords'),
				'berita_gambar'		=> $namabaru,
			);
			$model = new Berita_model();
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diedit');
			return redirect()->to(base_url('admin/berita'));
			// End masuk database
		}
		$data = array(	'title'		=> 'Edit Berita',
			'kategori'	=> $kategori,
			'berita'	=> $berita,
			'content'	=> 'admin/berita/edit');
		return view('admin/layout/wrapper',$data);
	}

	// Delete
	public function delete($berita_id)
	{
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 	= new Berita_model();
		$berita = $model->hapus($berita_id);
		$session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/berita'));
	}
}