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
				$data[$r->id] = $r->nama_spesialis;
			}
		}

		return $data;
	}


	public function get_tempat($id){
		$this->db->select('*')
				 ->from('lokasi')
			     ->where('id_lokasi', $id);

		return $this->db->get()->row();
	}

	public function get_review($id){
		$this->db->select('r.*, u.*')
				 ->from('review as r')
				 ->join('user as u', 'u.id=r.id_user', 'LEFT')
				 ->where('r.id_lokasi', $id)
				 ->order_by('r.tanggal', 'desc');

		return $this->db->get()->result();
	}

	public function get_dokter($id){
		$this->db->select('d.*, s.nama_spesialis as spesialis')
				 ->from('dokter as d')
				 ->join('spesialis as s', 'd.id_spesialis=s.id', 'LEFT')
				 ->join('lokasi_spesialis as ls', 'ls.id_dokter=d.id_dokter', 'LEFT')
				 ->join('lokasi as l', 'l.id_lokasi=ls.id_lokasi', 'LEFT')
				 ->where('l.id_lokasi', $id);

		return $this->db->get()->result();
	}
}