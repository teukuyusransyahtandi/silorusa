<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_db extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function cek_login($data)
	{
		return $this->db->get_where('user', $data);
	}

	public function tambah_dokter($data)
	{
		return $this->db->insert('dokter', $data);
	}

	public function daftar_spesialis()
	{
		return $this->db->select('*')
		->from('spesialis')
		->get()
		->result();
	}

	public function lihatdokter()
	{
		return $this->db->select('*')
		->from('dokter')
		->get()
		->result();
	}

	public function daftar_lokasi()
	{
		return $this->db->select('*')
		->from('lokasi')
		->get()
		->result();
	}

	public function tambah_lokasi($data){
		return $this->db->insert('lokasi',$data);
	}

	public function tambah_dokter_tempat($data){
		return $this->db->insert('lokasi_spesialis',$data);
	}


	public function lihat_lokasi(){
		return $this->db->select('*')
		->from('lokasi')
		->join('kategori_lokasi','lokasi.id_lokasi=kategori_lokasi.id_lokasi')
		->join('kategori','kategori.id_kategori=kategori_lokasi.id_kategori')
		->get()
		->result();
	}

	public function lihat_kategori(){
		return $this->db->select('*')
		->from('kategori')
		->get()
		->result();
	}

	public function tambah_kategori_lokasi($data){
		return $this->db->insert('kategori_lokasi',$data);
	}

	public function tambah_jenis_spesialis($data){
		return $this->db->insert('spesialis',$data);
	}

	public function lihatdatadokter(){
		return $this->db->select('*')
		->from('dokter')
		->join('spesialis','dokter.id_spesialis=spesialis.id')
		->join('lokasi_spesialis','lokasi_spesialis.id_dokter=dokter.id_dokter')
		->join('lokasi','lokasi_spesialis.id_lokasi=lokasi.id_lokasi')
		->get()
		->result();
	}

	public function lihat_kategori_lokasi(){
		return $this->db->select('*')
		->from('lokasi')
		->join('kategori_lokasi','lokasi.id_lokasi=kategori_lokasi.id_lokasi')
		->join('kategori','kategori.id_kategori=kategori_lokasi.id_kategori')
		->get()
		->result();
	}

	public function edit_pengisiandata($id){
		return $this->db->select('*')
		->from('lokasi')
		->join('kategori_lokasi','lokasi.id_lokasi=kategori_lokasi.id_lokasi')
		->join('kategori','kategori.id_kategori=kategori_lokasi.id_kategori')
		->where("lokasi.id_lokasi=$id")
		->get()
		->result();

	}

	public function edit_lokasi($data,$where){
		return $this->db->update('lokasi', $data, $where);
	}

	public function edit_lihatdatadokter($id){
		return $this->db->select('*')
		->from('dokter')
		->join('spesialis','dokter.id_spesialis=spesialis.id')
		->join('lokasi_spesialis','lokasi_spesialis.id_dokter=dokter.id_dokter')
		->join('lokasi','lokasi_spesialis.id_lokasi=lokasi.id_lokasi')
		->where("dokter.id_dokter=$id")
		->get()
		->result();
	}

	public function edit_dokter($data,$where){
		return $this->db->update('dokter', $data, $where);
	}

	public function lihatdataspesialis(){
		return $this->db->select('*')
		->from('spesialis')
		->get()
		->result();
	}
	

	public function edit_kategorilokasi($id){
		return $this->db->select('*')
		->from('lokasi')
		->join('kategori_lokasi','lokasi.id_lokasi=kategori_lokasi.id_lokasi')
		->join('kategori','kategori.id_kategori=kategori_lokasi.id_kategori')
		->where("lokasi.id_lokasi=$id")
		->get()
		->result();
	}

	public function edit_kategori_lokasi($data, $where){
		return $this->db->update('kategori_lokasi', $data, $where);
	}

	public function edit_lihatdataspesialis($id){
		return $this->db->select('*')
		->from('spesialis')
		->where("spesialis.id=$id")
		->get()
		->result();
	}

	public function edit_jenis_spesialis($data, $where){
		return $this->db->update('spesialis', $data, $where);
	}
	

}