<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Home extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function dropdown_kategori()
	{
		$data;
		$result = $this->db->get('kategori')->result();

		$data[0] = '-- Pilih Kategori Fasilitas --';
		if(count($result) > 0){
			foreach($result as $r){
				$data[$r->id_kategori] = $r->nama_kategori;
			}
		}

		return $data;
	}

	public function dropdown_spesialis()
	{
		$data;
		$result = $this->db->get('spesialis')->result();

		$data[0] = '-- Pilih Dokter Spesialis --';
		if(count($result) > 0){
			foreach($result as $r){
				$data[$r->id_spesialis] = $r->nama_spesialis;
			}
		}

		return $data;
	}
}