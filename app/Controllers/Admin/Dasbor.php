<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Berita_model;
use App\Models\User_model;
// End load model

use CodeIgniter\Controller;

class Dasbor extends Controller
{
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
		$data = array(	'title'		=> 'Halaman Dashboard',
			'berita'	=> $berita,
			'content'	=> 'admin/dasbor/index');
		return view('admin/layout/wrapper',$data);
	}

	// Akun
	public function akun()
	{
		helper('form');
		$session	= \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$user_id 	= $session->get('user_id');
		$model 		= new User_model();
		$user 		= $model->detail($user_id);
		// Start validasi
		if (! $this->validate([
			'user_nama' 		=> 'required',
			'user_email'  	=> 'required',
			'username'  => 'required',
			'password'  => 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Update Profile',
				'user'		=> $user,
				'content'	=> 'admin/dasbor/akun');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'user_id'		=> $this->request->getVar('user_id'),
				'user_nama'			=> $this->request->getVar('user_nama'),
				'user_email'			=> $this->request->getVar('user_email'),
				'username'			=> $this->request->getVar('username'),
				'password'		=> sha1($this->request->getVar('password')),
				'akses_level'			=> $this->request->getVar('akses_level'),
			);
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diupdate');
			return redirect()->to(base_url('admin/dasbor/akun'));
		}
		// End masuk database
	}
}