<?php namespace App\Controllers;

// Load model
use App\Models\User_model;
// End load model

class Login extends BaseController
{
	public function index()
	{
		helper('form');
		$session = \Config\Services::session();
		$model = new User_model();
		if ($this->validate([
			'username' 		=> 'required',
			'password'		=> 'required'
		]))
		{
			$username = $this->request->getVar('username');
			$password = $this->request->getVar('password');
			// Check user
			$check_user = $model->login($username,$password);
			if($check_user)
			{
				$session->set('username',$username);
				$session->set('user_id',$check_user['user_id']);
				$session->set('akses_level',$check_user['akses_level']);
				$session->set('user_nama',$check_user['user_nama']);
				// Login success
				$session->setFlashdata('sukses', 'Anda berhasil login');
				return redirect()->to(base_url('admin/dasbor'));
			}else{
				$data = array(	'title'	=> 'Login Administrator - Gading Portal Berita',
					'error'	=> 'Username/password salah');
				return view('login/index',$data);
			}
		}

		$data = array(	'title'	=> 'Login Administrator - Gading Portal Berita');
		return view('login/index',$data);
	}

	// Logout
	public function logout()
	{
		$session = \Config\Services::session();
		$session->remove('username');
		$session->remove('akses_level');
		$session->remove('user_nama');
		$session->setFlashdata('sukses', 'Anda berhasil logout');
		return redirect()->to(base_url('login'));
	}
}