<?php namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
	protected $table 		= 'tbl_user';
	protected $primaryKey 	= 'user_id';
	protected $allowedFields = ['user_nama','user_email','username','password','akses_level'];
	
	// Listing
	public function listing()
	{
		$this->select('*');
		$query = $this->get();
		return $query->getResultArray();
	}

	// Detail
	public function detail($user_id)
	{
		$this->select('*');
		$this->where(array(	'user_id'	=> $user_id));
		$query = $this->get();
		return $query->getRowArray();
	}

	// Detail
	public function login($username,$password)
	{
		$this->select('*');
		$this->where(['username'	=> $username,
			'password'	=> sha1($password)]);
		$query = $this->get();
		return $query->getRowArray();
	}

	// Insert
	public function tambah($data)
	{
		$this->save($data);
	}

	// Edit
	public function edit($data)
	{
		$this->where('user_id',$data['user_id']);
		$this->replace($data);
	}

	// Delete
	public function hapus($user_id)
	{
		$this->where('user_id',$user_id);
		$this->delete();
	}
}