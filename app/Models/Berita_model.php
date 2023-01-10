<?php namespace App\Models;

use CodeIgniter\Model;

class Berita_model extends Model
{
	protected $table 		= 'tbl_berita';
	protected $primaryKey 	= 'berita_id';
	protected $allowedFields = ['user_id',
	'kategori_id',
	'berita_slug',
	'berita_judul',
	'berita_isi',
	'berita_status',
	'berita_jenis',
	'keywords',
	'berita_gambar',
	'tanggal_post'];

	// Listing
	public function listing()
	{
		$this->select('tbl_berita.*, tbl_kategori.kategori_nama');
		$this->join('tbl_kategori','tbl_kategori.kategori_id = tbl_berita.kategori_id');
		// $this->where('berita_status','Publish');
		$this->orderBy('berita_id','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}

	// Listing home
	public function home()
	{
		$this->select('tbl_berita.*, tbl_kategori.kategori_nama');
		$this->join('tbl_kategori','tbl_kategori.kategori_id = tbl_berita.kategori_id');
		$this->where('berita_status','Publish');
		$this->orderBy('berita_id','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}

	// Read
	public function read($berita_slug)
	{
		$this->select('tbl_berita.*, tbl_kategori.kategori_nama');
		$this->join('tbl_kategori','tbl_kategori.kategori_id = tbl_berita.kategori_id');
		$this->where(array(	'berita_status'	=> 'Publish',
			'berita_slug'	=> $berita_slug));
		$query = $this->get();
		return $query->getRowArray();
	}

	// Edit
	public function edit($data)
	{
		$this->where('berita_id',$data['berita_id']);
		$this->replace($data);
	}

	// Detail
	public function detail($berita_id)
	{
		$this->select('tbl_berita.*, tbl_kategori.kategori_nama');
		$this->join('tbl_kategori','tbl_kategori.kategori_id = tbl_berita.kategori_id');
		$this->where(array(	'berita_status'	=> 'Publish',
			'berita_id'		=> $berita_id));
		$query = $this->get();
		return $query->getRowArray();
	}

	// Delete
	public function hapus($berita_id)
	{
		$this->where('berita_id',$berita_id);
		$this->delete();
	}
}