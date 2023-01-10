<?php  namespace App\Controllers\admin;

// Load model
use App\Models\User_model;
// End load model

use CodeIgniter\Controller;

class User extends Controller
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
		$model = new User_model();
		$user = $model->listing();
		$data = array(	
			'title'		=> 'Data User',
			'user'		=> $user,
			'content'	=> 'admin/user/index');
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
			'user_nama' 		=> 'required',
			'user_email'  	=> 'required',
			'username'  => 'required',
			'password'  => 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Tambah User',
				'content'	=> 'admin/user/add');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'user_nama'			=> $this->request->getVar('user_nama'),
				'user_email'			=> $this->request->getVar('user_email'),
				'username'		=> $this->request->getVar('username'),
				'password'		=> sha1($this->request->getVar('password')),
				'akses_level'	=> $this->request->getVar('akses_level')
			);
			$model = new User_model();
			$model->save($data);
			$session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/user'));
		}
		// End masuk database
	}


	// Edit
	public function edit($user_id)
	{
		helper('form');
		$session	= \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
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
			$data = array(	'title'		=> 'Edit User',
				'user'		=> $user,
				'content'	=> 'admin/user/edit');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'user_id'		=> $this->request->getVar('user_id'),
				'user_nama'			=> $this->request->getVar('user_nama'),
				'user_email'			=> $this->request->getVar('user_email'),
				'username'		=> $this->request->getVar('username'),
				'password'		=> sha1($this->request->getVar('password')),
				'akses_level'	=> $this->request->getVar('akses_level')
			);
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diupdate');
			return redirect()->to(base_url('admin/user'));
		}
		// End masuk database
	}

	// Delete
	public function delete($user_id)
	{
		$session = \Config\Services::session();
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 	= new User_model();
		$user = $model->hapus($user_id);
		$session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/user'));
	}
}