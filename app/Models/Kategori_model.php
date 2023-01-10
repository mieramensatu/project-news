<?php namespace App\Models;

use CodeIgniter\Model;

class Kategori_model extends Model
{
	protected $table 		= 'tbl_kategori';
	protected $primaryKey 	= 'kategori_id';
	protected $allowedFields = ['kategori_slug','kategori_nama','urutan'];
	
	// Listing
	public function listing()
	{
		$this->select('*');
		$this->orderBy('kategori_id','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}

	// Detail
	public function detail($kategori_id)
	{
		$this->select('*');
		$this->where(array(	'kategori_id' => $kategori_id));
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
		$this->where('kategori_id',$data['kategori_id']);
		$this->replace($data);
	}

	// Delete
	public function hapus($kategori_id)
	{
		$this->where('kategori_id',$kategori_id);
		$this->delete();
	}
}