<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Kategori_model;
// End load model

use CodeIgniter\Controller;

class Kategori extends Controller
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
		$model = new Kategori_model();
		$kategori = $model->listing();
		$data = array(	
			'title'		=> 'Data Kategori',
			'kategori'	=> $kategori,
			'content'	=> 'admin/kategori/index');
		return view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function add()
	{
		helper('form');
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		// Start validasi
		if (! $this->validate([
			'kategori_nama' 		=> 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Tambah Kategori',
				'content'	=> 'admin/kategori/add');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'kategori_nama'	=> $this->request->getVar('kategori_nama'),
				'kategori_slug'	=> url_title($this->request->getVar('kategori_nama')),
				'urutan'		=> $this->request->getVar('urutan')
			);
			$model = new Kategori_model();
			$model->save($data);
			$session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/kategori'));
		}
		// End masuk database
	}

	// Edit
	public function edit($kategori_id)
	{
		helper('form');
		$session	= \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 		= new Kategori_model();
		$kategori 		= $model->detail($kategori_id);
		// Start validasi
		if (! $this->validate([
			'kategori_nama' 		=> 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Edit Kategori',
				'kategori'	=> $kategori,
				'content'	=> 'admin/kategori/edit');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'kategori_id'	=> $this->request->getVar('kategori_id'),
				'kategori_nama'	=> $this->request->getVar('kategori_nama'),
				'kategori_slug'	=> url_title($this->request->getVar('kategori_nama')),
				'urutan'		=> $this->request->getVar('urutan')
			);
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diupdate');
			return redirect()->to(base_url('admin/kategori'));
		}
		// End masuk database
	}
	// Delete
	public function delete($kategori_id)
	{
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 	= new Kategori_model();
		$kategori = $model->hapus($kategori_id);
		$session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/kategori'));
	}

}